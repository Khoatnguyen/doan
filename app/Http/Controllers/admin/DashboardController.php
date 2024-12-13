<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OrderTourInfor;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        //bar chart
        $payments = OrderTourInfor::selectRaw('DAY(created_at) as day, SUM(payment) as total_payment')
            ->whereYear('created_at', 2024)
            ->whereMonth('created_at', 1)
            ->groupBy('day')
            ->orderBy('day', 'asc')
            ->pluck('total_payment', 'day')
            ->toArray();
        $debts = OrderTourInfor::selectRaw('DAY(created_at) as day, SUM(debt) as total_debt')
            ->whereYear('created_at', 2024)
            ->whereMonth('created_at', 1)
            ->groupBy('day')
            ->orderBy('day', 'asc')
            ->pluck('total_debt', 'day')
            ->toArray();
        $days = range(1, 31); 
        $paymentsData = array_fill_keys($days, 0); 
        $debtsData = array_fill_keys($days, 0); 
        foreach ($payments as $day => $payment) {
            $paymentsData[$day] = $payment;
        }
        foreach ($debts as $day => $debt) {
            $debtsData[$day] = $debt;
        }
        $chartPayment = new Chart();
        $chartDebt = new Chart();
        $chartPayment->labels(array_map(function($day) {
            return "Ngày $day";
        }, $days));
        $chartDebt->labels(array_map(function($day) {
            return "Ngày $day";
        }, $days));
        $chartPayment->dataset('Thu', 'bar', array_values($paymentsData))
            ->options([
                'backgroundColor' => '#7599FF', 
            ]);

        $chartDebt->dataset('Nợ', 'bar', array_values($debtsData))
            ->options([
                'backgroundColor' => '#64C8FF', 
            ]);

        //pie chart
        $chartCircle = new Chart();
        $data = OrderTourInfor::selectRaw('YEAR(created_at) as year, SUM(payment) as total_payment')
            ->groupBy('year')
            ->orderBy('year', 'asc')
            ->pluck('total_payment', 'year')
            ->toArray();
        $yearly = array_keys($data);
        $yearlyPayment = array_values($data); 
        $chartCircle->labels($yearly);
        $chartCircle->dataset('Tổng thu nhập', 'doughnut', $yearlyPayment)
            ->options([
                'backgroundColor' => ['#5D87FF', '#ECF2FF', '#F9F9FD'],
                'hoverBackgroundColor' => ['#8CB5FF', '#ffffff', '#ffffff'], 
            ]);

        //tăng trưởng
        $lastTwoYearsData = OrderTourInfor::selectRaw('YEAR(created_at) as year, SUM(payment) as total_payment')
        ->whereYear('created_at', '>=', now()->year - 1) 
        ->groupBy('year')
        ->orderBy('year', 'desc') 
        ->get();
        $dataYear = $lastTwoYearsData->pluck('total_payment', 'year')->toArray();
        $growthPercentage = 0;
        if (isset($dataYear[now()->year]) && isset($dataYear[now()->year - 1])) {
            // Tính phần trăm tăng trưởng giữa năm hiện tại và năm trước
            $growthPercentage = (($dataYear[now()->year] - $dataYear[now()->year - 1]) / $dataYear[now()->year - 1]) * 100;
        }
        $growthMessage = $growthPercentage > 0
            ? 'Tăng ' . round($growthPercentage, 2) . '% so với năm trước'
            : ($growthPercentage < 0
                ? 'Giảm ' . round(abs($growthPercentage), 2) . '% so với năm trước'
                : 'Không thay đổi so với năm trước');
        //line chart
        $paymentsMonth = OrderTourInfor::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, SUM(payment) as total_payment')
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();

        $lineLabels = [];
        $totalPayments = [];
        foreach ($paymentsMonth as $payment) {
            $lineLabels[] = $payment->year . '-' . str_pad($payment->month, 2, '0', STR_PAD_LEFT);
            $totalPayments[] = $payment->total_payment;
        }
        $chartLine = new Chart();
        $chartLine->labels($lineLabels);
        $chartLine->dataset('Tổng thu nhập', 'line', $totalPayments) 
            ->color('rgba(75, 192, 192, 1)') 
            ->backgroundColor('rgba(75, 192, 192, 0.2)'); 
        $dataOrder = OrderTourInfor::paginate('3');
        return view('admin.dashboard',
         compact(
            'chartDebt','chartPayment','chartLine',
            'chartCircle','growthMessage',
            'growthPercentage','dataOrder'
        ));
    }
    public function getChartData(Request $request)
    {
        $month = $request->input('month', now()->month);
        $payments = OrderTourInfor::selectRaw('DAY(created_at) as day, SUM(payment) as total_payment')
            ->whereYear('created_at', 2024)
            ->whereMonth('created_at', $month)
            ->groupBy('day')
            ->orderBy('day', 'asc')
            ->pluck('total_payment', 'day')
            ->toArray();
        $debts = OrderTourInfor::selectRaw('DAY(created_at) as day, SUM(debt) as total_debt')
            ->whereYear('created_at', 2024)
            ->whereMonth('created_at', $month)
            ->groupBy('day')
            ->orderBy('day', 'asc')
            ->pluck('total_debt', 'day')
            ->toArray();

        $days = range(1, 31); // Các ngày trong tháng
        $paymentsData = array_fill_keys($days, 0); // Mảng thanh toán, khởi tạo tất cả bằng 0
        $debtsData = array_fill_keys($days, 0); // Mảng nợ, khởi tạo tất cả bằng 0

        // Cập nhật dữ liệu thanh toán và nợ vào mảng
        foreach ($payments as $day => $payment) {
            $paymentsData[$day] = $payment;
        }

        foreach ($debts as $day => $debt) {
            $debtsData[$day] = $debt;
        }

        // Trả về dữ liệu dưới dạng JSON
        return response()->json([
            'labels' => array_map(function($day) {
                return "Ngày $day";
            }, $days), // Nhãn cho biểu đồ
            'payments' => array_values($paymentsData), // Dữ liệu thanh toán
            'debts' => array_values($debtsData) // Dữ liệu nợ
        ]);
    }
}

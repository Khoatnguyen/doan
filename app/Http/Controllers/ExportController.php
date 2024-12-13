<?php

namespace App\Http\Controllers;

use App\Exports\DebtExport;
use App\Exports\ExpenseExport;
use App\Exports\OrderExport;
use App\Models\OrderTourInfor;
use App\Models\ScheduleFee;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function OrderExport()
    {
        $order= OrderTourInfor::with('tour')->get();
        
        return Excel::download(new OrderExport($order), 'order-report.xlsx');
    }
    public function DebtExport()
    {
        $order= OrderTourInfor::with('tour.ScheduleFee')->get();
        return Excel::download(new DebtExport($order), 'debt-report.xlsx');
    }
    public function ExpenseExport()
    {
        $expense= ScheduleFee::with('tour')->get();
        return Excel::download(new ExpenseExport($expense), 'expense-report.xlsx');
    }
}

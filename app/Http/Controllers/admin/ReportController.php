<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OrderTourInfor;
use App\Models\ScheduleFee;
use App\Models\Tour;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //debt report
    public function getDebtReport(){
        $tour= OrderTourInfor::with('tour.ScheduleFee')->paginate(5);
        return view('admin.manager.reports.debt-report')->with([
            'tour'=>$tour,
        ]);
    }
    public function editDebtReport(Request $request){
        if($request->ajax()){
            $update = OrderTourInfor::where('id',$request->id)->first();
            $dataInput = array(
                "debt"=>0,
                "payment"=>$request->payment+$request->debt,
            );
            $update->update($dataInput);
            if($update){
                return response()->json([
                    'success' => true,
                    'message' => 'Cập nhật thành công!',
                ]);
            }

        }
    }
    public function searchDebt (Request $request){
        $key = $request->key;
        if ($request->ajax()) {
            
            $items = OrderTourInfor::with('tour')->where('tour_id', 'LIKE', '%' . $key . '%')->orwhere('order_id', 'LIKE', '%' . $key . '%')->orwhere('reservation_name', 'LIKE', '%' . $key . '%')->get();
            $output = $items;
            return Response($output);
        }
    }

    //expense report
    public function listExpense(){
        $data = ScheduleFee::with('tour')->paginate(5);
        return view('admin.manager.reports.expense-report')->with([
            'data'=>$data
        ]);
    }
    public function searchExpense (Request $request){
        $key = $request->key;
        if ($request->ajax()) {
            $items = ScheduleFee::with('tour')->where('tour_id', 'LIKE', '%' . $key . '%')->get();
            $output = $items;
            return Response($output);
        }
    }

}

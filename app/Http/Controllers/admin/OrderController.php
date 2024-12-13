<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OrderStep;
use App\Models\OrderTourInfor;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function getList(){
        $order= OrderTourInfor::with('tour')->paginate(5);
        return view('admin.manager.order.list-order')->with([
            'order'=>$order,
        ]);
    }
    public function getStepOrder($id){
        $order= OrderTourInfor::with('tour.ScheduleFee')->where('id',$id)->first();
        $total= $order->number_person*($order->tour->ScheduleFee->airfare_fee+$order->tour->ScheduleFee->trans_fee);
        return view('admin.manager.order.order-step')->with([
            'order'=>$order,
            'total'=>$total,
        ]);
    }
    public function StepOrder(Request $request){
        $createTour = array(
            'fight_code' => $request->fight_code,
            'hotel_code' => $request->hotel_code,
            'order_code' => $request->order_code,
        );
        $statusUpdate = array(
            'status'=> 1,
            'payment_supplier' => $request->payment_supplier,
            'debt_supplier' => 0,
        );
        $saveStatus = OrderTourInfor::where("order_id",$request->order_code)->first();
        $saveTour = OrderStep::create($createTour);
        $saveStatus ->update($statusUpdate);
        //dd($saveTour);
        if ($saveTour) {
            return redirect()->route('get.list.order');
        } else {
            return 'Không thành công';
        }
    }

}

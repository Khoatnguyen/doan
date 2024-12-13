<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OrderTourInfor;
use App\Models\ScheduleFee;
use App\Models\Schedules;
use App\Models\Tour;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ManagerTourController extends Controller
{
    public function index(Request $request)
    {
        $detail_tour = Tour::all();
        return view('admin.manager.manager-tour')->with('detail_tour', $detail_tour);
    }

    public function getAddTour()
    {
        return view('admin.manager.tour.add-tour');
    }

    public function addTour(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'small_description' => 'required',
            'time' => 'required',
            'type_tour' => 'required',
            'address' => 'required',
            'vehicle' => 'required',
            'number_person' => 'required',
            'include_price' => 'required',
            'none_include_price' => 'required',
            'note' => 'required',
            'schedule_price' => 'required',
            'price' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
        ], [
            'title.required' => 'Tiêu đề không được để trống',
            'description.required' => 'Giới thiệu không được để trống',
            'small_description.required' => 'Giới thiệu nhỏ không được để trống',
            'time.required' => 'Thời gian không được để trống',
            'type_tour.required' => 'Loại tour không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
            'vehicle.required' => 'Phương tiện di chuyển không được để trống',
            'include_price.required' => 'Giá bao gồm không được để trống',
            'none_include_price.required' => 'Giá không bao gồm không được để trống',
            'note.required' => 'Ghi chú không được để trống',
            'number_person.required' => 'Số người đi không được để trống',
            'schedule_price.required' => 'Giá lịch trình không được để trống',
            'price.required' => 'Giá tiền không được để trống',
            'date_start.required' => 'Ngày đi không được để trống',
            'date_end.required' => 'Ngày về không được để trống',
        ]);

        $image = array();

        if ($files = $request->file('library_images')) {
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $file_name = $image_name . '-' . 'imageTour.' . $ext;
                $image_url = $file_name;
                $file->move(public_path('storage'), $file_name);
                $image[] = $image_url;
            }
        }
        $createTour = array(
            'title' => $request->title,
            'description' => $request->description,
            'small_description' => $request->small_description,
            'time' => $request->time,
            'type_tour' => $request->type_tour,
            'address' => $request->address,
            'depart' => $request->depart,
            'vehicle' => $request->vehicle,
            'library_images' => implode('|', $image),
            'number_person' => $request->number_person,
            'include_price' => $request->include_price,
            'none_include_price' => $request->none_include_price,
            'schedule' => $request->schedule,
            'note' => $request->note,
            'schedule_price' => $request->schedule_price,
            'price' => $request->price,
            'date_start' => $request->date_start,
            'date_end' => $request->date_end,
        );
        $saveTour = Tour::create($createTour);
        //dd($saveTour);
        if ($saveTour) {
            return redirect()->route('get.list-tour');
        } else {
            return 'Không thành công';
        }
    }
    public function getEdit($id)
    {
        $data = Tour::findOrFail($id);
        return view('admin.manager.tour.edit-tour')->with(['data' => $data]);
    }

    public function updata(Request $request, $id)
    {
        if (!empty($request->id) && is_numeric($request->id)) {
            $detail_tour = Tour::where('id', '=', $request->id)->first();
            $image = array();
            if ($files = $request->file('library_images')) {
                foreach ($files as $file) {
                    $image_name = md5(rand(1000, 10000));
                    $ext = strtolower($file->getClientOriginalExtension());
                    $file_name = $image_name . '-' . 'imageTour.' . $ext;
                    $image_url = $file_name;
                    $file->move(public_path('storage'), $file_name);
                    $image[] = $image_url;
                }
            }
            $datainput = array(
                'title' => $request->title,
                'description' => $request->description,
                'small_description' => $request->small_description,
                'time' => $request->time,
                'type_tour' => $request->type_tour,
                'address' => $request->address,
                'vehicle' => $request->vehicle,
                'depart' => $request->depart,
                'library_images' => implode('|', $image),
                'number_person' => $request->number_person,
                'include_price' => $request->include_price,
                'none_include_price' => $request->none_include_price,
                'schedule' => $request->schedule,
                'note' => $request->note,
                'schedule_price' => $request->schedule_price,
                'price' => $request->price,
                'date_start' => $request->date_start,
                'date_end' => $request->date_end,
            );

            $detail_tour->update($datainput);
            if ($detail_tour) {
                return redirect()->route('get.list-tour');
            } else {
                return 'Thêm không thành công';
            }
        }
    }

    public function delete($id)
    {
        $datadelete = Tour::findOrFail($id);
        $datadelete->delete();
        return redirect()->route('get.list-tour');
    }

    // schedule tour
    public function getListSchedule($id)
    {
        $dataTour = Tour::findOrFail($id);
        $data = Schedules::where('tour_id', '=', $id)->get();
        return view('admin.manager.tour.schedule.list-schedule')->with([
            'dataTour' => $dataTour,
            'data' => $data
        ]);
    }
    public function getAddSchedule($id)
    {
        $dataTour = Tour::findOrFail($id);
        $data = Schedules::where('tour_id', '=', $id)->get();
        return view('admin.manager.tour.schedule.add-schedule')->with([
            'dataTour' => $dataTour,
            'data' => $data
        ]);
    }
    public function addSchedule(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ], [
            'title.required' => 'Tiêu đề không được để trống',
            'description.required' => 'Giới thiệu không được để trống',

        ]);


        $createSchedule = array(
            'tour_id' => $id,
            'title' => $request->title,
            'description' => $request->description,

        );
        $saveSchedule = Schedules::create($createSchedule);

        if ($saveSchedule) {
            $dataTour = Tour::findOrFail($id);
            $data = Schedules::where('tour_id', '=', $id)->get();
            return view('admin.manager.tour.schedule.list-schedule')->with([
                'dataTour' => $dataTour,
                'data' => $data
            ]);
        } else {
            return 'Không thành công';
        }
    }
    public function deleteSchedule($id)
    {
        $datadelete = Schedules::findOrFail($id);
        $test = $datadelete["tour_id"];
        $datadelete->delete();
        return redirect()->to('dashboard/list-schedule/'.$test);
        
    }
    //schedule fee
    public function getScheduleFee($id){
        $listTour = Tour::where('id',$id)->with('ScheduleFee')->first();
        return view('admin.manager.tour.schedule-fee.list-fee')->with([
            'listTour'=>$listTour,
        ]);
    }
    public function getAddScheduleFee($id){
        $listTour = Tour::where('id',$id)->first();
        return view('admin.manager.tour.schedule-fee.add-fee')->with([
            'listTour'=>$listTour,
        ]);
    }
    public function postAddScheduleFee(Request $request){
        $integer = intval($request->tour_id);
        $saveFee= new ScheduleFee();
        $saveFee->tour_id = $integer;
        $saveFee->airfare_fee = $request->airfare;
        $saveFee->trans_fee = $request->trans_fee;
        $saveFee->meal_fee = $request->meal_fee;
        $saveFee->guide_fee = $request->guide_fee;
        $saveFee->hotel_fee = $request->hotel_fee;
        $saveFee->other_fee = $request->other_fee;
        $saveFee->save();
        $total= ($request->airfare)+($request->trans_fee)+($request->meal_fee)+($request->guide_fee)+($request->hotel_fee)+($request->other_fee);
   
        if($saveFee){
            $updateTour = Tour::where('id',$request->tour_id); 
            $dataInput= array(
                'schedule_price'=>$total,
                'price'=>$total*0.3,
            );
            $updateTour->update($dataInput);  
            $listTour = Tour::where('id',$request->tour_id)->with('ScheduleFee')->first();
            return view('admin.manager.tour.schedule-fee.list-fee')->with([
                'listTour'=>$listTour,
            ]);

        }
       
    }
    public function getEditScheduleFee($id){
        $listFee = ScheduleFee::where('id',$id)->first();
        return view('admin.manager.tour.schedule-fee.edit-fee')->with([
            'listFee'=>$listFee,
        ]);
    }
    public function postEditScheduleFee(Request $request,$id){
        $saveFee = ScheduleFee::where('id',$id)->first();
        $datainput = array(
            'airfare_fee' => $request->airfare,
            'trans_fee' => $request->trans_fee,
            'meal_fee' => $request->meal_fee,
            'guide_fee' => $request->guide_fee,
            'hotel_fee' => $request->hotel_fee,
            'other_fee' => $request->other_fee,
        );
        $saveFee->update($datainput);
        $total= ($request->airfare)+($request->trans_fee)+($request->meal_fee)+($request->guide_fee)+($request->hotel_fee)+($request->other_fee);
        if($saveFee){
            $updateTour = Tour::where('id',$request->tour_id); 
            $dataInput= array(
                'schedule_price'=>$total,
                'price'=>$total+$total*0.3,
            );
            $updateTour->update($dataInput);  
            $listTour = Tour::where('id',$request->tour_id)->with('ScheduleFee')->first();
            return view('admin.manager.tour.schedule-fee.list-fee')->with([
                'listTour'=>$listTour,
            ]);

        }
    }

    public function searchOrder(Request $request){
        $key = $request->key;
        if ($request->ajax()) {
            
            $items = OrderTourInfor::with('tour')->where('tour_id', 'LIKE', '%' . $key . '%')->orwhere('order_id', 'LIKE', '%' . $key . '%')->orwhere('reservation_name', 'LIKE', '%' . $key . '%')->orwhere('reservation_phone', 'LIKE', '%' . $key . '%')->get();
            $output = $items;
            return Response($output);
        }
    }
}

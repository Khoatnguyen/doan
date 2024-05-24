<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ManagerTourController extends Controller
{
    public function index(Request $request)
    {
        $detail_tour = Tour::all();
        return view('admin.manager.manager-tour')->with('detail_tour',$detail_tour);
    }

    public function getAddTour()
    {
        return view('admin.manager.tour.add-tour');
    }

    public function addTour(Request $request)
    {
        $request ->validate([
            'title'=>'required',
            'description'=>'required',
            'small_description'=>'required',
            'time'=>'required',
            'type_tour'=>'required',
            'address'=>'required',
            'vehicle'=>'required',
            'number_person'=>'required',
            'include_price'=>'required',
            'none_include_price'=>'required',
            'note'=>'required',
            'schedule_price'=>'required',
            'price'=>'required',
            'date_start'=>'required',
        ],[
            'title.required'=>'Tiêu đề không được để trống',
            'description.required'=>'Giới thiệu không được để trống',
            'small_description.required'=>'Giới thiệu nhỏ không được để trống',
            'time.required'=>'Thời gian không được để trống',
            'type_tour.required'=>'Loại tour không được để trống',
            'address.required'=>'Địa chỉ không được để trống',
            'vehicle.required'=>'Phương tiện di chuyển không được để trống',
            'include_price.required'=>'Giá bao gồm không được để trống',
            'none_include_price.required'=>'Giá không bao gồm không được để trống',
            'note.required'=>'Ghi chú không được để trống',
            'number_person.required'=>'Số người đi không được để trống',
            'schedule_price.required'=>'Giá lịch trình không được để trống',
            'price.required'=>'Giá tiền không được để trống',
            'date_start.required'=>'Ngày đi không được để trống',
        ]);

        $image = array();

        if ($files = $request->file('library_images')){
            foreach ($files as $file){
                $image_name= md5(rand(1000, 10000));
                $ext= strtolower($file->getClientOriginalExtension());
                $file_name= $image_name.'-'.'imageTour.'.$ext;
                $image_url = $file_name;
                $file-> move(public_path('storage'),$file_name);
                $image[]=$image_url;
            }
        }
        $createTour = array(
            'title'=>$request->title,
            'description'=>$request->description,
            'small_description'=>$request->small_description,
            'time'=>$request->time,
            'type_tour'=>$request->type_tour,
            'address'=>$request->address,
            'depart'=>$request->depart,
            'vehicle'=>$request->vehicle,
            'library_images'=>implode('|',$image) ,
            'number_person'=>$request->number_person,
            'include_price'=>$request->include_price,
            'none_include_price'=>$request->none_include_price,
            'note'=>$request->note,
            'schedule_price'=>$request->schedule_price,
            'price'=>$request->price,
            'date_start'=>$request->date_start,
        );

        $saveTour = Tour::create($createTour);

        if ($saveTour){
            return redirect()->route('get.list-tour');
        }else{
            return 'Không thành công';
        }
    }
    public function getEdit($id)
    {
        $data = Tour::findOrFail($id);
        return view('admin.manager.tour.edit-tour')->with(['data'=>$data]);
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
                    'note' => $request->note,
                    'schedule_price' => $request->schedule_price,
                    'price' => $request->price,
                    'date_start' => $request->date_start,
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
}

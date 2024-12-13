<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\OrderHotel;
use App\Models\Utilities;
use App\Models\UtilityCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ManagerHotelController extends Controller
{
    public function index()
    {
        $list_hotel = Hotel::all();
        return view('admin.manager.manager-hotel')->with('list_hotel',$list_hotel,);
    }
    public function getAddHotel(){
        return view('admin.manager.hotel.add-hotel');
    }
    public function AddHotel(Request $request){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'small_description'=>'required',
            'address'=>'required',
            'price_sell'=>'required',
            'price_ori'=>'required',
            'number_bed'=>'required',
            'view'=>'required',
            'note'=>'required',
        ],[
            'title.required'=>'Thiếu thông tin',
            'description.required'=>'Thiếu thông tin',
            'small_description.required'=>'Thiếu thông tin',
            'address.required'=>'Thiếu thông tin',
            'price_sell.required'=>'Thiếu thông tin',
            'price_ori.required'=>'Thiếu thông tin',
            'number_bed.required'=>'Thiếu thông tin',
            'view.required'=>'Thiếu thông tin',
            'note.required'=>'Thiếu thông tin',
        ]);
        
        $image = array();

        if ($files = $request->file('library_images')){
            foreach ($files as $file){
                $image_name= md5(rand(1000, 10000));
                $ext= strtolower($file->getClientOriginalExtension());
                $file_name= $image_name.'-'.'imageHotel.'.$ext;
                $image_url = $file_name;
                $file-> move(public_path('storage'),$file_name);
                $image[]=$image_url;
            }
        }
        $dataInput = array(
            "title"=>$request->title,
            "description"=>$request->description,
            "address"=>$request->address,
            "small_description"=>$request->small_description,
            'library_images'=>implode('|',$image) ,
            "price_ori"=>$request->price_ori,
            "price_sell"=>$request->price_sell,
            "number_bed"=>$request->number_bed,
            "status"=>1,
            "view"=>$request->view,
            "note"=>$request->note,
        );
        $addHotel = Hotel::create($dataInput);
        if ($addHotel){
            return redirect()->route('get.list-hotel');
        }else{
            return 'Thêm khách sạn không thành công';
        }

    }
    public function getEdit($id){
        $data = Hotel::findOrFail($id);
        return view('admin.manager.hotel.edit-hotel')->with(['data'=>$data]);
    }
    public function update(Request $request, $id){
        if (!empty($request->id) && is_numeric($request->id)) {
            $detail_hotel = Hotel::where('id', '=', $request->id)->first();
            $image = array();
            if ($files = $request->file('library_images')) {
                foreach ($files as $file) {
                    $image_name = md5(rand(1000, 10000));
                    $ext = strtolower($file->getClientOriginalExtension());
                    $file_name = $image_name . '-' . 'imageHotel.' . $ext;
                    $image_url = $file_name;
                    $file->move(public_path('storage'), $file_name);
                    $image[] = $image_url;
                }
            }
            $datainput = array(
                "title"=>$request->title,
                "description"=>$request->description,
                "address"=>$request->address,
                "small_description"=>$request->small_description,
                'library_images'=>implode('|',$image) ,
                "price_sell"=>$request->price_sell,
                "numbers_bed"=>$request->numbers_bed,
                "view"=>$request->view,
                "note"=>$request->note,
            );

            $detail_hotel->update($datainput);
            if ($detail_hotel) {
                return redirect()->route('get.list-hotel');
            } else {
                return 'Thêm không thành công';
            }
        }
    }
    public function delete($id)
    {
        $datadelete = Hotel::findOrFail($id);
        $datadelete->delete();
        return redirect()->route('get.list-hotel');

    }
    //detail hotel
    public function detailHotel($id){
        $data_detail = Hotel::all()->where('id','=',$id)->first();;
        return view('hotel.details-hotel')->with([
            'data_detail' => $data_detail,
        ]);
    }
    public function getUtilities($id){
        $dataTour = Hotel::all()->where('id','=',$id)->first();
        $dataUtilities = Utilities::with('utilitiesCategory','hotel')->where('hotel_id','=',$id)->get();
 
        return view('admin.manager.hotel.utilities.list-utilities')->with([
            'dataTour'=>$dataTour,
            'dataUtilities'=>$dataUtilities,
        ]);
    }
    public function getAddUtilities($id){
        $dataTour = Hotel::all()->where('id','=',$id)->first();
        $dataUtilities = UtilityCategory::all();
        return view('admin.manager.hotel.utilities.add-utili-hotel')->with([
            'dataTour'=>$dataTour,
            'dataUtilities'=>$dataUtilities
        ]);
    }
    public function AddUtilities (Request $request, $id){
       $dataInput= array(
        'hotel_id'=> $id,
        'utility_category_id'=>$request->myselect,
       );
       $addUtilities = Utilities::create($dataInput);
       if ($addUtilities){
        return redirect()->to('dashboard/list-utilities/'.$id);
        }else{
           return 'Thêm khách sạn không thành công';
       }
    }
    public function deleteUtilities ($id){
        $datadelete = Utilities::findOrFail($id);
       
       $test = $datadelete["hotel_id"];
        $datadelete->delete();
        return redirect()->to('dashboard/list-utilities/'.$test);
    }

    //add utilities category
    public function getAddUtilitiCategory(){
        return view('admin.manager.hotel.utilities.add-utilities');
    }
    public function creatUtilitiCategory(Request $request){
        $request->validate([
            'name'=>'required',
        ],[
            'name.required'=>'Thiếu thông tin',
        ]);

        $image = array();
        if ($files = $request->file('icon')){
            foreach ($files as $file){
                $image_name= md5(rand(1000, 10000));
                $ext= strtolower($file->getClientOriginalExtension());
                $file_name= $image_name.'-'.'imageUtilities.'.$ext;
                $image_url = $file_name;
                $file-> move(public_path('storage'),$file_name);
                $image[]=$image_url;
            }
        }
       
        $dataInput = array(
            "name"=>$request->name,
            'icon'=>implode('|',$image) ,
        );
        $id= $request->id;
        $addUtilities = UtilityCategory::create($dataInput);
        if ($addUtilities){
           return 'thêm tiện ích thành công';
        }else{
            return 'Thêm tiện ích không thành công';
        }
    }

    //order-hotel
    public function orderHotel(Request $request){
        $request->validate([
            'name_custom'=>'required',
            'phone_custom'=>'required',
            'email_custom'=>'required',
        ],[
            'name_custom.required'=>'Thiếu thông tin',
            'phone_custom.required'=>'Thiếu thông tin',
            'email_custom.required'=>'Thiếu thông tin',
        ]);

        $daterange = $request->input('daterange');
        [$start_date, $end_date] = explode(' - ', $daterange);
        $start_date = Carbon::createFromFormat('m/d/Y', trim($start_date))->format('Y-m-d');
        $end_date = Carbon::createFromFormat('m/d/Y', trim($end_date))->format('Y-m-d');
        $dataInput = array(
            "hotel_id"=>$request->hotel_id,
            "name_custom"=>$request->name_custom,
            "phone_custom"=>$request->phone_custom,
            "email_custom"=>$request->email_custom,
            "adult_person"=>$request->number_adult,
            "children_person"=>$request->number_children,
            "number_rom"=>$request->number_rom,
            "price_hotel"=>$request->price,
            "price"=>$request->price * $request->number_rom,
            "status"=>1,
            "date_start"=>$start_date,
            "date_end"=>$end_date,
        );
        $orderHotel = OrderHotel::create($dataInput);
        if($orderHotel){
            $orderHotel = OrderHotel::with('tour')->where('id',$request->hotel_id);
        }

    }
    
}

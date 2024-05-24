<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(){
        return view("hotel.add-hotel");
    }
    public function addHotel(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'address'=>'required',
            'small_description'=>'required',
            'price_sale'=>'required',
            'price_old'=>'required',
            'numbers_bed'=>'required',
            'view'=>'required',
            'note'=>'required',
        ],[
            'title.required'=>'Thiếu thông tin',
            'description.required'=>'Thiếu thông tin',
            'address.required'=>'Thiếu thông tin',
            'small_description.required'=>'Thiếu thông tin',
            'price_sale.required'=>'Thiếu thông tin',
            'price_old.required'=>'Thiếu thông tin',
            'numbers_bed.required'=>'Thiếu thông tin',
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
            "price_sale"=>$request->price_sale,
            'library_images'=>implode('|',$image) ,
            "price_old"=>$request->price_old,
            "numbers_bed"=>$request->numbers_bed,
            "view"=>$request->view,
            "note"=>$request->note,
        );
        $addHotel = Hotel::create($dataInput);
        if ($addHotel){
            return redirect()->route('add-hotel');
        }else{
            return 'Thêm khách sạn không thành công';
        }

    }

    public function getHotel()
    {
        return view('hotel.details-hotel');
    }
}

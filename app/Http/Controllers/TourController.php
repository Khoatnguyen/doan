<?php

namespace App\Http\Controllers;

use App\Models\Schedules;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class TourController extends Controller
{
    public function index(){
        return view("tour.add-tour");
    }
    public function createTour(Request $request){
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
            return redirect()->route('get.list');
        }else{
            return 'Không thành công';
        }
    }
    public function getEdit($id){
        $detail_tour = Tour::all()->where('id','=',$id)->first();
        return view('tour.edit-tour')->with([
            'detail_tour'=>$detail_tour,
        ]);
    }
    public function postEdit(Request $request, $id){
        $detail_tour = Tour::where('id','=',$id)->first();
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
        $datainput = array(
            'title'=>$request->title,
            'description'=>$request->description,
            'small_description'=>$request->small_description,
            'time'=>$request->time,
            'type_tour'=>$request->type_tour,
            'address'=>$request->address,
            'vehicle'=>$request->vehicle,
            'depart'=>$request->depart,
            'library_images'=>implode('|',$image) ,
            'number_person'=>$request->number_person,
            'include_price'=>$request->include_price,
            'none_include_price'=>$request->none_include_price,
            'note'=>$request->note,
            'schedule_price'=>$request->schedule_price,
            'price'=>$request->price,
            'date_start'=>$request->date_start,
        );
        $detail_tour->update($datainput);
        if ($detail_tour){
            return redirect()->route('get.list');
        }else{
            return 'Thêm không thành công';
        }
    }

    public function postSchedules(Request $request, $id)
    {
       $dataInput = array(
           'title'=>$request->title,
           'description'=>$request->description,
           'tour_id'=> $id,
       );
       $ScheduleData = Schedules::create($dataInput);
        if ($ScheduleData) {
            return response()->json(['success'=>'Thêm thành công']);
        }

        return response()->json(['errors'=>'Thêm không thành công']);
    }
    public function getDetail($id){
        $detail_tour = Tour::all()->where('id','=',$id)->first();
        $listSchedule = Schedules::all()->where('tour_id','=',$id);
        return view('tour.details-tour')->with([
            'detail_tour'=>$detail_tour,
            'listSchedule'=>$listSchedule,
            ]);
    }

    public function getList(){
        $detail_tour = Tour::all();
        return view("tour.list-tour")->with([
            'detail_tour'=>$detail_tour,
        ]);
    }

    public function search(Request $request)
    {
        $key = $request->key;
        if ($request->ajax()) {
            $output = '';
            $items = Tour::where('address', 'LIKE', '%' . $key . '%')->orwhere('description', 'LIKE', '%' . $key . '%')->orwhere('title', 'LIKE', '%' . $key . '%')->orwhere('price', 'LIKE', '%' . $key . '%')->get();
            if ($items) {
                foreach ($items as $item) {
                    $images= explode('|',$item->library_images);
                    $output .= '
                       <div class="col-md-4 pr-4 flex-wrap list-tour">
                        <a href="'.route('get.detail.tour',$item->id).'">
                                <div class="item-plash">
                                    <div class="img-plash">
                                            <img style="width: 468px;object-fit: contain"
                                                 src="' . \Illuminate\Support\Facades\Storage::url($images[0]) . '" alt="">
                                    </div>
                                    <div style="padding: 5%">
                                        <h3 class="title-tour">' . $item->title . '</h3>
                                        <div class="location">
                                            <i class="fa fa-map-signs" aria-hidden="true"></i>
                                            ' . $item->address . '
                                            <div class="price-plash row">
                                                <div class="col-md-8 d-flex" style="color:#ed407a; font-weight: 600; ">
                                                    <p>Từ:</p>
                                                    <div class="price-only">
                                                        ' . $item->price . 'đ
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <button type="button" class="btn">Đăng ký</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                </div>
                    ';
                }
            };
            return Response($output);
        }
    }

    public function filter(Request $request)
    {
        if ($request->ajax()) {
            $prices =  $request->Finalprice;
            $out_price = '';
            $output = '';
            switch ($prices) {
                        case "1":
                            $out_price=Tour::where('price', '>', 0)->get();
                            break;
                        case "2":
                            $out_price=Tour::whereBetween('price', [0,5000000])->get();
                            break;
                        case "1,2":
                            $out_price=Tour::whereBetween('price', [0,5000000])->get();
                            break;
                        case "1,2,3":
                            $out_price=Tour::whereBetween('price', [0, 10000000])->get();
                            break;
                        case "1,2,3,4":
                            $out_price=Tour::whereBetween('price', [0, 20000000])->get();
                            break;
                        case "1,3,4":
                            $out_price=Tour::whereBetween('price', [0, 20000000])->get();
                            break;
                        case "1,4":
                            $out_price=Tour::whereBetween('price', [0, 20000000])->get();
                            break;

                        case "1,3":
                            $out_price=Tour::whereBetween('price', [0, 10000000])->get();
                            break;

                        case "2,3":
                            $out_price=Tour::whereBetween('price', [0, 10000000])->get();
                            break;
                        case "2,4":
                            $out_price=Tour::whereBetween('price', [0, 20000000])->get();
                            break;
                        case "2,3,4":
                            $out_price=Tour::whereBetween('price', [0, 20000000])->get();
                            break;
                        case "3":
                            $out_price=Tour::whereBetween('price', [5000000, 10000000])->get();
                            break;
                        case "3,4":
                            $out_price=Tour::whereBetween('price', [5000000, 20000000])->get();
                            break;
                        case "4":
                            $out_price=Tour::whereBetween('price', [10000000, 20000000])->get();
                            break;

                    }
            if ($out_price) {
                foreach ($out_price as $item) {
                    $images= explode('|',$item->library_images);
                    $output .= '
                       <div class="col-md-4 pr-4 flex-wrap list-tour">
                        <a href="'.route('get.detail.tour',$item->id).'">
                                <div class="item-plash">
                                    <div class="img-plash">
                                            <img style="width: 468px;object-fit: contain"
                                                 src="' . \Illuminate\Support\Facades\Storage::url($images[0]) . '" alt="">
                                    </div>
                                    <div style="padding: 5%">
                                        <h3 class="title-tour">' . $item->title . '</h3>
                                        <div class="location">
                                            <i class="fa fa-map-signs" aria-hidden="true"></i>
                                            ' . $item->address . '
                                            <div class="price-plash row">
                                                <div class="col-md-8 d-flex" style="color:#ed407a; font-weight: 600; ">
                                                    <p>Từ:</p>
                                                    <div class="price-only">
                                                        ' . $item->price . 'đ
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <button type="button" class="btn">Đăng ký</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                </div>
                    ';
                }
            }
            return Response($output);

        }

    }

    public  function orderTour($id){
        $detail_tour = Tour::all()->where('id','=',$id)->first();
        return view("order.order")->with([
            'detail_tour'=>$detail_tour,
        ]);
    }
    public function plusAdult(Request $request){
        $id= $request->id;
        $detail_tour = Tour::where('id','=',$id)->first();
        $total= ($detail_tour->price)*($request->number_adult);
        $totalFormat= number_format($total, 0, ',', '.');
        $output=['detail_tour'=>$detail_tour,
                    'totalFormat'=>$totalFormat,
                    'number_adult'=>$request->number_adult,
                    'total'=>$total,
                ];
        return response()->json($output);
    }
    public function minusAdult(Request $request){
        $id= $request->id;
        $detail_tour = Tour::where('id','=',$id)->first();
        $total= ($detail_tour->price)*($request->number_adult);
        $totalFormat= number_format($total, 0, ',', '.');
        $output=['detail_tour'=>$detail_tour,
                    'totalFormat'=>$totalFormat,
                    'number_adult'=>$request->number_adult,
                    'total'=>$total,
                ];
        return response()->json($output);
    }
    public function prePayment(Request $request){
        $id= $request->id;
        $detail_tour = Tour::where('id','=',$id)->first();
        $total= ($detail_tour->price)*($request->dataNumber);
        $totalFormat= number_format($total, 0, ',', '.');
        $prePayment='';
        if($request->FinalprePay === "1"){
            $prePayment=(($detail_tour->price)*($request->dataNumber))*0.3;
            $remain= $total-$prePayment;
            $preFormat= number_format($prePayment, 0, ',', '.');
            $remainFormat= number_format($remain, 0, ',', '.');
        }
       $end= $request->FinalprePay==="1"?$remainFormat:0;
       $advancePay= $request->FinalprePay==="1"?"Thanh toán trước 30%":"Thanh toán 100%";
       $needPayment=$request->FinalprePay==="1"?$preFormat:$totalFormat;
       $needPayment1=$request->FinalprePay==="1"?$prePayment:$total;
       $output=[    'detail_tour'=>$detail_tour,
                    'totalFormat'=>$totalFormat,
                    'dataNumber'=>$request->dataNumber,
                    'total'=>$total,
                    'end'=>$end,
                    'advancePay'=>$advancePay,
                    'needPayment'=>$needPayment,
                    'needPayment1'=>$needPayment1,
                ];
        return response()->json($output);
    }
}

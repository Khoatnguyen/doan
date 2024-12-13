@extends('admin.layout.main')
@section('content')
<div class="container" style="padding-top: 8rem">
    <h4>Chỉnh sửa giá lịch trình tour {{$listFee->tour->id}}</h4>
    <form method="post" action="{{route('post.edit.schedule.fee',$listFee->id)}}"  enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Sửa giá vé máy bay:</span>
                <input type="text" class="title form-control" id="airfare" name="airfare" value=""
                    placeholder="{{$listFee->airfare_fee}}">
                <input type="hidden" class="title" id="tour-id" name="tour_id" value="{{$listFee->tour_id}}">   
            </div>
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Sửa chi phí di chuyển:</span>
                <input type="text" class="title form-control" id="trans-fee" name="trans_fee" value=""
                    placeholder="{{$listFee->trans_fee}}">
            </div>    
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Sửa chi phí ăn uống:</span>
                <input type="text" class="title form-control" id="meal-fee" name="meal_fee" value=""
                    placeholder="{{$listFee->meal_fee}}">
            </div>
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Sửa chi phí hướng dẫn viên:</span>
                <input type="text" class="title form-control" id="guide-fee" name="guide_fee" value=""
                    placeholder="{{$listFee->guide_fee}}">
            </div>    
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Sửa chi phí khách sạn:</span>
                <input type="text" class="title form-control" id="hotel-fee" name="hotel_fee" value=""
                    placeholder="{{$listFee->hotel_fee}}">
            </div>  
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Sửa chi phí khác:</span>
                <input type="text" class="title form-control" id="other-fee" name="other_fee" value=""
                    placeholder="{{$listFee->other_fee}}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 2rem">Sửa chi phí lịch trình</button>
    </form>
</div>
@endsection
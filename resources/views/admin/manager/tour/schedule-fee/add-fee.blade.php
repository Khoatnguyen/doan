@extends('admin.layout.main')
@section('content')
<div class="container" style="padding-top: 8rem">
    <h4>Thêm giá lịch trình tour {{$listTour->id}}</h4>
    <form method="post" action="{{route('post.add.schedule.fee')}}"  enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Thêm giá vé máy bay:</span>
                <input type="text" class="form-control" id="airfare" name="airfare" value=""
                    placeholder="Thêm giá vé máy bay">
                <input type="hidden" class="title" id="tour-id" name="tour_id" value="{{$listTour->id}}">   
            </div>
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Thêm chi phí di chuyển:</span>
                <input type="text" class="form-control" id="trans-fee" name="trans_fee" value=""
                    placeholder="Thêm chi phí di chuyển">
            </div>    
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Thêm chi phí ăn uống:</span>
                <input type="text" class="form-control" id="meal-fee" name="meal_fee" value=""
                    placeholder="Thêm chi phí ăn uống">
            </div>
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Thêm chi phí hướng dẫn viên:</span>
                <input type="text" class="form-control" id="guide-fee" name="guide_fee" value=""
                    placeholder="Thêm chi phí hướng dẫn viên">
            </div>    
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Thêm chi phí khách sạn:</span>
                <input type="text" class="form-control" id="hotel-fee" name="hotel_fee" value=""
                    placeholder="Thêm chi phí khách sạn">
            </div>  
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Thêm chi phí khác:</span>
                <input type="text" class="form-control" id="other-fee" name="other_fee" value=""
                    placeholder="Thêm chi phí khác">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 2rem">Thêm giá lịch trình</button>
    </form>
</div>
@endsection
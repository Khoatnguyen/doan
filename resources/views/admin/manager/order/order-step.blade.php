@extends('admin.layout.main')
@section('content')
    <div class="container" style="padding-top: 8rem">
        <h4>Trạng thái đơn hàng {{$order->order_id}}</h4>
        <form method="post" action="{{route('step.order')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Thêm mã đặt vé máy bay:</span>
                    <input type="text" class="fight-code form-control" id="fight-code" name="fight_code" value=""
                           placeholder="Thêm mã đặt vé máybay">
                    <input type="hidden" class="fight-code form-control" name="payment_supplier" value="{{$total}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Thêm mã đặt phòng khách sạn:</span>
                    <input type="text" class="hotel-code form-control" id="hotel-code" name="hotel_code" value=""
                           placeholder="Thêm mã đặt phòng khách sạn">
                           <input type="hidden" class="order-code" id="order-code" name="order_code" value="{{$order->order_id}}">
                          
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 2rem">Thêm trạng thái đơn hàng</button>
        </form>
    </div>
@endsection

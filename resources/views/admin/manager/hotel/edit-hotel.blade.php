@extends('admin.layout.main')
@section('content')
    <div class="container" style="padding-top: 8rem">
        <h4 style="padding-bottom: 2rem">Chỉnh sửa thông tin khách sạn</h4>
        <form action="{{route('post.edit-hotel',$data->id)}}" method="post">
            @csrf
            <div class="row">
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Giới thiệu:</span>
                    <input type="text" class="description" id="edit-description" name="description" value=""
                           placeholder="{{$data->description}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Giới thiệu nhỏ:</span>
                    <input type="text" class="small_description" id="edit-small_description" name="small_description"
                             value="" placeholder="{{$data->small_description}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Địa chỉ:</span>
                    <input type="text" class="address" id="edit-address" name="address" value="" placeholder="{{$data->address}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Giá gốc:</span>
                    <input type="text" class="price_ori" id="edit-price_ori" name="price_ori" value="" placeholder="{{$data->price_ori}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Giá bán:</span>
                    <input type="text" class="price_sell" id="edit-price_sell" name="price_sell" value="" placeholder="{{$data->price_sell}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Thêm thư viện ảnh:</span>
                    <input type="file" name="library_images[]" multiple id="exampleInputFile">
                </div> 
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Số giường:</span>
                    <input type="text" class="number_bed" id="edit-numbers_bed" name="number_bed" value="" placeholder="{{$data->number_bed}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Thêm view:</span>
                    <input type="text" class="view" id="edit-view" name="view" value="" placeholder="{{$data->view}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Lưu ý:</span>
                    <input type="text" class="note" id="edit-note" name="note" value="" placeholder="{{$data->note}}">
                </div>
        
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 2rem">Sửa khách sạn</button>
        </form>
    </div>
@endsection

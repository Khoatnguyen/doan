@extends('admin.layout.main')
@section('content')
    <div class="container" style="padding-top: 8rem">
        <h4>Thêm khách sạn</h4>
        <form method="post" action="{{route('post.add-hotel')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Tiêu đề:</span>
                    <input type="text" class="title" id="edit-title" name="title" value=""
                           placeholder="Thêm tiêu đề cho bài viết">
                           @error('title')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Giới thiệu:</span>
                    <input type="text" class="description" id="edit-description" name="description" value=""
                           placeholder="Thêm giới thiệu">
                           @error('description')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Giới thiệu nhỏ:</span>
                    <input type="text" class="small_description" id="edit-small_description" name="small_description"
                             value="" placeholder="Thêm giới thiệu nhỏ">
                             @error('small_description')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Địa chỉ:</span>
                    <input type="text" class="address" id="edit-address" name="address" value="" placeholder="Thêm địa chỉ">
                    @error('address')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Giá sale:</span>
                    <input type="text" class="price_sale" id="edit-price_sale" name="price_sale" value="" placeholder="Thêm giá sale">
                    @error('price_sale')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Giá ban đầu:</span>
                    <input type="text" class="price_old" id="edit-price_old" name="price_old" value="" placeholder="Thêm giá ban đầu">
                    @error('price_old')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                     <span>Thêm ảnh:</span>
                    <input type="file" name="library_images[]" multiple id="exampleInputFile">

                </div> 
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Số giường:</span>
                    <input type="text" class="number_bed" id="edit-numbers_bed" name="number_bed" value="" placeholder="Thêm số giường">
                    @error('number_bed')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Thêm view:</span>
                    <input type="text" class="view" id="edit-view" name="view" value="" placeholder="Thêm view">
                    @error('view')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Lưu ý:</span>
                    <input type="text" class="note" id="edit-note" name="note" value="" placeholder="Thêm lưu ý">
                    @error('note')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 2rem">Thêm khách sạn</button>
        </form>
    </div>
@endsection

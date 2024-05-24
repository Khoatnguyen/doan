@extends('layout.main')
@section('content')
    <div class="container">
        <h2>Thêm khách sạn </h2>
        <div class="row">
            <div class="col-md-12 add-tour">
                <form method="post" action="{{route('post.add-hotel')}}" enctype="multipart/form-data">
                    @csrf
                    <table class="table">
                        <tbody>
                        <tr>
                            <td class="col-md-4 bdn">Tiêu đề:</td>
                            <td>
                                <input type="text" name="title"
                                       value="" placeholder="Thêm tiêu đề cho bài viết">
                                @error('title')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Giới thiệu:</td>
                            <td>
                                <textarea name="description" placeholder="Thêm giới thiệu cho bài viết">
                                </textarea>
                                @error('description')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Giới thiệu nhỏ:</td>
                            <td>
                                <textarea name="small_description" placeholder="Thêm giới thiệu nhỏ cho bài viết">
                                </textarea>
                                @error('small_description')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Địa chỉ:</td>
                            <td>
                                <input type="text" name="address"
                                       value="" placeholder="Thêm địa chỉ chi tiết">
                                @error('address')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Giá sale:</td>
                            <td>
                                <input type="text" name="price_sale"
                                       value="" placeholder="Thêm giá giảm giá">
                                @error('price_sale')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Gía ban đầu:</td>
                            <td>
                                <input type="text" name="price_old"
                                       value="" placeholder="Thêm giá ban đầu">
                                @error('price_old')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Thêm thư viện ảnh:</td>
                            <td>
                                <input type="file" name="library_images[]" multiple id="exampleInputFile">
                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Số giường:</td>
                            <td>
                                <input type="text" name="numbers_bed"
                                       value="" placeholder="Thêm giới thiệu ngắn gọn">
                                @error('small_description')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Thêm view:</td>
                            <td>
                                <input type="text" name="view"
                                       value="" placeholder="Thêm view">
                                @error('view')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Lưu ý:</td>
                            <td>
                                <input type="text" name="note"
                                       value="" placeholder="Thêm giới thiệu ngắn gọn">
                                @error('note')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-save" style="margin: 2rem">Thêm khách sạn
                    </button>
                </form>


            </div>
        </div>
    </div>
    </div>
@endsection
@section('javascript')

@endsection

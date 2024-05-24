@extends('layout.main')
@section('content')
    <div class="container">
        <h2>Thêm tour du lịch</h2>
        <div class="row">
            <div class="col-md-12 add-tour">
                <form method="post" action="{{route('post.add-tour')}}" enctype="multipart/form-data">
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
                                <input type="text" name="small_description"
                                       value="" placeholder="Thêm giới thiệu ngắn gọn">
                                @error('small_description')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Số ngày đi:</td>
                            <td>
                                <input type="text" name="time"
                                       value="" placeholder="Thêm số ngày đi">
                                @error('time')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="col-md-4 bdn">Khởi hành bao nhiêu ngày:</td>
                            <td>
                                <input type="text" name="depart"
                                       value="" placeholder="Thêm khởi hành ">
                                @error('depart')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Loại tour:</td>
                            <td>
                                <select name="type_tour" class="form-select" aria-label="Default select example">
                                    <option  value="1" selected>Tour quốc tế</option>
                                    <option  value="2">Tour nội địa</option>
                                </select>

                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Địa điểm đi:</td>
                            <td>
                                <input type="text" name="address"
                                       value="" placeholder="Thêm địa chỉ đi">
                                @error('address')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Phương tiện:</td>
                            <td>
                                <input type="text" name="vehicle"
                                       value="" placeholder="Thêm địa chỉ đi">
                                @error('vehicle')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Giá bao gồm:</td>
                            <td>
                                <textarea name="include_price" placeholder="Giá đã bao gồm những:">
                                </textarea>
                                @error('include_price')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Giá không bao gồm:</td>
                            <td>
                                <textarea name="none_include_price" placeholder="Giá không bao gồm những:">
                                </textarea>
                                @error('none_include_price')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Lưu ý:</td>
                            <td>
                                <textarea name="note" placeholder="Thêm lưu ý">
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Số người đi:</td>
                            <td>
                                <input type="text" name="number_person" placeholder="Thêm số người đi">
                                @error('number_person')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Giá lịch trình:</td>
                            <td>
                                <input type="text" name="schedule_price"
                                       value="" placeholder="Thêm giá lịch trình">
                                @error('schedule_price')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Giá:</td>
                            <td>
                                <input type="text" name="price"
                                       value="" placeholder="Thêm giá">
                                @error('price')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Ngày đi:</td>
                            <td>
                                <input type="date" name="date_start"
                                       value="" placeholder="Thêm ngày đi">
                                @error('date_start')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td class="bdn">Thêm ảnh:</td>
                            <td>
                                <input type="file" name="library_images[]" multiple id="exampleInputFile">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-save" style="margin: 2rem">Thêm Tour
                    </button>
                </form>


            </div>
        </div>
    </div>
    </div>
@endsection
@section('javascript')

@endsection

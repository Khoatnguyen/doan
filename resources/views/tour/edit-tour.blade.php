@extends('layout.main')
@section('content')
    <div class="container edit-tour">
        <h2>Sửa tour du lịch</h2>
        <form method="post" action="{{route('post.edit',$detail_tour->id)}}" enctype="multipart/form-data">
            @csrf
            <table class="table">
                <tbody>
                <tr>
                    <td class="col-md-4 bdn">Tiêu đề:</td>
                    <td>
                        <input type="text" name="title"
                               value="" placeholder="{{$detail_tour->title}}">
                        @error('title')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="bdn">Giới thiệu:</td>
                    <td>
                                <textarea name="description" placeholder="{{$detail_tour->description}}">
                                </textarea>
                        @error('description')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="col-md-4 bdn">Khởi hành bao nhiêu ngày:</td>
                    <td>
                        <input type="text" name="depart"
                               value="" placeholder="{{$detail_tour->depart}}">
                        @error('depart')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="bdn">Giới thiệu nhỏ:</td>
                    <td>
                        <input type="text" name="small_description"
                               value="" placeholder="{{$detail_tour->small_desciption}}">
                        @error('small_description')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="bdn">Số ngày đi:</td>
                    <td>
                        <input type="text" name="time"
                               value="" placeholder="{{$detail_tour->time}}">
                        @error('time')
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
                               value="" placeholder="{{$detail_tour->address}}">
                        @error('address')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="bdn">Phương tiện:</td>
                    <td>
                        <input type="text" name="vehicle"
                               value="" placeholder="{{$detail_tour->vehicle}}">
                        @error('vehicle')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="bdn">Giá bao gồm:</td>
                    <td>
                                <textarea name="include_price" placeholder="{{$detail_tour->include_price}}">
                                </textarea>
                        @error('include_price')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="bdn">Giá không bao gồm:</td>
                    <td>
                                <textarea name="none_include_price" placeholder="{{$detail_tour->none_include_price}}">
                                </textarea>
                        @error('none_include_price')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="bdn">Lưu ý:</td>
                    <td>
                                <textarea name="note" placeholder="{{$detail_tour->note}}">
                                </textarea>
                    </td>
                </tr>
                <tr>
                    <td class="bdn">Số người đi:</td>
                    <td>
                        <input type="text" name="number_person" placeholder="{{$detail_tour->number_person}}">
                        @error('number_person')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="bdn">Giá lịch trình:</td>
                    <td>
                        <input type="text" name="schedule_price"
                               value="" placeholder="{{$detail_tour->schedule_price}} đ">
                        @error('schedule_price')
                        <span style="color: red">{{$message}}</span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="bdn">Giá:</td>
                    <td>
                        <input type="text" name="price"
                               value="" placeholder="{{$detail_tour->price}}">
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
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                Thêm lịch trình
            </button>
            <button type="submit" class="btn btn-save" style="margin: 2rem">Lưu tour
            </button>
        </form>
    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="padding-top: 6rem;border: none;">
                    <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight: 600">Thêm lịch trình</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="contact_us" method="post" action="javascript:void(0)">
                        {!! csrf_field() !!}
                        <table class="table">
                            <tbody>
                            <tr>
                                <td class="col-md-4 bdn">Tiêu đề:</td>
                                <td>
                                    <input type="text" name="title" style="width: 100%"
                                           value="" placeholder="Thêm tiêu đề cho lịch trình">
                                    @error('title')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td class="bdn">Giới thiệu:</td>
                                <td>
                                <textarea style="width: 100%" name="description" placeholder="Thêm giới thiệu cho lịch trình">
                                </textarea>
                                    @error('description')
                                    <span style="color: red">{{$message}}</span>
                                    @enderror
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn-submit btn btn-primary">Lưu lịch trình</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript">

        $(document).ready(function() {
            $(".btn-submit").click(function(){
                $.ajax({
                    url: "{{ route('post.schedules', $detail_tour->id) }}",
                    type:'POST',
                    data: $('#contact_us').serialize(),
                    success: function(data) {
                        if($.isEmptyObject(data.errors)){
                            $(".error_msg").html('');
                            alert(data.success);
                        }else{
                            let resp = data.errors;
                            for (index in resp) {
                                $("#" + index).html(resp[index]);
                            }
                        }
                    }
                });

            });
        });


    </script>
@endsection

@extends('admin.layout.main')
@section('content')
    <div class="container" style="padding-top: 8rem">
        <h4 style="padding-bottom: 2rem">Chỉnh sửa thông tin tour</h4>
        <form action="{{route('post.edit-tour',$data->id)}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Tiêu đề:</span>
                    <input type="text" class="title" id="edit-title" name="title" value=""
                           placeholder="{{$data->title}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Giới thiệu:</span>
                    <input type="text" class="description" id="edit-description" name="description" value=""
                           placeholder="{{$data->description}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Khởi hành bao nhiêu ngày:</span>
                    <input type="text" class="depart" id="edit-depart" name="depart" value=""
                           placeholder="{{$data->depart}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Giới thiệu nhỏ:</span>
                    <input type="text" class="small-description" id="edit-small-description" name="small_description"
                           value="" placeholder="{{$data->small_description}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Số ngày đi:</span>
                    <input type="text" class="time" id="edit-time" name="time" value="" placeholder="{{$data->time}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Loại tour:</span>
                    <select name="type_tour" id="edit-type-tour" class="type-tour form-select"
                            aria-label="Default select example">
                        <option value="1" selected>Tour quốc tế</option>
                        <option value="2">Tour nội địa</option>
                    </select>
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Địa điểm đi:</span>
                    <input type="text" class="address" id="edit-address" name="address" value=""
                           placeholder="{{$data->address}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Phương tiện:</span>
                    <input type="text" class="vehicle" id="edit-vehicle" name="vehicle" value=""
                           placeholder="{{$data->vehicle}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Giá bao gồm:</span>
                    <textarea id="edit-include-price" class="include-price" name="include_price"
                              placeholder="{{$data->include_price}}">
                                </textarea>
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Giá không bao gồm:</span>
                    <textarea id="edit-none-price" class="none-include-price" name="none_include_price"
                              placeholder="Chỉnh sửa giá không bao gồm">
                                </textarea>
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Lưu ý:</span>
                    <textarea id="edit-note" class="note" name="note" placeholder="Chỉnh sửa lưu ý">
                                </textarea>
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Số người đi:</span>
                    <input type="text" id="edit-number-person" class="number-person" name="number_person" value=""
                           placeholder="{{$data->number_person}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Giá lịch trình:</span>
                    <input type="text" id="edit-schedule" class="schedule-price" name="schedule_price" value=""
                           placeholder="{{$data->schedule_price}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Giá:</span>
                    <input type="text" id="edit-price" class="price" name="price" value=""
                           placeholder="{{$data->price}}">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Ngày đi:</span>
                    <input type="date" id="edit-date-start" class="date-start" name="date_start" value=""
                           placeholder="Thêm ngày đi">
                </div>
                <div class="col-md-4" style="display: grid;padding-top: 2rem">
                    <span>Thêm ảnh:</span>
                    <input type="file" name="library_images[]" multiple id="exampleInputFile">
                </div>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 2rem">Sửa tour</button>
        </form>
    </div>
@endsection

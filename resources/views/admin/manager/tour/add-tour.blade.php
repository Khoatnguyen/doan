@extends('admin.layout.main')
@section('content')
<div class="container" style="padding-top: 8rem">
    <h4>Thêm tour</h4>
    <form method="post" action="{{route('post.add-tour')}}"  enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Tiêu đề:</span>
                <input type="text" class="title" id="edit-title" name="title" value=""
                    placeholder="Thêm tiêu đề">
            </div>
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Giới thiệu:</span>
                <textarea class="description" id="edit-description" name="description" value=""
                    placeholder="Thêm giới thiệu"> </textarea>
            </div>
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Khởi hành bao nhiêu ngày:</span>
                <input type="text" class="depart" id="edit-depart" name="depart" value=""
                    placeholder="Thêm khởi hành bao nhiêu ngày">
            </div>
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Giới thiệu nhỏ:</span>
                <input type="text" class="small-description" id="edit-small-description" name="small_description"
                    value="" placeholder="Thêm giới thiệu nhỏ">
            </div>
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Số ngày đi:</span>
                <input type="text" class="time" id="edit-time" name="time" value="" placeholder="Thêm số ngày đi">
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
                    placeholder="Thêm địa điểm đi">
            </div>
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Phương tiện:</span>
                <input type="text" class="vehicle" id="edit-vehicle" name="vehicle" value=""
                    placeholder="Thêm phương tiện đi">
            </div>
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Lịch trình:</span>
                <textarea id="schedule" class="schedule" name="schedule"
                    placeholder="Thêm lịch trình"></textarea>
            </div>
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Giá bao gồm:</span>
                <textarea id="include-price" class="include-price" name="include_price"
                    placeholder="Thêm giá bao gồm"></textarea>
            </div>
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Giá không bao gồm:</span>
                <textarea id="none-price" class="none-include-price" name="none_include_price"
                    placeholder="Thêm giá không bao gồm">
                                </textarea>
            </div>
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Lưu ý:</span>
                <textarea id="note" class="note" name="note" placeholder="Thêm lưu ý">
                                </textarea>
            </div>
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Số người đi:</span>
                <input type="text" id="number-person" class="number-person" name="number_person" value=""
                    placeholder="Thêm số người đi">
            </div>
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Giá lịch trình:</span>
                <input type="text" id="schedule-price" class="schedule-price" name="schedule_price" value=""
                    placeholder="Thêm giá lịch trình">
            </div>
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Giá:</span>
                <input type="text" id="price" class="price" name="price" value=""
                    placeholder="Thêm giá">
            </div>
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Ngày đi:</span>
                <input type="date" id="date-start" class="date-start" name="date_start" value=""
                    placeholder="Thêm ngày đi">
            </div>
            
            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Ngày về:</span>
                <input type="date" id="date-end" class="date-end" name="date_end" value=""
                    placeholder="Thêm ngày về">
            </div>

            <div class="col-md-4" style="display: grid;padding-top: 2rem">
                <span>Thêm ảnh:</span>
                <input type="file" name="library_images[]" multiple id="exampleInputFile">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top: 2rem">Thêm tour</button>
    </form>
</div>
@endsection
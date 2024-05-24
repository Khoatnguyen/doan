@extends('admin.layout.main')
@section('content')
    <div class="manager-hotel">
        <button type="button" style="margin-bottom: 2rem" class="btn btn-primary"><a href="#" style="color: #ffffff"> <i class="fa fa-plus" aria-hidden="true"></i></a></button>
        <div class="table-hotel" style="overflow-x: scroll">
            <table id="data-hotel" class="display table table-striped table-hover" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Giới thiệu</th>
                    <th scope="col">Giới thiệu nhỏ</th>
                    <th scope="col">Số ngày đi</th>
                    <th scope="col">Khởi hành bao nhiêu ngày</th>
                    <th scope="col">Loại tour</th>
                    <th scope="col">Địa điểm đi</th>
                    <th scope="col">Phương tiện</th>
                    <th scope="col">Số người đi</th>
                    <th scope="col">Giá lịch trình</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Ngày đi</th>
                    <th scope="col">Trạng thái</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
@endsection

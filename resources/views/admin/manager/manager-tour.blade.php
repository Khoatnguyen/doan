@extends('admin.layout.main')
@section('content')
    <div class="manager-tour">
        <button type="button" style="margin-bottom: 2rem" class="btn btn-primary"><a href="{{route('get.add-tour')}}" style="color: #ffffff"> <i class="fa fa-plus" aria-hidden="true"></i></a></button>
        <div class="table-tour" style="overflow-x: scroll">
            <table id="data-tour" class="display table table-striped table-hover" cellspacing="0" width="100%">
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
                @foreach($detail_tour as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->small_description}}</td>
                        <td>{{$item->time}}</td>
                        <td>{{$item->depart}}</td>
                        <td>{{$item->type_tour}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->vehicle}}</td>
                        <td>{{$item->number_person}}</td>
                        <td>{{$item->schedule_price}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->date_start}}</td>
                        <td style="display: flex">
                            <button  type="button" class="btn mr-lg-1 ml-lg-1 btn-warning edit-discount"
                                   data-toggle="modal" data-target="#edit-discount-show"><a style="color: #fff" href="{{route('get.edit-tour',$item->id)}}"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a></button>
                             <button  type="button" class="btn mr-lg-1 ml-lg-1 btn-success"
                                   data-toggle="modal"><a style="color: #fff" href="{{route('get.edit-tour',$item->id)}}"><i class="fa fa-upload" aria-hidden="true"></i></a></button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal_<?php echo $item->id ?>">
                                 <i class="fa fa-trash" aria-hidden="true"></i></button>
                        </td>
                    </tr>
                    <div class="modal" id="myModal_<?php echo $item->id ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">bạn có muốn xóa hay không</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body text-center">
                                    <a href="{{route('manager.tour.delete',$item->id)}}" class="btn btn-success"> đồng ý</a>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">thoát</button>
                                </div>


                            </div>
                        </div>
                    </div>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
@section('javascript')

@endsection

@extends('admin.layout.main')
@section('content')
    <div class="container-fluid manager-hotel">
        <h4>Quản lý khách sạn</h4>
        <button type="button" style="margin-bottom: 2rem" class="btn btn-primary"><a href="{{route('get.add-hotel')}}" style="color: #ffffff"> <i class="fa fa-plus" aria-hidden="true"></i></a></button>
        <div class="table-hotel" style="overflow-x: scroll">
            <table id="data-hotel" class="display table table-striped table-hover" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Giới thiệu</th>
                    <th scope="col">Giới thiệu nhỏ</th>
                    <th scope="col">Địa điểm</th>
                    <th scope="col">Giá giảm giá</th>
                    <th scope="col">Giá cũ</th>
                    <th scope="col">Số Giường</th>
{{--                    <th scope="col">Khu vực</th>--}}
                    <th scope="col">Cảnh quan</th>
                    <th scope="col">Trạng thái</th>
                </tr>
                </thead>
                <tbody>
                @foreach($list_hotel as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->small_description}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->price_sell}}</td>
                        <td>{{$item->price_ori}}</td>
                        <td>{{$item->number_bed}}</td>
                        <td>{{$item->view}}</td>
                        <td style="display: flex">
                            <button  type="button" class="btn mr-lg-1 ml-lg-1 btn-warning edit-discount"
                                     data-toggle="modal"><a style="color: #fff" href="{{route('get.edit-hotel',$item->id)}}"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a></button>
                            <button  type="button" class="btn mr-lg-1 ml-lg-1 btn-primary edit-discount"
                                     data-toggle="modal"><a style="color: #fff" href="{{route('list.utilities',$item->id)}}"> <i class="fa fa-upload" aria-hidden="true"></i> </a></button>         
                            <button  type="button" class="btn mr-lg-1 ml-lg-1 btn-success"
                                     data-toggle="modal"><a style="color: #fff" href="{{route('magager.detail-hotel',$item->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a></button>
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
                                    <a href="{{route('magager.delete-hotel',$item->id)}}" class="btn btn-success"> đồng ý</a>
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

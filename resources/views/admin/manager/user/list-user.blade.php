@extends('admin.layout.main')
@section('content')
    <div class="container-fluid manager-hotel">
        <button type="button" style="margin-bottom: 2rem" class="btn btn-primary"><a href="#" style="color: #ffffff"> <i class="fa fa-plus" aria-hidden="true"></i></a></button>
        <div class="table-hotel" style="overflow-x: scroll">
            <table id="data-hotel" class="display table table-striped table-hover" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Id user</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Giới tính</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Email</th>
                    <th scope="col">Quyền</th>
                    <th scope="col">Trạng thái</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->user_id}}</td>
                        <td>{{$item->full_name}}</td>
                        <td>{{$item->gender}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->user->email}}</td>
                        <td>{{$item->user->role->name}}</td>
                        <td style="display: flex">
                            <button  type="button" class="btn mr-lg-1 ml-lg-1 btn-warning edit-discount"
                                     data-toggle="modal"><a style="color: #fff" href="{{route('get.edit.user',$item->user->id)}}"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a></button>
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

@extends('admin.layout.main')
@section('content')
<div class="container-fluid utilities" style="padding-top:5rem">
    <h4>Danh sách tiện ích {{$dataTour->title}}</h4>
    <div class="manager-tour">
        <button type="button" style="margin-bottom: 2rem" class="btn btn-primary"><a href="{{route('get.utilities',$dataTour->id)}}" style="color: #ffffff"> <i class="fa fa-plus" aria-hidden="true"></i></a></button>
        <div class="table-tour" style="overflow-x: scroll">
            <table id="data-tour" class="display table table-striped table-hover" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Mã khách sạn</th>
                    <th scope="col">Giới thiệu</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Trạng thái</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dataUtilities as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->hotel_id}}</td>
                        <td>{{$item->utilitiesCategory->name}}</td>
                        <td>
                        <img style="width: 50px;object-fit: contain"
                            src="{{\Illuminate\Support\Facades\Storage::url($item->utilitiesCategory->icon)}}" alt="">
                        </td>
                        <td style="display: flex">
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
                                    <a href="{{route('manager.utilities.delete',$item->id)}}" class="btn btn-success"> đồng ý</a>
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

</div>
@endsection
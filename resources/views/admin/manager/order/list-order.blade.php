@extends('admin.layout.main')
@section('content')
<div class="container-fluid utilities" style="padding-top:5rem">
    <h4>Báo cáo đặt tour </h4>
    <div class="manager-tour">
        <div class="row">
            <div class="col-md-1">
                <button type="button" style="margin-bottom: 2rem" class="btn btn-primary"><a href="#" style="color: #ffffff"> <i class="fa fa-plus" aria-hidden="true"></i></a></button>
            </div>
        <div class="col-md-5">
            <div class="search-order">
                <div class="search-order" style="display:flex">
                    <input id="search-order" name="search-order" class="search-order form-control"placeholder="Tìm kiếm theo tên KH,mã tour, mã order,sđt">
                    <button type="button" style="background: #EC0072;color: #fff;margin-left:1rem " class="btn">Tìm Kiếm</button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <a href="{{route('order-export')}}" style="color: #ffffff"></a><button type="button" style="margin-bottom: 2rem;float:right" class="btn btn-success">Xuất excel</button></a>
        </div>
        </div>
        <div class="table-tour" style="overflow-x: scroll">
            <table id="data-tour" class="display table table-striped table-hover" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Mã tour</th>
                    <th scope="col">Tên tour</th>
                    <th scope="col">Mã đặt tour</th>
                    <th scope="col">Tên khách hàng</th>
                    <th scope="col">Số điện thoại </th>
                    <th scope="col">Email</th>
                    <th scope="col">Trạng thái thanh toán</th>
                    <th scope="col">Trạng thái đơn hàng</th>
                    <th scope="col">Giá tour</th>
                    <th scope="col">Đã thanh toán</th>
                    <th scope="col">Còn nợ</th>
                    <th scope="col">Thao tác</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order as $item)
                    <tr>
                        <td>
                            {{$item->id}}
                        </td>
                        <td>
                            {{$item->tour_id}}
                        </td>
                        <td style="display: -webkit-box !important;-webkit-line-clamp: 3 !important;-webkit-box-orient: vertical !important;overflow: hidden !important;">
                          <span>{{$item->tour->title}}</span> 
                        </td>
                        <td>
                            {{$item->order_id}}
                        </td>
                        <td>
                            {{$item->reservation_name}}
                        </td>
                        <td>
                            {{$item->reservation_phone}}
                        </td>
                        <td>
                            {{$item->reservation_email}}
                        </td>
                        <td>    
                            @if ($item->payment_status == 1)
                            <button type="button" class="btn btn-primary">Chưa thanh toán</button>
                            @else

                            <button type="button" class="btn btn-success">Đã thanh toán</button>
                            @endif
                        </td>
                        <td>
                        @if ($item->status == 0)
                            <button type="button" class="btn btn-primary">Đang xử lý</button>
                        @elseif($item->status == 1)
                            <button type="button" class="btn btn-success">Đã xử lý</button>
                        @elseif($item->status == 2)
                            <button type="button" class="btn btn-success">Đã hủy</button>
                        @endif
                        </td>
                        </td>
                        <td>
                        {{ number_format($item->tour->price, 0, ',', '.') }}
                        </td>
                        <td>
                        {{ number_format($item->payment, 0, ',', '.') }}
                        </td>
                        <td>
                        {{ number_format($item->debt, 0, ',', '.') }}
                        </td>
                        <td style="display: flex">
                        @if ($item->status == 0)
                        <button  type="button" class="btn mr-lg-1 ml-lg-1 btn-warning edit-discount"
                                     data-toggle="modal"><a style="color: #fff" href="{{route('get.step.order',$item->id)}}"><i class="fa fa-check-circle-o" aria-hidden="true"></i> </a></button> 
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal_<?php echo $item->id ?>">
                                <i class="fa fa-trash" aria-hidden="true"></i></button>
                        @elseif($item->status == 1)
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal_<?php echo $item->id ?>">
                                <i class="fa fa-trash" aria-hidden="true"></i></button>
                        @elseif($item->status == 2)
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal_<?php echo $item->id ?>">
                        <i class="fa fa-trash" aria-hidden="true"></i></button>
                        @endif
                       
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
        <div class="table-search" style="overflow-x: scroll">

        </div>
        {{ $order->links('vendor.pagination.custom') }}
    </div>

</div>
<script>
        $(document).ready(function (){
        $('#search-order').on('keyup',function () {
            let key=$(this).val();
            $.ajax({
                url:'{{ \Illuminate\Support\Facades\URL::route('search.order') }}',
                type:'POST',
                data:{"_token":"{{csrf_token()}}", key:key},
                success: function(data) {
                    console.log(data);

                    if(data === ''){
                        $('.table-tour').hide()
                    }else {
                        $('.table-tour').hide()
                        // Tạo bảng và thêm dữ liệu
                            let output = `
            <table id="data-tour" class="display table table-striped table-hover" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Mã tour</th>
                    <th>Tên tour</th>
                    <th>Mã đặt tour</th>
                    <th>Tên khách hàng</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Trạng thái thanh toán</th>
                    <th>Trạng thái đơn hàng</th>
                    <th>Giá tour</th>
                    <th>Đã thanh toán</th>
                    <th>Còn nợ</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
            `;

            // Thêm từng hàng vào bảng
            data.forEach(item => {
                let paymentStatus = item.payment_status == 1 
                    ? `<button type="button" class="btn btn-primary">Chưa thanh toán</button>` 
                    : `<button type="button" class="btn btn-success">Đã thanh toán</button>`;

                let orderStatus = '';
                if (item.status == 0) orderStatus = `<button type="button" class="btn btn-primary">Đang xử lý</button>`;
                else if (item.status == 1) orderStatus = `<button type="button" class="btn btn-success">Đã xử lý</button>`;
                else if (item.status == 2) orderStatus = `<button type="button" class="btn btn-danger">Đã hủy</button>`;

                let status = '';

                if (item.status == 0) {
                    status = `
                    <button type="button" class="btn mr-lg-1 ml-lg-1 btn-warning edit-discount">
                        <a style="color: #fff" href="/dashboard/get-step-order/${item.id}">
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                        </a>
                    </button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal_${item.id}">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                     `;
                } else if (item.status == 1) {
                    status = `
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal_${item.id}">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                    `;
                } else if (item.status == 2) {
                    status = `
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal_${item.id}">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                    `;
                }
                output += `
                <tr>
                    <td>${item.id}</td>
                    <td>${item.tour_id}</td>
                    <td style="display: -webkit-box !important;-webkit-line-clamp: 3 !important;-webkit-box-orient: vertical !important;overflow: hidden !important;">
                    ${item.tour?.title || 'Không có tên tour'}</td>
                    <td>${item.order_id}</td>
                    <td>${item.reservation_name}</td>
                    <td>${item.reservation_phone}</td>
                    <td>${item.reservation_email}</td>
                    <td>${paymentStatus}</td>
                    <td>${orderStatus}</td>
                    <td>${new Intl.NumberFormat().format(item.tour?.price || 0)}</td>
                    <td>${new Intl.NumberFormat().format(item.payment || 0)}</td>
                    <td>${new Intl.NumberFormat().format(item.debt || 0)}</td>
                    <td style="display: flex">
                    ${status}</td>
                </tr>
                `;
            });

            output += `
                </tbody>
            </table>
            `;

            $('.table-search').html(output);
                    }
                }
            })
        })
        
    })
</script>
@endsection
<!-- báo cáo công nợ khách hàng:
Tên khách hàng,tour đã đặt,tổng tiền tour, tiền đã trả, còn nợ, ngày thanh toán, ngày trả,
trạng thái công nợ(đã thanh toán,đã thanh toán ,thanh toán 1 nửa), công nợ thu khách hhàng, 
công nợ trả nhà cc, 
Trạng thái: thay đổi trạng thái công nợ nhà cung cấp(supplier payment)
-->
@extends('admin.layout.main')
@section('content')
<div class="container-fluid utilities" style="padding-top:5rem">
    <h4>Báo cáo công nợ khách hàng đã đặt hàng</h4>
    <div class="manager-tour">
        <div class="row">
            <div class="col-md-1">
                <button type="button" style="margin-bottom: 2rem" class="btn btn-primary"><a href="#" style="color: #ffffff"> <i class="fa fa-plus" aria-hidden="true"></i></a></button>
            </div>
            <div class="col-md-5">
                <div class="search-debt">
                    <div class="search-debt" style="display:flex">
                        <input id="search-debt" name="search-debt" class="search-debt form-control" placeholder="Tìm kiếm theo tên KH,mã tour, mã order">
                        <button type="button" style="background: #EC0072;color: #fff;margin-left:1rem " class="btn">Tìm Kiếm</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <a href="{{route('debt-export')}}" style="color: #ffffff"><button type="button" style="margin-bottom: 2rem;float:right" class="btn btn-success">Xuất excel</button></a>
            </div>
        </div>
        <div class="table-tour" style="overflow-x: scroll">
            <table id="data-tour" class="display table table-striped table-hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">Số người đi</th>
                        <th scope="col">Mã đặt tour</th>
                        <th scope="col">Tour đã đặt</th>
                        <th scope="col">Tổng tiền tour</th>
                        <th scope="col">Tổng khách trả</th>
                        <th scope="col">Tiền đã trả</th>
                        <th scope="col">Còn nợ</th>
                        <th scope="col">Ngày thanh toán</th>
                        <th scope="col">Ngày trả</th>
                        <th scope="col">Trạng thái thanh toán</th>
                        <th scope="col">Đã trả nhà cung cấp</th>
                        <th scope="col">Còn nợ nhà cung cấp</th>
                        <th scope="col">Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tour as $item)
                    <tr>
                        <td>{{$item->reservation_name}}</td>
                        <td>{{$item->number_person}}</td>
                        <td>{{$item->order_id}}</td>
                        <td>{{$item->tour->id}}</td>
                        <td>
                            {{ number_format($item->tour->schedule_price, 0, ',', '.') }}
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
                        <td>{{$item->created_at->format('Y-m-d')}}</td>
                        <td>{{\Carbon\Carbon::parse($item->date_start)->subDays(7)->format('Y-m-d') }}</td>
                        <td>
                            @if ($item->debt==0)
                            <button type="button" class="btn btn-warning"> Thanh toán 100%</button>
                            @else
                            <button type="button" class="btn btn-success">Thanh toán 30%</button>
                            @endif
                        </td>
                        <td>
                            {{ number_format($item->payment_supplier, 0, ',', '.') }}
                        </td>
                        <td>{{$item->debt_supplier}}</td>
                        <td>
                            <button class="btn btn-primary btn-edit" data-id="{{ $item->id }}" data-payment="{{ $item->payment }}" data-debt="{{ $item->debt }}">
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>
                   <!-- Edit Data Modal -->
                    <div id="editModal" class="modal fade" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form id="editForm">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Chỉnh sửa dữ liệu</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- CSRF Token -->
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" id="editId" name="id" value="{{$item->id}}">

                                        <div class="form-group">
                                            <label for="name">Cập nhật giá nợ khách hàng</label>
                                            <input type="text" class="form-control" id="editDebt" name="debt" value="{{$item->debt}}" required>
                                            <input type="hidden" class="form-control" id="editPayment" name="payment"  value="{{$item->payment}}" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="table-search" style="overflow-x: scroll">

        </div>
        {{ $tour->links('vendor.pagination.custom') }}
    </div>

</div>
<script>
    $(document).ready(function () {
    $('.btn-edit').on('click', function () {
        let id = $(this).data('id');
        let payment = $(this).data('payment');
        let debt = $(this).data('debt');
        $('#editId').val(id);
        $('#editPayment').val(payment);
        $('#editDebt').val(debt);
        $('#editModal').modal('show');
    });
    $('#editForm').on('submit', function (e) {
        e.preventDefault();
        let formData = $(this).serialize();
        $.ajax({
            url: '{{ route('edit.list.debt') }}',
            type: 'POST',
            data: formData,
            success: function (response) {
                if (response.success) {
                    alert(response.message);
                    $('#editModal').modal('hide');
                    location.reload(); 
                }
            },
            error: function (xhr) {
                console.error(xhr.responseText);
                alert('Có lỗi xảy ra. Vui lòng thử lại.');
            }
        });
    });
    
    $('#search-debt').on('keyup',function () {
            let key=$(this).val();
            $.ajax({
                url:'{{ \Illuminate\Support\Facades\URL::route('search.debt') }}',
                type:'POST',
                data:{"_token":"{{csrf_token()}}", key:key},
                success: function(data) {
                    console.log(data);

                    if(data === ''){
                        $('.table-tour').show()
                    }else {
                        $('.table-tour').hide()
                        // Tạo bảng và thêm dữ liệu
                            let output = `
            <table id="data-tour" class="display table table-striped table-hover" cellspacing="0" width="100%">
                <thead>
               <tr>
                        <th scope="col">Tên khách hàng</th>
                        <th scope="col">Số người đi</th>
                        <th scope="col">Mã đặt tour</th>
                        <th scope="col">Tour đã đặt</th>
                        <th scope="col">Tổng tiền tour</th>
                        <th scope="col">Tổng khách trả</th>
                        <th scope="col">Tiền đã trả</th>
                        <th scope="col">Còn nợ</th>
                        <th scope="col">Ngày thanh toán</th>
                        <th scope="col">Ngày trả</th>
                        <th scope="col">Trạng thái thanh toán</th>
                        <th scope="col">Đã trả nhà cung cấp</th>
                        <th scope="col">Còn nợ nhà cung cấp</th>
                        <th scope="col">Trạng thái</th>
                    </tr>
                </thead>
                <tbody>
            `;

            // Thêm từng hàng vào bảng
            data.forEach(item => {
                let debtStatus = item.debt == 0 
                    ? `<button type="button" class="btn btn-warning"> Thanh toán 100%</button>` 
                    : `<button type="button" class="btn btn-success">Thanh toán 30%</button>`;
                output += `
                <tr>
                    <td>${item.reservation_name}</td>
                    <td>${item.number_person}</td>
                    <td>${item.order_id}</td>
                    <td>${item.tour.id}</td>
                    <td>${new Intl.NumberFormat().format(item.tour.schedule_price || 0)}</td>
                    <td>${new Intl.NumberFormat().format(item.tour.price || 0)}</td>
                    <td>${new Intl.NumberFormat().format(item.payment || 0)}</td>
                    <td>${new Intl.NumberFormat().format(item.debt || 0)}</td>
                    <td>${new Date(item.created_at).toLocaleDateString()}</td>
                    <td>${new Date(new Date(item.date_start).getTime() - 7 * 24 * 60 * 60 * 1000).toLocaleDateString()}</td>
                    <td>
                        ${item.debt == 0 ? 
                            '<button type="button" class="btn btn-warning">Thanh toán 100%</button>' : 
                            '<button type="button" class="btn btn-success">Thanh toán 30%</button>'}
                    </td>
                    <td>${new Intl.NumberFormat().format(item.payment_supplier || 0)}</td>
                    <td>${item.debt_supplier || 0}</td>
                    <td>
                        <button class="btn btn-primary btn-edit" data-id="${item.id}" data-payment="${item.payment}" data-debt="${item.debt}">
                            <i class="fa fa-money" aria-hidden="true"></i>
                        </button>
                    </td>
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
        
    });

</script>
@endsection
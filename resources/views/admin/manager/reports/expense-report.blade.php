<!-- Chi phí tổ chức tour: Bao gồm chi phí di chuyển, lưu trú, ăn uống,
 hướng dẫn viên, và các dịch vụ khác liên quan.
Lợi nhuận từ từng tour: So sánh giữa doanh thu và chi phí của từng tour 
giúp đánh giá hiệu quả kinh doanh của các tour khác nhau. -->

@extends('admin.layout.main')
@section('content')
<div class="container-fluid utilities" style="padding-top:5rem">
    <h4>Báo cáo chi phí </h4>
    <div class="manager-tour" style="padding-top: 2rem !important">
        <div class="row">
            <div class="col-md-1">
                <button type="button" style="margin-bottom: 2rem" class="btn btn-primary"><a href="#" style="color: #ffffff"> <i class="fa fa-plus" aria-hidden="true"></i></a></button>
            </div>
            <div class="col-md-5">
                <div class="search-expense">
                    <div class="search-expense" style="display:flex">
                        <input id="search-expense" name="search-expense" class="search-expense form-control" placeholder="Tìm kiếm theo tên KH,mã tour, mã order">
                        <button type="button" style="background: #EC0072;color: #fff;margin-left:1rem " class="btn">Tìm Kiếm</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <a href="{{route('expense-export')}}" style="color: #ffffff"><button type="button" style="margin-bottom: 2rem;float:right" class="btn btn-success">Xuất excel</button></a>
            </div>
        </div>        
        <div class="table-tour" style="overflow-x: scroll">
            <table id="data-tour" class="display table table-striped table-hover" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th style="border: 1px solid #DEE2E6;text-align:center" colspan="7">Chi phí tổ chức tour</th>
                    <th style="border: 1px solid #DEE2E6;text-align:center"colspan="3">Lợi nhuận từng tour</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Mã tour</td>
                    <td>Cp vé máy bay</td>
                    <td>Cp khách sạn</td>
                    <td>Cp di chuyển</td>
                    <td>Cp ăn uống</td>
                    <td>Cp hướng dẫn viên</td>
                    <td>Cp khác</td>

                    <td>Giá thu khách hàng</td>
                    <td>Chi phí</td>
                    <td>Lợi nhuận</td>
                </tr>
                @foreach ($data as $item)
                <tr>
                    <td>
                    {{ number_format($item->tour_id, 0, ',', '.') }}
                    </td>
                    <td>
                    {{ number_format($item->airfare_fee, 0, ',', '.') }}
                    </td>
                    <td>
                    {{ number_format($item->hotel_fee, 0, ',', '.') }}
                    </td>
                    <td>
                    {{ number_format($item->trans_fee, 0, ',', '.') }}
                    </td>
                    <td>
                    {{ number_format($item->meal_fee, 0, ',', '.') }}
                    </td>
                    <td>
                    {{ number_format($item->guide_fee, 0, ',', '.') }}
                    </td>
                    <td>
                    {{ number_format($item->other_fee, 0, ',', '.') }}
                    </td>
                    <td>
                    {{ number_format($item->tour->price, 0, ',', '.') }}
                    </td>
                    <td>
                    {{ number_format($item->tour->schedule_price, 0, ',', '.') }}
                    </td>
                    <td>
                    {{ number_format($item->tour->price - $item->tour->schedule_price, 0, ',', '.') }}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="table-search" style="overflow-x: scroll">
        </div>
    </div>

</div>
<script>
     $('.table-search').hide()
       $('#search-expense').on('keyup',function () {
            let key=$(this).val();
            $.ajax({
                url:'{{ \Illuminate\Support\Facades\URL::route('search.expense') }}',
                type:'POST',
                data:{"_token":"{{csrf_token()}}", key:key},
                success: function(data) {
                    if(data === ''){
                        $('.table-search').hide()
                    }else {
                        $('.table-tour').hide()
                        $('.table-search').show()
                        // Tạo bảng và thêm dữ liệu
                            let output = `
                                <div class="table-tour" style="overflow-x: scroll">
                                    <table id="data-tour" class="display table table-striped table-hover" cellspacing="0" width="100%">
                                        <thead>
                                        <tr>
                                            <th style="border: 1px solid #DEE2E6;text-align:center" colspan="7">Chi phí tổ chức tour</th>
                                            <th style="border: 1px solid #DEE2E6;text-align:center"colspan="3">Lợi nhuận từng tour</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Mã tour</td>
                                            <td>Cp vé máy bay</td>
                                            <td>Cp khách sạn</td>
                                            <td>Cp di chuyển</td>
                                            <td>Cp ăn uống</td>
                                            <td>Cp hướng dẫn viên</td>
                                            <td>Cp khác </td>

                                            <td>Giá thu khách hàng</td>
                                            <td>Chi phí</td>
                                            <td>Lợi nhuận</td>
                                        </tr>
                            `;

                        // Thêm từng hàng vào bảng
                        data.forEach(item => {
                            output += `
                            <tr>
                                <td>${new Intl.NumberFormat().format(item.tour_id || 0)}</td>
                                <td>${new Intl.NumberFormat().format(item.airfare_fee || 0)}</td>
                                <td>${new Intl.NumberFormat().format(item.hotel_fee || 0)}</td>
                                <td>${new Intl.NumberFormat().format(item.trans_fee || 0)}</td>
                                <td>${new Intl.NumberFormat().format(item.meal_fee || 0)}</td>
                                <td>${new Intl.NumberFormat().format(item.guide_fee || 0)}</td>
                                <td>${new Intl.NumberFormat().format(item.other_fee || 0)}</td>
                                <td>${new Intl.NumberFormat().format(item.tour.price || 0)}</td>
                                <td>${new Intl.NumberFormat().format(item.tour.schedule_price || 0)}</td>
                                <td>${new Intl.NumberFormat().format(item.tour.price - item.tour.schedule_price)}</td>
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
    
</script>
@endsection
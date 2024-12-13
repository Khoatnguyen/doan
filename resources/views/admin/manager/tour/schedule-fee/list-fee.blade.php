@extends('admin.layout.main')
@section('content')
    <div class="container-fluid manager-tour">
    <h4>Danh sách giá lịch trình {{$listTour->id}}</h4>
    @if (!$listTour->ScheduleFee->id)
    <button type="button" style="margin-bottom: 2rem" class="btn btn-primary"><a href="{{route('get.add.schedule.fee',$listTour->id)}}" style="color: #ffffff"> <i class="fa fa-plus" aria-hidden="true"></i></a></button>
    @endif
        <div class="table-tour pt-5" style="overflow-x: scroll">
            <table id="data-tour" class="display table table-striped table-hover" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Mã tour</th>
                    <th scope="col">Giá vé máy bay</th>
                    <th scope="col">Giá khách sạn</th>
                    <th scope="col">Phí di chuyển</th>
                    <th scope="col">Phí ăn uống</th>
                    <th scope="col">Phí hướng dẫn viên</th>
                    <th scope="col">Các phí khác</th>
                    <th scope="col">Trạng thái</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$listTour->ScheduleFee->id}}</td>
                        <td>{{$listTour->id}}</td>
                        <td >
                        {{ number_format($listTour->ScheduleFee->airfare_fee, 0, ',', '.') }}
                        </td>
                        <td >
                        {{ number_format($listTour->ScheduleFee->hotel_fee, 0, ',', '.') }}
                        <td>
                        {{ number_format($listTour->ScheduleFee->trans_fee, 0, ',', '.') }}
                        <td>
                        {{ number_format($listTour->ScheduleFee->meal_fee, 0, ',', '.') }}
                        <td>
                        {{ number_format($listTour->ScheduleFee->guide_fee, 0, ',', '.') }}
                        <td>
                        {{ number_format($listTour->ScheduleFee->other_fee, 0, ',', '.') }}
                        <td >
                            <button  type="button" class="btn mr-lg-1 ml-lg-1 btn-warning edit-discount"
                                   data-toggle="modal"><a style="color: #fff" href="{{route('get.edit.schedule.fee',$listTour->ScheduleFee->id)}}"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </a></button>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>

@endsection
@section('javascript')

@endsection

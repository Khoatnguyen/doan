@extends('layout.main')
@section('content')

    <div class="container">
        @php
            $images= explode('|',$detail_tour->library_images)
        @endphp
        <img style="width: 100%;height: 420px; object-fit: contain; padding-bottom: 3rem"
             src="{{\Illuminate\Support\Facades\Storage::url($images[0])}}" alt="">
        <div class="row">
            <div class="col-md-9">
                <div class="title-tour">
                    <h3>{{$detail_tour->title}}</h3>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <p>{{$detail_tour->address}}</p>
                        <div class="star-range">
                            <input type="range" name="range" min="0" max="10" step="1" list="tickmark" value="1">
                            <div class="star-white star">★★★★★</div>
                            <div class="star-black star">★★★★★</div>
                        </div>

                    </div>
                    <div class="col-md-4 d-flex">
                        <img style="width: 48px;height: 48px; margin-right: 1rem"
                             src="{{asset('image/19a6a9085bc66dde26a8720afef6f892.png')}}" alt="">
                        <div class="title-company">
                            <h4 style="font-weight: 600">Mytour Event</h4>
                            <h5>Nhà cung cấp chính</h5>
                        </div>
                    </div>
                </div>
                <div class="row utilities">
                    <div class="col-md-3 d-flex">
                        <div class="icon-utilities">
                            <img src="{{asset('image/icons8-clock-64.png')}}" alt="">
                        </div>
                        <div class="title-utilities">
                            <h4>
                                Thời gian
                            </h4>
                            <h5>
                                {{$detail_tour->time}}
                                Ngày
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="icon-utilities">
                            <img src="{{asset('image/icons8-traveling-around-the-world-96.png')}}" alt="">
                        </div>
                        <div class="title-utilities">
                            <h4>
                                Loại tour
                            </h4>
                            <h5>
                                @if($detail_tour->type_tour == 1)
                                    Tour quốc tế
                                @else
                                    Tour nội địa
                                @endif
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="icon-utilities">
                            <img src="{{asset('image/icons8-team-work-58.png')}}" alt="">
                        </div>
                        <div class="title-utilities">
                            <h4>
                                Quy mô nhóm
                            </h4>
                            <h5>
                                {{$detail_tour->number_person}}
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex">
                        <div class="icon-utilities">
                            <img src="{{asset('image/icons8-map-64.png')}}" alt="">
                        </div>
                        <div class="title-utilities">
                            <h4>
                                Địa điểm
                            </h4>
                            <h5>
                                {{$detail_tour->address}}
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="row divider-inner-text">
                    <span>
                        Giới thiệu
                    </span>
                </div>
                <div class="slider-tour">
                    <div class="slider-for">
                        @foreach($images as $item)
                            <img style="width: 468px;height: 420px;object-fit: contain"
                                 src="{{\Illuminate\Support\Facades\Storage::url($item)}}" alt="">
                        @endforeach

                    </div>
                    <div class="slider-nav">
                        @foreach($images as $item)
                            <img style="width:50%!important; height: 32px;object-fit: contain"
                                 src="{{\Illuminate\Support\Facades\Storage::url($item)}}" alt="">
                        @endforeach

                    </div>
                </div>
                <div class="information-tour">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td class="col-md-2">Thời gian:</td>
                            <td class="fw">{{$detail_tour->time}}</td>
                        </tr>
                        <tr>
                            <td>Phương tiện:</td>
                            <td class="fw">Máy bay, ô tô</td>
                        </tr>
                        <tr>
                            <td>Khởi hành:</td>
                            <td class="fw">Nhiều ngày khởi hành</td>
                        </tr>
                        <tr>
                            <td>Giá tour trọn gói:</td>
                            <td class="fw">Chỉ từ {{$detail_tour->price}}/người</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="description-tour">
                    <div class="description-title">
                        ĐIỂM HẤP DẪN CỦA CHƯƠNG TRÌNH:
                    </div>
                    <div class="description">
                        @php
                        $descriptions = explode('/', $detail_tour->description);
                            @endphp
                        @foreach($descriptions as $description)
                        {{$description}}<br> <br>
                        @endforeach
                    </div>
                </div>
                <div class="row divider-inner-text">
                    <span>
                       Lịch trình
                    </span>
                </div>
                <div class="">
                    <div class="line">
                        @foreach($listSchedule as $schedule)
                            @php
                                $schedules = explode('/', $schedule->description);
                             @endphp
                            <p>
                                <span>{{$schedule->title}}</span>
                                <br>
                                @foreach($schedules as $schedule)
                                    {{$schedule}}<br>
                                @endforeach
                            </p>
                        @endforeach
                      </div>
                </div>
                <div class="row divider-inner-text">
                    <span>
                       Bao gồm
                    </span>
                </div>
                <div class="schedule row">
                    <div class="col-12" style="padding: 0">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-home-list"
                               data-toggle="list" href="#list-home" role="tab" aria-controls="home">GIÁ TOUR BAO GỒM</a>
                            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                               href="#list-profile" role="tab" aria-controls="profile">GIÁ TOUR KHÔNG BAO GỒM</a>
                            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
                               href="#list-messages" role="tab" aria-controls="messages">LƯU Ý</a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                                 aria-labelledby="list-home-list">
                                @php
                                    $includes = explode('+',$detail_tour->include_price);
                                @endphp
                                <ul>
                                    @foreach($includes as $include)
                                        <li>
                                            {{$include}}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                 aria-labelledby="list-profile-list">
                                @php
                                    $none_includes = explode('+',$detail_tour->none_include_price);
                                @endphp
                                <ul>
                                    @foreach($none_includes as $none_include)
                                        <li>{{$none_include}}</li>
                                    @endforeach
                                </ul>

                            </div>
                            <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                 aria-labelledby="list-messages-list">
                                @php
                                    $notes = explode('+',$detail_tour->note);
                                @endphp
                                <ul>
                                    @foreach($notes as $note)
                                        <li>
                                            {{$note}}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="list-group fixed ">
                    <div class="list-group-item list-group-item-action flex-column align-items-start active">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Từ</td>
                                <td class="price-tour">{{$detail_tour->schedule_price}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div style="padding: 2rem" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        </div>
                        <h4 style="font-weight: 600">Ngày khởi hành</h4>
                        <p class="mb-1">Khởi hành trong toàn bộ các ngày từ {{$detail_tour->date_start}} đến {{$detail_tour->date_end}}</p>
                    </div>
                
                    <div style="padding: 2rem"  class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                        </div>
                        
                        <button type="button" style="background: #EC0072;font-size: 14px;color: #fff;width: 100%" class="btn">
                        <a style="color: #fff" href="{{route('order.tour',$detail_tour->id)}}"> Đặt ngay </a>
                        </button>        
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <script>
        const range = document.querySelector('[name="range"]');
        const blackStar = document.querySelector('.star-black');
        range.addEventListener('input', function(e) {
            const value = e.target.value;
            blackStar.style.width = value/2 + 'em';
        });
    </script>
@endsection

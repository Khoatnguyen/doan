@extends('layout.main')
@section('content')
    <section class="banner">

        <div class="MuiBox-root jss4">
            <video width="100%" height="460px" type="video/mp4" autoplay="" loop="">
                <source src="{{asset('videos/video_bg_mytour%20(1).mov')}}">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="small-banner container">
            <div class="row">
                <div class="col-12">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list"
                           href="#list-home" role="tab" aria-controls="home">
                            <i class="fa-solid fa-hotel"></i>
                            Khách sạn</a>
                        <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list"
                           href="#list-profile" role="tab" aria-controls="profile">
                            <i class="fa-solid fa-hotel"></i>
                            Vé máy bay</a>
                        <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list"
                           href="#list-messages" role="tab" aria-controls="messages">
                            <i class="fa-solid fa-house"></i>
                            Biệt thự, Homestay</a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                             aria-labelledby="list-home-list">
                            <div class="row" style="height: 100%;width: 100%">
                                <div class="col-md-11 d-flex">
                                    <div class="col-md-4 destination">
                                        <p>Địa điểm</p>
                                        <div class="destination-title">
                                            <input placeholder="Thành phố, khách sạn, điểm đến">
                                        </div>

                                    </div>
                                    <div class="col-md-5" style="border-left: 1px solid #E2E8F0;">
                                        <div class="date-tour">
                                            <div class="date-department">
                                                <p class="department-title">
                                                    Ngày đi
                                                </p>
                                                <input type="date">

                                            </div>
                                            <div class="date-return">
                                                <p class="return-title">
                                                    Ngày về
                                                </p>
                                                <input type="date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 room-number">
                                        <p class="room-number-title">Số phòng, số khách</p>
                                        <select class="form-select">
                                            <div style="height: 50px !important;">
                                                <option>
                                                    1 phòng, 1 người lớn
                                                </option>
                                            </div>
                                            <option>Đi theo gia đình</option>
                                            <option>Đi theo nhóm</option>
                                            <option>Đi công tác</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <button type="button" class="btn btn-danger" style="width: 100%; height: 100%">
                                        <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                            ...
                        </div>
                        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                            ...
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="body">
        <div class="slider container">
            <img  src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://www.googleapis.com/download/storage/v1/b/tourcdn/o/photos%2FW8445OPAW6_%2Ftmp%2Fplaytemp2011297793977543921%2FmultipartBody4968827743543033914asTemporaryFile?generation=1692007506873235&alt=media"
                  alt="">
            <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://www.googleapis.com/download/storage/v1/b/tourcdn/o/photos%2FQPX0PR7DUG_%2Ftmp%2Fplaytemp5337789868972991393%2FmultipartBody3446977973066063566asTemporaryFile?generation=1690872277730895&alt=media"
                 alt="">
            <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://www.googleapis.com/download/storage/v1/b/tourcdn/o/photos%2FBPKFH9GERM_%2Ftmp%2Fplaytemp6410158542450772504%2FmultipartBody3910481685497228100asTemporaryFile?generation=1691464999690047&alt=media"
                 alt="">
            <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://googleapis.tripi.vn/download/storage/v1/b/tourcdn/o/photos%2FH0I0HB1B97_%2Ftmp%2Fplaytemp2443853417114810977%2FmultipartBody3577809183737974532asTemporaryFile?generation=1677033770819107&alt=media"
                 alt="">
            <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://googleapis.tripi.vn/download/storage/v1/b/tourcdn/o/photos%2F3G2EMEYQZC_%2Ftmp%2Fplaytemp5649240327319449984%2FmultipartBody1266510668978749085asTemporaryFile?generation=1689043464528404&alt=media"
                 alt="">
        </div>

        <div class="plash-sale">
            <div class="container">
                <div class="top-plash" style="display: flex">
                    <div class="top-plash-left col-md-6">
                        <img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_flashSale_home_white_new.png"
                             alt="">
                        <div style="display: flex">
                            <p> Chương trình sẽ kết thúc trong</p>
                            <div class="time">
                                <div class="item">
                                    <div class="btn" id="hour">12</div>
                                    :
                                </div>
                                <div class="item">
                                    <div class="btn" id="minute">30</div>
                                    :
                                </div>
                                <div class="item">
                                    <div class="btn" id="seconds">12</div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6" style="display: flex;justify-content: end">
                        <div class="happenning">
                            <span>00:00-23:59</span>
                            <span> Đang diễn ra</span>
                        </div>
                        <div class="happenning">
                            <span>00:00-23:59</span>
                            <span> Đang diễn ra</span>
                        </div>

                    </div>
                </div>
                <div class="slider-plash">
                    <div class="item-plash">
                        <div class="img-plash">
                            <img src="https://img.tripi.vn/cdn-cgi/image/width=548,height=310/https://www.googleapis.com/download/storage/v1/b/tourcdn/o/photos%2FBZ1O6VKR21_%2Ftmp%2Fplaytemp8992226862162980543%2FmultipartBody8889052234719766714asTemporaryFile?generation=1595488423270831&alt=media"
                                 alt="">
                            <div class="discount">
                                <span>-15%</span>
                            </div>
                            <div class="heart-plash">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                        </div>
                        <div style="padding: 5%">
                            <h3>Khách sạn Imperial Vũng Tàu</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                            </div>
                            <div class="location">
                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                Thành phố Vũng tàu
                            </div>
                            <div class="ranking">
                                <i class="fa fa-umbrella" aria-hidden="true">
                                    8.8</i>
                                Rất tốt (1257 đánh giá)
                            </div>
                            <div class="just-order">
                                Vừa được đặt 4 giờ trước
                            </div>
                            <div class="price-plash">
                                <span class="old-price">2.421.335 ₫</span>
                                <span class="news-price">2.212.606 ₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-plash">
                        <div class="img-plash">
                            <img src="https://img.tripi.vn/cdn-cgi/image/width=548,height=310/https://www.googleapis.com/download/storage/v1/b/tourcdn/o/photos%2FBZ1O6VKR21_%2Ftmp%2Fplaytemp8992226862162980543%2FmultipartBody8889052234719766714asTemporaryFile?generation=1595488423270831&alt=media"
                                 alt="">
                            <div class="discount">
                                <span>-15%</span>
                            </div>
                            <div class="heart-plash">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                        </div>
                        <div style="padding: 5%">
                            <h3>Khách sạn Imperial Vũng Tàu</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                            </div>
                            <div class="location">
                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                Thành phố Vũng tàu
                            </div>
                            <div class="ranking">
                                <i class="fa fa-umbrella" aria-hidden="true">
                                    8.8</i>
                                Rất tốt (1257 đánh giá)
                            </div>
                            <div class="just-order">
                                Vừa được đặt 4 giờ trước
                            </div>
                            <div class="price-plash">
                                <span class="old-price">2.421.335 ₫</span>
                                <span class="news-price">2.212.606 ₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-plash">
                        <div class="img-plash">
                            <img src="https://img.tripi.vn/cdn-cgi/image/width=548,height=310/https://www.googleapis.com/download/storage/v1/b/tourcdn/o/photos%2FBZ1O6VKR21_%2Ftmp%2Fplaytemp8992226862162980543%2FmultipartBody8889052234719766714asTemporaryFile?generation=1595488423270831&alt=media"
                                 alt="">
                            <div class="discount">
                                <span>-15%</span>
                            </div>
                            <div class="heart-plash">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                        </div>
                        <div style="padding: 5%">
                            <h3>Khách sạn Imperial Vũng Tàu</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                            </div>
                            <div class="location">
                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                Thành phố Vũng tàu
                            </div>
                            <div class="ranking">
                                <i class="fa fa-umbrella" aria-hidden="true">
                                    8.8</i>
                                Rất tốt (1257 đánh giá)
                            </div>
                            <div class="just-order">
                                Vừa được đặt 4 giờ trước
                            </div>
                            <div class="price-plash">
                                <span class="old-price">2.421.335 ₫</span>
                                <span class="news-price">2.212.606 ₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-plash">
                        <div class="img-plash">
                            <img src="https://img.tripi.vn/cdn-cgi/image/width=548,height=310/https://www.googleapis.com/download/storage/v1/b/tourcdn/o/photos%2FBZ1O6VKR21_%2Ftmp%2Fplaytemp8992226862162980543%2FmultipartBody8889052234719766714asTemporaryFile?generation=1595488423270831&alt=media"
                                 alt="">
                            <div class="discount">
                                <span>-15%</span>
                            </div>
                            <div class="heart-plash">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                        </div>
                        <div style="padding: 5%">
                            <h3>Khách sạn Imperial Vũng Tàu</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                            </div>
                            <div class="location">
                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                Thành phố Vũng tàu
                            </div>
                            <div class="ranking">
                                <i class="fa fa-umbrella" aria-hidden="true">
                                    8.8</i>
                                Rất tốt (1257 đánh giá)
                            </div>
                            <div class="just-order">
                                Vừa được đặt 4 giờ trước
                            </div>
                            <div class="price-plash">
                                <span class="old-price">2.421.335 ₫</span>
                                <span class="news-price">2.212.606 ₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-plash">
                        <div class="img-plash">
                            <img src="https://img.tripi.vn/cdn-cgi/image/width=548,height=310/https://www.googleapis.com/download/storage/v1/b/tourcdn/o/photos%2FBZ1O6VKR21_%2Ftmp%2Fplaytemp8992226862162980543%2FmultipartBody8889052234719766714asTemporaryFile?generation=1595488423270831&alt=media"
                                 alt="">
                            <div class="discount">
                                <span>-15%</span>
                            </div>
                            <div class="heart-plash">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                        </div>
                        <div style="padding: 5%">
                            <h3>Khách sạn Imperial Vũng Tàu</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                            </div>
                            <div class="location">
                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                Thành phố Vũng tàu
                            </div>
                            <div class="ranking">
                                <i class="fa fa-umbrella" aria-hidden="true">
                                    8.8</i>
                                Rất tốt (1257 đánh giá)
                            </div>
                            <div class="just-order">
                                Vừa được đặt 4 giờ trước
                            </div>
                            <div class="price-plash">
                                <span class="old-price">2.421.335 ₫</span>
                                <span class="news-price">2.212.606 ₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-plash">
                        <div class="img-plash">
                            <img src="https://img.tripi.vn/cdn-cgi/image/width=548,height=310/https://www.googleapis.com/download/storage/v1/b/tourcdn/o/photos%2FBZ1O6VKR21_%2Ftmp%2Fplaytemp8992226862162980543%2FmultipartBody8889052234719766714asTemporaryFile?generation=1595488423270831&alt=media"
                                 alt="">
                            <div class="discount">
                                <span>-15%</span>
                            </div>
                            <div class="heart-plash">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                        </div>
                        <div style="padding: 5%">
                            <h3>Khách sạn Imperial Vũng Tàu</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                            </div>
                            <div class="location">
                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                Thành phố Vũng tàu
                            </div>
                            <div class="ranking">
                                <i class="fa fa-umbrella" aria-hidden="true">
                                    8.8</i>
                                Rất tốt (1257 đánh giá)
                            </div>
                            <div class="just-order">
                                Vừa được đặt 4 giờ trước
                            </div>
                            <div class="price-plash">
                                <span class="old-price">2.421.335 ₫</span>
                                <span class="news-price">2.212.606 ₫</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-plash">
                        <div class="img-plash">
                            <img src="https://img.tripi.vn/cdn-cgi/image/width=548,height=310/https://www.googleapis.com/download/storage/v1/b/tourcdn/o/photos%2FBZ1O6VKR21_%2Ftmp%2Fplaytemp8992226862162980543%2FmultipartBody8889052234719766714asTemporaryFile?generation=1595488423270831&alt=media"
                                 alt="">
                            <div class="discount">
                                <span>-15%</span>
                            </div>
                            <div class="heart-plash">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                        </div>
                        <div style="padding: 5%">
                            <h3>Khách sạn Imperial Vũng Tàu</h3>
                            <div class="stars">
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                            </div>
                            <div class="location">
                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                Thành phố Vũng tàu
                            </div>
                            <div class="ranking">
                                <i class="fa fa-umbrella" aria-hidden="true">
                                    8.8</i>
                                Rất tốt (1257 đánh giá)
                            </div>
                            <div class="just-order">
                                Vừa được đặt 4 giờ trước
                            </div>
                            <div class="price-plash">
                                <span class="old-price">2.421.335 ₫</span>
                                <span class="news-price">2.212.606 ₫</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="see-more">
                    <a href="#"> Xem thêm</a>
                </div>
            </div>
        </div>

        <div class="best-flight">
            <div class="container">
                <div class="best-flight-top row">
                    <div class="col-md-6">
                        <div style="display: flex;color: #1A202C; font-size: 24px;font-weight: 600">
                            Chuyến bay tốt nhất từ
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle"
                                   style=" margin-left: 8px; margin-right: 8px;color: rgb(255, 51, 102); cursor: pointer;"
                                   data-toggle="dropdown"> Hà Nội <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div style="color: #4A5568;">Những chuyến bay giá tốt nhất trong tháng khởi hành từ Hà Nội</div>
                    </div>
                    <div class="col-md-6 discover">
                        <a href="#">Khám phá ngay</a>
                    </div>
                </div>
                <div class="autoplay" style="display: flex;">
                    <div class="slider-best">
                        <div class="logo-airline">
                            <img src="	https://storage.googleapis.com/tripi-flights/airline_logos/VU_logo.png" alt="">

                            <p style="padding-top: 2%">Vietravel Airlines</p>
                        </div>
                        <div class="from-to">
                            Nội Bài <i class="fa-solid fa-arrow-right"></i> Tân Sơn Nhất
                        </div>
                        <div class="date-fly">
                            <i class="fa-solid fa-plane"></i>
                            Khởi hành: 22/8/2023
                        </div>
                        <div class="price-best">
                            <span style="color: #1a202c; font-size: 18px;line-height: 22px; font-weight: 600">298.000 ₫</span>
                            <span style="color: rgb(74, 85, 104);font-size: 14px;line-height: 22px"> Giá sau thuế: 940.440 ₫</span>
                        </div>
                    </div>
                    <div class="slider-best">
                        <div class="logo-airline">
                            <img src="	https://storage.googleapis.com/tripi-flights/airline_logos/VU_logo.png" alt="">

                            <p style="padding-top: 2%">Vietravel Airlines</p>
                        </div>
                        <div class="from-to">
                            Nội Bài <i class="fa-solid fa-arrow-right"></i> Tân Sơn Nhất
                        </div>
                        <div class="date-fly">
                            <i class="fa-solid fa-plane"></i>
                            Khởi hành: 22/8/2023
                        </div>
                        <div class="price-best">
                            <span style="color: #1a202c; font-size: 18px;line-height: 22px; font-weight: 600">298.000 ₫</span>
                            <span style="color: rgb(74, 85, 104);font-size: 14px;line-height: 22px"> Giá sau thuế: 940.440 ₫</span>
                        </div>
                    </div>
                    <div class="slider-best">
                        <div class="logo-airline">
                            <img src="	https://storage.googleapis.com/tripi-flights/airline_logos/VU_logo.png" alt="">

                            <p style="padding-top: 2%">Vietravel Airlines</p>
                        </div>
                        <div class="from-to">
                            Nội Bài <i class="fa-solid fa-arrow-right"></i> Tân Sơn Nhất
                        </div>
                        <div class="date-fly">
                            <i class="fa-solid fa-plane"></i>
                            Khởi hành: 22/8/2023
                        </div>
                        <div class="price-best">
                            <span style="color: #1a202c; font-size: 18px;line-height: 22px; font-weight: 600">298.000 ₫</span>
                            <span style="color: rgb(74, 85, 104);font-size: 14px;line-height: 22px"> Giá sau thuế: 940.440 ₫</span>
                        </div>
                    </div>
                    <div class="slider-best">
                        <div class="logo-airline">
                            <img src="	https://storage.googleapis.com/tripi-flights/airline_logos/VU_logo.png" alt="">

                            <p style="padding-top: 2%">Vietravel Airlines</p>
                        </div>
                        <div class="from-to">
                            Nội Bài <i class="fa-solid fa-arrow-right"></i> Tân Sơn Nhất
                        </div>
                        <div class="date-fly">
                            <i class="fa-solid fa-plane"></i>
                            Khởi hành: 22/8/2023
                        </div>
                        <div class="price-best">
                            <span style="color: #1a202c; font-size: 18px;line-height: 22px; font-weight: 600">298.000 ₫</span>
                            <span style="color: rgb(74, 85, 104);font-size: 14px;line-height: 22px"> Giá sau thuế: 940.440 ₫</span>
                        </div>
                    </div>
                    <div class="slider-best">
                        <div class="logo-airline">
                            <img src="	https://storage.googleapis.com/tripi-flights/airline_logos/VU_logo.png" alt="">

                            <p style="padding-top: 2%">Vietravel Airlines</p>
                        </div>
                        <div class="from-to">
                            Nội Bài <i class="fa-solid fa-arrow-right"></i> Tân Sơn Nhất
                        </div>
                        <div class="date-fly">
                            <i class="fa-solid fa-plane"></i>
                            Khởi hành: 22/8/2023
                        </div>
                        <div class="price-best">
                            <span style="color: #1a202c; font-size: 18px;line-height: 22px; font-weight: 600">298.000 ₫</span>
                            <span style="color: rgb(74, 85, 104);font-size: 14px;line-height: 22px"> Giá sau thuế: 940.440 ₫</span>
                        </div>
                    </div>
                    <div class="slider-best">
                        <div class="logo-airline">
                            <img src="	https://storage.googleapis.com/tripi-flights/airline_logos/VU_logo.png" alt="">

                            <p style="padding-top: 2%">Vietravel Airlines</p>
                        </div>
                        <div class="from-to">
                            Nội Bài <i class="fa-solid fa-arrow-right"></i> Tân Sơn Nhất
                        </div>
                        <div class="date-fly">
                            <i class="fa-solid fa-plane"></i>
                            Khởi hành: 22/8/2023
                        </div>
                        <div class="price-best">
                            <span style="color: #1a202c; font-size: 18px;line-height: 22px; font-weight: 600">298.000 ₫</span>
                            <span style="color: rgb(74, 85, 104);font-size: 14px;line-height: 22px"> Giá sau thuế: 940.440 ₫</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="hot-hotel">
            <div class="container">
                <div class="title-hotel">
                    <p>Khách sạn giá sốc chi có trên Mytour</p>
                    <span> Tiết kiện chi phí với các khách sạn hợp tác chiến lược cùng Mytour, cam kết giá tốt nhất và chất lượng tốt nhất dành cho bạn</span>
                </div>
                <div class="row">
                    <div class="worko-tabs" style="width: 100%">

                        <input class="state" type="radio" title="tab-one" name="tabs-state" id="tab-one" checked/>
                        <input class="state" type="radio" title="tab-two" name="tabs-state" id="tab-two"/>
                        <input class="state" type="radio" title="tab-three" name="tabs-state" id="tab-three"/>
                        <input class="state" type="radio" title="tab-four" name="tabs-state" id="tab-four"/>

                        <div class="tabs flex-tabs">
                            <label for="tab-one" id="tab-one-label" class="tab">Phú Quốc</label>
                            <label for="tab-two" id="tab-two-label" class="tab">Nha Trang</label>
                            <label for="tab-three" id="tab-three-label" class="tab">Bà Rịa - Vũng Tàu</label>
                            <label for="tab-four" id="tab-four-label" class="tab">Đà Lạt</label>
                            <label for="tab-four" id="tab-five-label" class="tab">Đà Nẵng</label>
                            <label for="tab-four" id="tab-six-label" class="tab">Sapa</label>


                            <div id="tab-one-panel" class="panel active">
                                <div class="row">
                                    <div class="item-plash col-md-3">
                                        <div class="img-plash">
                                            <img src="https://img.tripi.vn/cdn-cgi/image/width=548,height=310/https://www.googleapis.com/download/storage/v1/b/tourcdn/o/photos%2FBZ1O6VKR21_%2Ftmp%2Fplaytemp8992226862162980543%2FmultipartBody8889052234719766714asTemporaryFile?generation=1595488423270831&alt=media"
                                                 alt="">
                                            <div class="discount">
                                                <span>-15%</span>
                                            </div>
                                            <div class="heart-plash">
                                                <i class="fa-solid fa-heart"></i>
                                            </div>
                                        </div>
                                        <div class="title-plash">
                                            <h3>Khách sạn Imperial Vũng Tàu</h3>
                                            <div class="stars">
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                            </div>
                                            <div class="location">
                                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                                Thành phố Vũng tàu
                                            </div>
                                            <div class="ranking">
                                                <i class="fa fa-umbrella" aria-hidden="true">
                                                    8.8</i>
                                                Rất tốt (1257 đánh giá)
                                            </div>
                                            <div class="just-order">
                                                Vừa được đặt 4 giờ trước
                                            </div>
                                            <div class="price-plash">
                                                <span class="old-price">2.421.335 ₫</span>
                                                <span class="news-price">2.212.606 ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-plash col-md-3">
                                        <div class="img-plash">
                                            <img src="https://img.tripi.vn/cdn-cgi/image/width=548,height=310/https://www.googleapis.com/download/storage/v1/b/tourcdn/o/photos%2FBZ1O6VKR21_%2Ftmp%2Fplaytemp8992226862162980543%2FmultipartBody8889052234719766714asTemporaryFile?generation=1595488423270831&alt=media"
                                                 alt="">
                                            <div class="discount">
                                                <span>-15%</span>
                                            </div>
                                            <div class="heart-plash">
                                                <i class="fa-solid fa-heart"></i>
                                            </div>
                                        </div>
                                        <div class="title-plash">
                                            <h3>Khách sạn Imperial Vũng Tàu</h3>
                                            <div class="stars">
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                            </div>
                                            <div class="location">
                                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                                Thành phố Vũng tàu
                                            </div>
                                            <div class="ranking">
                                                <i class="fa fa-umbrella" aria-hidden="true">
                                                    8.8</i>
                                                Rất tốt (1257 đánh giá)
                                            </div>
                                            <div class="just-order">
                                                Vừa được đặt 4 giờ trước
                                            </div>
                                            <div class="price-plash">
                                                <span class="old-price">2.421.335 ₫</span>
                                                <span class="news-price">2.212.606 ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-plash col-md-3">
                                        <div class="img-plash">
                                            <img src="https://img.tripi.vn/cdn-cgi/image/width=548,height=310/https://www.googleapis.com/download/storage/v1/b/tourcdn/o/photos%2FBZ1O6VKR21_%2Ftmp%2Fplaytemp8992226862162980543%2FmultipartBody8889052234719766714asTemporaryFile?generation=1595488423270831&alt=media"
                                                 alt="">
                                            <div class="discount">
                                                <span>-15%</span>
                                            </div>
                                            <div class="heart-plash">
                                                <i class="fa-solid fa-heart"></i>
                                            </div>
                                        </div>
                                        <div class="title-plash">
                                            <h3>Khách sạn Imperial Vũng Tàu</h3>
                                            <div class="stars">
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                            </div>
                                            <div class="location">
                                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                                Thành phố Vũng tàu
                                            </div>
                                            <div class="ranking">
                                                <i class="fa fa-umbrella" aria-hidden="true">
                                                    8.8</i>
                                                Rất tốt (1257 đánh giá)
                                            </div>
                                            <div class="just-order">
                                                Vừa được đặt 4 giờ trước
                                            </div>
                                            <div class="price-plash">
                                                <span class="old-price">2.421.335 ₫</span>
                                                <span class="news-price">2.212.606 ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-plash col-md-3">
                                        <div class="img-plash">
                                            <img src="https://img.tripi.vn/cdn-cgi/image/width=548,height=310/https://www.googleapis.com/download/storage/v1/b/tourcdn/o/photos%2FBZ1O6VKR21_%2Ftmp%2Fplaytemp8992226862162980543%2FmultipartBody8889052234719766714asTemporaryFile?generation=1595488423270831&alt=media"
                                                 alt="">
                                            <div class="discount">
                                                <span>-15%</span>
                                            </div>
                                            <div class="heart-plash">
                                                <i class="fa-solid fa-heart"></i>
                                            </div>
                                        </div>
                                        <div class="title-plash">
                                            <h3>Khách sạn Imperial Vũng Tàu</h3>
                                            <div class="stars">
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                            </div>
                                            <div class="location">
                                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                                Thành phố Vũng tàu
                                            </div>
                                            <div class="ranking">
                                                <i class="fa fa-umbrella" aria-hidden="true">
                                                    8.8</i>
                                                Rất tốt (1257 đánh giá)
                                            </div>
                                            <div class="just-order">
                                                Vừa được đặt 4 giờ trước
                                            </div>
                                            <div class="price-plash">
                                                <span class="old-price">2.421.335 ₫</span>
                                                <span class="news-price">2.212.606 ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-plash col-md-3">
                                        <div class="img-plash">
                                            <img src="https://img.tripi.vn/cdn-cgi/image/width=548,height=310/https://www.googleapis.com/download/storage/v1/b/tourcdn/o/photos%2FBZ1O6VKR21_%2Ftmp%2Fplaytemp8992226862162980543%2FmultipartBody8889052234719766714asTemporaryFile?generation=1595488423270831&alt=media"
                                                 alt="">
                                            <div class="discount">
                                                <span>-15%</span>
                                            </div>
                                            <div class="heart-plash">
                                                <i class="fa-solid fa-heart"></i>
                                            </div>
                                        </div>
                                        <div class="title-plash">
                                            <h3>Khách sạn Imperial Vũng Tàu</h3>
                                            <div class="stars">
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                            </div>
                                            <div class="location">
                                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                                Thành phố Vũng tàu
                                            </div>
                                            <div class="ranking">
                                                <i class="fa fa-umbrella" aria-hidden="true">
                                                    8.8</i>
                                                Rất tốt (1257 đánh giá)
                                            </div>
                                            <div class="just-order">
                                                Vừa được đặt 4 giờ trước
                                            </div>
                                            <div class="price-plash">
                                                <span class="old-price">2.421.335 ₫</span>
                                                <span class="news-price">2.212.606 ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-plash col-md-3">
                                        <div class="img-plash">
                                            <img src="https://img.tripi.vn/cdn-cgi/image/width=548,height=310/https://www.googleapis.com/download/storage/v1/b/tourcdn/o/photos%2FBZ1O6VKR21_%2Ftmp%2Fplaytemp8992226862162980543%2FmultipartBody8889052234719766714asTemporaryFile?generation=1595488423270831&alt=media"
                                                 alt="">
                                            <div class="discount">
                                                <span>-15%</span>
                                            </div>
                                            <div class="heart-plash">
                                                <i class="fa-solid fa-heart"></i>
                                            </div>
                                        </div>
                                        <div class="title-plash">
                                            <h3>Khách sạn Imperial Vũng Tàu</h3>
                                            <div class="stars">
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                            </div>
                                            <div class="location">
                                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                                Thành phố Vũng tàu
                                            </div>
                                            <div class="ranking">
                                                <i class="fa fa-umbrella" aria-hidden="true">
                                                    8.8</i>
                                                Rất tốt (1257 đánh giá)
                                            </div>
                                            <div class="just-order">
                                                Vừa được đặt 4 giờ trước
                                            </div>
                                            <div class="price-plash">
                                                <span class="old-price">2.421.335 ₫</span>
                                                <span class="news-price">2.212.606 ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-plash col-md-3">
                                        <div class="img-plash">
                                            <img src="https://img.tripi.vn/cdn-cgi/image/width=548,height=310/https://www.googleapis.com/download/storage/v1/b/tourcdn/o/photos%2FBZ1O6VKR21_%2Ftmp%2Fplaytemp8992226862162980543%2FmultipartBody8889052234719766714asTemporaryFile?generation=1595488423270831&alt=media"
                                                 alt="">
                                            <div class="discount">
                                                <span>-15%</span>
                                            </div>
                                            <div class="heart-plash">
                                                <i class="fa-solid fa-heart"></i>
                                            </div>
                                        </div>
                                        <div class="title-plash">
                                            <h3>Khách sạn Imperial Vũng Tàu</h3>
                                            <div class="stars">
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                            </div>
                                            <div class="location">
                                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                                Thành phố Vũng tàu
                                            </div>
                                            <div class="ranking">
                                                <i class="fa fa-umbrella" aria-hidden="true">
                                                    8.8</i>
                                                Rất tốt (1257 đánh giá)
                                            </div>
                                            <div class="just-order">
                                                Vừa được đặt 4 giờ trước
                                            </div>
                                            <div class="price-plash">
                                                <span class="old-price">2.421.335 ₫</span>
                                                <span class="news-price">2.212.606 ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-plash col-md-3">
                                        <div class="img-plash">
                                            <img src="https://img.tripi.vn/cdn-cgi/image/width=548,height=310/https://www.googleapis.com/download/storage/v1/b/tourcdn/o/photos%2FBZ1O6VKR21_%2Ftmp%2Fplaytemp8992226862162980543%2FmultipartBody8889052234719766714asTemporaryFile?generation=1595488423270831&alt=media"
                                                 alt="">
                                            <div class="discount">
                                                <span>-15%</span>
                                            </div>
                                            <div class="heart-plash">
                                                <i class="fa-solid fa-heart"></i>
                                            </div>
                                        </div>
                                        <div class="title-plash">
                                            <h3>Khách sạn Imperial Vũng Tàu</h3>
                                            <div class="stars">
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                                <i class="fa-solid fa-star" style="color: #ecf000;"></i>
                                            </div>
                                            <div class="location">
                                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                                Thành phố Vũng tàu
                                            </div>
                                            <div class="ranking">
                                                <i class="fa fa-umbrella" aria-hidden="true">
                                                    8.8</i>
                                                Rất tốt (1257 đánh giá)
                                            </div>
                                            <div class="just-order">
                                                Vừa được đặt 4 giờ trước
                                            </div>
                                            <div class="price-plash">
                                                <span class="old-price">2.421.335 ₫</span>
                                                <span class="news-price">2.212.606 ₫</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-two-panel" class="panel ">
                                Tab two content
                            </div>
                            <div id="tab-three-panel" class="panel ">
                                Tab three content
                            </div>
                            <div id="tab-four-panel" class="panel ">
                                Tab four content
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="top-brands ">
            <div class="container">
                <div class="header-brands">
                    <div class="row">
                        <div class="col-md-6 left-header-brands">
                            <img src="https://gcs.tripi.vn/tripi-assets/mytour/icons/icon_mytour_mall_red.svg" alt="">
                            <p>Những chuyến bay giá tốt nhất trong tháng khởi hành từ Hà Nội</p>
                        </div>
                        <div class="col-md-6 discover">
                            <a href="#">Khám phá ngay</a>
                        </div>
                    </div>
                </div>
                <div class="slider-brands single-item ">
                    <div class="content-item">
                        <div class="row">
                            <div class="col-md-3 brands-item">
                                <div class="item">
                                    <img src="https://img.tripi.vn/cdn-cgi/image/width=840,height=1170/https://gcs.tripi.vn/hms_prod/photo/thumb/1617794135929ad/muong-thanh-phu-quoc.jpg">
                                    <h2>Chỉ từ 270k/người</h2>
                                    <div class="logo-brands">
                                        <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/hms_prod/photo/img/1617079110329Fj/silverland.png"
                                             alt="">
                                    </div>
                                    <div class="caption">
                                        <p>. Bao trọn bữa sáng</p>
                                        <p>. Khách sạn bán chạy nhất</p>
                                        <p>. Phong cách đa dạng, phù hợp mới mọi sở thích</p>
                                        <p>. Đảm bảo giá tốt nhất</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 brands-item">
                                <div class="item">
                                    <img src="https://img.tripi.vn/cdn-cgi/image/width=840,height=590/https://gcs.tripi.vn/hms_prod/photo/thumb/1617346357799Py/meliaaa.jpg">
                                    <h2>Chỉ từ 270k/người</h2>
                                    <div class="logo-brands">
                                        <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/hms_prod/photo/img/1617079110329Fj/silverland.png"
                                             alt="">
                                    </div>
                                    <div class="caption">
                                        <p>. Nghỉ dưỡng ngắn ngày chuẩn 5 sao</p>
                                        <p>. Bao trọn bữa sáng</p>
                                        <p>. Tiện nghi đa dạng</p>
                                        <p>. Nghỉ dưỡng kết hợp với công tác</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="https://img.tripi.vn/cdn-cgi/image/width=840,height=590/https://gcs.tripi.vn/hms_prod/photo/thumb/1617161509388zz/an.jpg">
                                    <h2>Chỉ từ 270k/người</h2>
                                    <div class="logo-brands">
                                        <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/hms_prod/photo/img/1617079110329Fj/silverland.png"
                                             alt="">
                                    </div>
                                    <div class="caption">
                                        <p>. Trái tim phố cổ Hội An</p>
                                        <p>. Bữa sáng không gian mở</p>
                                        <p>. Phù hợp với du lịch lưu trú</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 brands-item">
                                <div class="item">
                                    <img src="https://img.tripi.vn/cdn-cgi/image/width=840,height=1170/https://gcs.tripi.vn/hms_prod/photo/thumb/1617794135929ad/muong-thanh-phu-quoc.jpg">
                                    <h2>Chỉ từ 270k/người</h2>
                                    <div class="logo-brands">
                                        <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/hms_prod/photo/img/1617079110329Fj/silverland.png"
                                             alt="">
                                    </div>
                                    <div class="caption">
                                        <p>. Bao trọn bữa sáng</p>
                                        <p>. Khách sạn bán chạy nhất</p>
                                        <p>. Phong cách đa dạng, phù hợp mới mọi sở thích</p>
                                        <p>. Đảm bảo giá tốt nhất</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 brands-item">
                                <div class="item">
                                    <img src="https://img.tripi.vn/cdn-cgi/image/width=840,height=590/https://gcs.tripi.vn/hms_prod/photo/thumb/1617346357799Py/meliaaa.jpg">
                                    <h2>Chỉ từ 270k/người</h2>
                                    <div class="logo-brands">
                                        <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/hms_prod/photo/img/1617079110329Fj/silverland.png"
                                             alt="">
                                    </div>
                                    <div class="caption">
                                        <p>. Nghỉ dưỡng ngắn ngày chuẩn 5 sao</p>
                                        <p>. Bao trọn bữa sáng</p>
                                        <p>. Tiện nghi đa dạng</p>
                                        <p>. Nghỉ dưỡng kết hợp với công tác</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="https://img.tripi.vn/cdn-cgi/image/width=840,height=590/https://gcs.tripi.vn/hms_prod/photo/thumb/1617161509388zz/an.jpg">
                                    <h2>Chỉ từ 270k/người</h2>
                                    <div class="logo-brands">
                                        <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/hms_prod/photo/img/1617079110329Fj/silverland.png"
                                             alt="">
                                    </div>
                                    <div class="caption">
                                        <p>. Trái tim phố cổ Hội An</p>
                                        <p>. Bữa sáng không gian mở</p>
                                        <p>. Phù hợp với du lịch lưu trú</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="content-item">
                        <div class="row">
                            <div class="col-md-3 brands-item">
                                <div class="item">
                                    <img src="https://img.tripi.vn/cdn-cgi/image/width=840,height=1170/https://gcs.tripi.vn/hms_prod/photo/thumb/1617794135929ad/muong-thanh-phu-quoc.jpg">
                                    <h2>Chỉ từ 270k/người</h2>
                                    <div class="logo-brands">
                                        <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/hms_prod/photo/img/1617079110329Fj/silverland.png"
                                             alt="">
                                    </div>
                                    <div class="caption">
                                        <p>. Bao trọn bữa sáng</p>
                                        <p>. Khách sạn bán chạy nhất</p>
                                        <p>. Phong cách đa dạng, phù hợp mới mọi sở thích</p>
                                        <p>. Đảm bảo giá tốt nhất</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 brands-item">
                                <div class="item">
                                    <img src="https://img.tripi.vn/cdn-cgi/image/width=840,height=590/https://gcs.tripi.vn/hms_prod/photo/thumb/1617346357799Py/meliaaa.jpg">
                                    <h2>Chỉ từ 270k/người</h2>
                                    <div class="logo-brands">
                                        <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/hms_prod/photo/img/1617079110329Fj/silverland.png"
                                             alt="">
                                    </div>
                                    <div class="caption">
                                        <p>. Nghỉ dưỡng ngắn ngày chuẩn 5 sao</p>
                                        <p>. Bao trọn bữa sáng</p>
                                        <p>. Tiện nghi đa dạng</p>
                                        <p>. Nghỉ dưỡng kết hợp với công tác</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="https://img.tripi.vn/cdn-cgi/image/width=840,height=590/https://gcs.tripi.vn/hms_prod/photo/thumb/1617161509388zz/an.jpg">
                                    <h2>Chỉ từ 270k/người</h2>
                                    <div class="logo-brands">
                                        <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/hms_prod/photo/img/1617079110329Fj/silverland.png"
                                             alt="">
                                    </div>
                                    <div class="caption">
                                        <p>. Trái tim phố cổ Hội An</p>
                                        <p>. Bữa sáng không gian mở</p>
                                        <p>. Phù hợp với du lịch lưu trú</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 brands-item">
                                <div class="item">
                                    <img src="https://img.tripi.vn/cdn-cgi/image/width=840,height=1170/https://gcs.tripi.vn/hms_prod/photo/thumb/1617794135929ad/muong-thanh-phu-quoc.jpg">
                                    <h2>Chỉ từ 270k/người</h2>
                                    <div class="logo-brands">
                                        <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/hms_prod/photo/img/1617079110329Fj/silverland.png"
                                             alt="">
                                    </div>
                                    <div class="caption">
                                        <p>. Bao trọn bữa sáng</p>
                                        <p>. Khách sạn bán chạy nhất</p>
                                        <p>. Phong cách đa dạng, phù hợp mới mọi sở thích</p>
                                        <p>. Đảm bảo giá tốt nhất</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 brands-item">
                                <div class="item">
                                    <img src="https://img.tripi.vn/cdn-cgi/image/width=840,height=590/https://gcs.tripi.vn/hms_prod/photo/thumb/1617346357799Py/meliaaa.jpg">
                                    <h2>Chỉ từ 270k/người</h2>
                                    <div class="logo-brands">
                                        <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/hms_prod/photo/img/1617079110329Fj/silverland.png"
                                             alt="">
                                    </div>
                                    <div class="caption">
                                        <p>. Nghỉ dưỡng ngắn ngày chuẩn 5 sao</p>
                                        <p>. Bao trọn bữa sáng</p>
                                        <p>. Tiện nghi đa dạng</p>
                                        <p>. Nghỉ dưỡng kết hợp với công tác</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="https://img.tripi.vn/cdn-cgi/image/width=840,height=590/https://gcs.tripi.vn/hms_prod/photo/thumb/1617161509388zz/an.jpg">
                                    <h2>Chỉ từ 270k/người</h2>
                                    <div class="logo-brands">
                                        <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/hms_prod/photo/img/1617079110329Fj/silverland.png"
                                             alt="">
                                    </div>
                                    <div class="caption">
                                        <p>. Trái tim phố cổ Hội An</p>
                                        <p>. Bữa sáng không gian mở</p>
                                        <p>. Phù hợp với du lịch lưu trú</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="content-item">
                        <div class="row">
                            <div class="col-md-3 brands-item">
                                <div class="item">
                                    <img src="https://img.tripi.vn/cdn-cgi/image/width=840,height=1170/https://gcs.tripi.vn/hms_prod/photo/thumb/1617794135929ad/muong-thanh-phu-quoc.jpg">
                                    <h2>Chỉ từ 270k/người</h2>
                                    <div class="logo-brands">
                                        <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/hms_prod/photo/img/1617079110329Fj/silverland.png"
                                             alt="">
                                    </div>
                                    <div class="caption">
                                        <p>. Bao trọn bữa sáng</p>
                                        <p>. Khách sạn bán chạy nhất</p>
                                        <p>. Phong cách đa dạng, phù hợp mới mọi sở thích</p>
                                        <p>. Đảm bảo giá tốt nhất</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 brands-item">
                                <div class="item">
                                    <img src="https://img.tripi.vn/cdn-cgi/image/width=840,height=590/https://gcs.tripi.vn/hms_prod/photo/thumb/1617346357799Py/meliaaa.jpg">
                                    <h2>Chỉ từ 270k/người</h2>
                                    <div class="logo-brands">
                                        <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/hms_prod/photo/img/1617079110329Fj/silverland.png"
                                             alt="">
                                    </div>
                                    <div class="caption">
                                        <p>. Nghỉ dưỡng ngắn ngày chuẩn 5 sao</p>
                                        <p>. Bao trọn bữa sáng</p>
                                        <p>. Tiện nghi đa dạng</p>
                                        <p>. Nghỉ dưỡng kết hợp với công tác</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="https://img.tripi.vn/cdn-cgi/image/width=840,height=590/https://gcs.tripi.vn/hms_prod/photo/thumb/1617161509388zz/an.jpg">
                                    <h2>Chỉ từ 270k/người</h2>
                                    <div class="logo-brands">
                                        <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/hms_prod/photo/img/1617079110329Fj/silverland.png"
                                             alt="">
                                    </div>
                                    <div class="caption">
                                        <p>. Trái tim phố cổ Hội An</p>
                                        <p>. Bữa sáng không gian mở</p>
                                        <p>. Phù hợp với du lịch lưu trú</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 brands-item">
                                <div class="item">
                                    <img src="https://img.tripi.vn/cdn-cgi/image/width=840,height=1170/https://gcs.tripi.vn/hms_prod/photo/thumb/1617794135929ad/muong-thanh-phu-quoc.jpg">
                                    <h2>Chỉ từ 270k/người</h2>
                                    <div class="logo-brands">
                                        <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/hms_prod/photo/img/1617079110329Fj/silverland.png"
                                             alt="">
                                    </div>
                                    <div class="caption">
                                        <p>. Bao trọn bữa sáng</p>
                                        <p>. Khách sạn bán chạy nhất</p>
                                        <p>. Phong cách đa dạng, phù hợp mới mọi sở thích</p>
                                        <p>. Đảm bảo giá tốt nhất</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 brands-item">
                                <div class="item">
                                    <img src="https://img.tripi.vn/cdn-cgi/image/width=840,height=590/https://gcs.tripi.vn/hms_prod/photo/thumb/1617346357799Py/meliaaa.jpg">
                                    <h2>Chỉ từ 270k/người</h2>
                                    <div class="logo-brands">
                                        <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/hms_prod/photo/img/1617079110329Fj/silverland.png"
                                             alt="">
                                    </div>
                                    <div class="caption">
                                        <p>. Nghỉ dưỡng ngắn ngày chuẩn 5 sao</p>
                                        <p>. Bao trọn bữa sáng</p>
                                        <p>. Tiện nghi đa dạng</p>
                                        <p>. Nghỉ dưỡng kết hợp với công tác</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="https://img.tripi.vn/cdn-cgi/image/width=840,height=590/https://gcs.tripi.vn/hms_prod/photo/thumb/1617161509388zz/an.jpg">
                                    <h2>Chỉ từ 270k/người</h2>
                                    <div class="logo-brands">
                                        <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/hms_prod/photo/img/1617079110329Fj/silverland.png"
                                             alt="">
                                    </div>
                                    <div class="caption">
                                        <p>. Trái tim phố cổ Hội An</p>
                                        <p>. Bữa sáng không gian mở</p>
                                        <p>. Phù hợp với du lịch lưu trú</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="favorite-destination">
            <div class="container">
                <div class="title-favorite">
                    <p>Điểm đến yêu thích</p>
                    <span> Địa điểm hot nhất do Mytour đề xuất</span>
                </div>
                <div class="content-favorite">
                    <div class="a1">
                        <div style="width: 100%;height: 100%; position: relative">
                            <a href="#">
                                <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/tripi-assets/mytour/images/locations/phu-quoc.png"
                                     alt="">
                            </a>
                            <h2>Phú Quốc</h2>
                        </div>
                    </div>
                    <div class="a2">
                        <div style="width: 100%;height: 100%; position: relative">
                            <a href="#">
                                <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/tripi-assets/mytour/images/locations/nha-trang.png"
                                     alt="">
                            </a>
                            <h2>Nha Trang</h2>
                        </div>
                    </div>
                    <div class="a3">
                        <div style="width: 100%;height: 100%; position: relative">
                            <a href="#">
                                <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/tripi-assets/mytour/images/locations/vung-tau.png"
                                     alt=""> </a>
                            <h2>Vũng tàu</h2>
                        </div>
                    </div>
                    <div class="a4">
                        <div style="width: 100%;height: 100%; position: relative">
                            <a href="#">
                                <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/tripi-assets/mytour/images/locations/da-lat.png"
                                     alt=""> </a>
                            <h2>Đà lạt</h2>
                        </div>
                    </div>
                    <div class="a5">
                        <div style="width: 100%;height: 100%; position: relative">
                            <a href="#">
                                <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/tripi-assets/mytour/images/locations/danang.png"
                                     alt=""> </a>
                            <h2>Đà nẵng</h2>
                        </div>
                    </div>
                    <div class="a6">
                        <div style="width: 100%;height: 100%; position: relative">
                            <a href="#">
                                <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/tripi-assets/mytour/images/locations/phan-thiet.png"
                                     alt=""> </a>
                            <h2>Phan thiết</h2>
                        </div>
                    </div>
                    <div class="a7">
                        <div style="width: 100%;height: 100%; position: relative">
                            <a href="#">
                                <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/tripi-assets/mytour/images/locations/ha-long.png"
                                     alt=""> </a>
                            <h2>Hạ long</h2>
                        </div>
                    </div>
                    <div class="a8">
                        <div style="width: 100%;height: 100%; position: relative">
                            <a href="#">
                                <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/tripi-assets/mytour/images/locations/hochiminh.png"
                                     alt=""> </a>
                            <h2>Hồ chí minh</h2>
                        </div>
                    </div>
                    <div class="a9">
                        <div style="width: 100%;height: 100%; position: relative">
                            <a href="#">
                                <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/tripi-assets/mytour/images/locations/sa-pa.png"
                                     alt=""> </a>
                            <h2>Sa-pa</h2>
                        </div>
                    </div>
                    <div class="a10">
                        <div style="width: 100%;height: 100%; position: relative">
                            <a href="#">
                                <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/tripi-assets/mytour/images/locations/hoi-an.png"
                                     alt=""> </a>
                            <h2>Hội an</h2>
                        </div>
                    </div>
                    <div class="a11">
                        <div style="width: 100%;height: 100%; position: relative">
                            <a href="#">
                                <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/tripi-assets/mytour/images/locations/hanoi.png"
                                     alt=""> </a>
                            <h2>Hà nội</h2>
                        </div>
                    </div>
                    <div class="a12">
                        <div style="width: 100%;height: 100%; position: relative">
                            <a href="#">
                                <img src="https://img.tripi.vn/cdn-cgi/image/width=640,height=640/https://gcs.tripi.vn/tripi-assets/mytour/images/locations/hai-phong.png"
                                     alt=""> </a>
                            <h2>Hải phòng</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 utilities">
                        <h2>Tải ứng dụng Mytour.vn</h2>
                        <div style="display: block">
                            <p> Đặt vé máy bay, khách sạn hạng sang</p>
                            <p>
                                <i class="fa-regular fa-circle-check"></i>
                                Giá tốt hơn với đặt phòng trực tiếp tại khách sạn
                            </p>
                            <p>
                                <i class="fa-regular fa-circle-check"></i>
                                Nhân viên chăm sóc, tư vấn nhiều kinh nghiệm
                            </p>
                            <p>
                                <i class="fa-regular fa-circle-check"></i>
                                Hơn 5000 khách sạn tại Việt Nam với đánh giá thực
                            </p>
                            <p>
                                <i class="fa-regular fa-circle-check"></i>
                                Nhiều chương trình khuyến mãi và tích lũy điểm
                            </p>
                            <p>
                                <i class="fa-regular fa-circle-check"></i>
                                Thanh toán dễ dàng, đa dạng
                            </p>
                        </div>
                    </div>
                    <div class="col-md-7" style="position: relative">
                        <div style="width: 20rem;display: flex;position: absolute;padding-top: 20%">
                        <span>
                        <img src="https://gcs.tripi.vn/tripi-assets/mytour/icons/icon_QR_code.png" alt=""> </span>
                            <div>
                        <span>
                            <img src="https://gcs.tripi.vn/tripi-assets/mytour/icons/icon_app_store.svg" alt="">
                            </span>
                                <span>
                        <img src="https://gcs.tripi.vn/tripi-assets/mytour/icons/icon_chplay.svg" alt="">
                            </span>
                            </div>
                        </div>
                        <img style="position: absolute;width: 100%; height: 100%"
                             src="https://gcs.tripi.vn/public-tripi/mytour-web/big_icon_mytour.png" alt="">
                        <img style="position: absolute;margin-top: -5rem ; right: 0"
                             src="https://gcs.tripi.vn/public-tripi/mytour-web/app_mytour_banner.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="best-service">

            <div class="list-group" id="myList" role="tablist">
                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab">Các
                    khách sạn hàng đầu</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab">Các chặng
                    bay </a>
            </div>


            <div class="tab-content container">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="row">
                        <div class="col-md-2">
                            <ul>
                                <li>Thừa Thiên-Huế</li>
                                <li>Nghệ An</li>
                                <li>Quảng Ngãi</li>
                                <li>Cao Bằng</li>
                                <li>Hà Giang</li>
                                <li>Long An</li>
                                <li>Vĩnh Long</li>
                                <li>Khánh Hòa</li>
                                <li>Phú Thọ</li>
                                <li>Thái Nguyên</li>
                                <li>Nam Định</li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <ul>
                                <li>Thừa Thiên-Huế</li>
                                <li>Nghệ An</li>
                                <li>Quảng Ngãi</li>
                                <li>Cao Bằng</li>
                                <li>Hà Giang</li>
                                <li>Long An</li>
                                <li>Vĩnh Long</li>
                                <li>Khánh Hòa</li>
                                <li>Phú Thọ</li>
                                <li>Thái Nguyên</li>
                                <li>Nam Định</li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <ul>
                                <li>Thừa Thiên-Huế</li>
                                <li>Nghệ An</li>
                                <li>Quảng Ngãi</li>
                                <li>Cao Bằng</li>
                                <li>Hà Giang</li>
                                <li>Long An</li>
                                <li>Vĩnh Long</li>
                                <li>Khánh Hòa</li>
                                <li>Phú Thọ</li>
                                <li>Thái Nguyên</li>
                                <li>Nam Định</li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <ul>
                                <li>Thừa Thiên-Huế</li>
                                <li>Nghệ An</li>
                                <li>Quảng Ngãi</li>
                                <li>Cao Bằng</li>
                                <li>Hà Giang</li>
                                <li>Long An</li>
                                <li>Vĩnh Long</li>
                                <li>Khánh Hòa</li>
                                <li>Phú Thọ</li>
                                <li>Thái Nguyên</li>
                                <li>Nam Định</li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <ul>
                                <li>Thừa Thiên-Huế</li>
                                <li>Nghệ An</li>
                                <li>Quảng Ngãi</li>
                                <li>Cao Bằng</li>
                                <li>Hà Giang</li>
                                <li>Long An</li>
                                <li>Vĩnh Long</li>
                                <li>Khánh Hòa</li>
                                <li>Phú Thọ</li>
                                <li>Thái Nguyên</li>
                                <li>Nam Định</li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <ul>
                                <li>Thừa Thiên-Huế</li>
                                <li>Nghệ An</li>
                                <li>Quảng Ngãi</li>
                                <li>Cao Bằng</li>
                                <li>Hà Giang</li>
                                <li>Long An</li>
                                <li>Vĩnh Long</li>
                                <li>Khánh Hòa</li>
                                <li>Phú Thọ</li>
                                <li>Thái Nguyên</li>
                                <li>Nam Định</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="profile" role="tabpanel">
                    <div class="row">
                        <div class="col-md-3">
                            <ul>
                                <li>Vé may bay đến Hồ Chí Minh</li>
                                <li>Vé may bay đến Hà Nội</li>
                                <li>Vé may bay đến Đà Nẵng</li>
                                <li>Vé may bay đến Thành phố Vinh</li>
                                <li>Vé may bay đến Nha Trang</li>
                                <li>Vé may bay đến Hải Phòng</li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul>
                                <li>Vé may bay đến Hồ Chí Minh</li>
                                <li>Vé may bay đến Hà Nội</li>
                                <li>Vé may bay đến Đà Nẵng</li>
                                <li>Vé may bay đến Thành phố Vinh</li>
                                <li>Vé may bay đến Nha Trang</li>
                                <li>Vé may bay đến Hải Phòng</li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul>
                                <li>Vé may bay đến Hồ Chí Minh</li>
                                <li>Vé may bay đến Hà Nội</li>
                                <li>Vé may bay đến Đà Nẵng</li>
                                <li>Vé may bay đến Thành phố Vinh</li>
                                <li>Vé may bay đến Nha Trang</li>
                                <li>Vé may bay đến Hải Phòng</li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul>
                                <li>Vé may bay đến Hồ Chí Minh</li>
                                <li>Vé may bay đến Hà Nội</li>
                                <li>Vé may bay đến Đà Nẵng</li>
                                <li>Vé may bay đến Thành phố Vinh</li>
                                <li>Vé may bay đến Nha Trang</li>
                                <li>Vé may bay đến Hải Phòng</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection

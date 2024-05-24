<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/50aa519b67.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.14.2/daterangepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="{{asset('js/jquery.easypiechart.min.js')}}"></script>
    <script src="https://d3js.org/d3.v3.min.js"  charset="utf-8"></script>
{{--    daterange--}}

    <title>Document</title>
</head>
<body>
<section class="header">
    <div class="top-header row">
        <div class="logo col-md-2">
            <a href="#">
                <img src="https://storage.googleapis.com/tripi-assets/mytour/icons/icon_logo_mytour_red_medium.svg"
                     alt="">
            </a>
        </div>
        <div class="top-header-right col-md-9">
            <div class="row">
                <div class="col-md-1">
                    <i class="fas fa-percent"></i>
                    Ưu đãi
                </div>
                <div class="col-md-2">
                    <i class="fas fa-gift"></i>
                    Giới thiệu nhận quà
                </div>
                <div class="col-md-2">
                    <i class="far fa-handshake"></i>
                    Hợp tác với chúng tôi
                </div>
                <div class="col-md-2">
                    <i class="fas fa-shopping-bag"></i>
                    Khách hàng doanh nghiệp
                </div>
                <div class="col-md-1">
                    <i class="fas fa-clipboard-list"></i>
                    Đơn hàng
                </div>
                <div class="col-md-1 d-flex">
                    <div class="flag">
                        <img src="image/vietnam.svg" alt="" style="height: 25px; border-radius:25% ">
                        VNĐ
                    </div>

                    <i style="width: 50%; text-align:end; padding-top: 0.5rem" class="far fa-bell"></i>
                </div>
                <div class="col-md-3 d-flex" style="width: 100%">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <a href="{{route('logout')}}" style="width: 50%">
                            <button type="button" class="btn btn-primary"
                                    style="font-size: 14px;background-color: #FF3366; font-weight: 500;border: none">Đăng
                                Xuất
                            </button>
                        </a>

                        <div class="info-user" style="width: 50%">
                            <div class="dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-regular fa-user"></i>
                                </button>
                                <div class="dropdown-menu" style="font-size: 1.25rem;border-radius: 8px" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{route('user')}}">Tài Khoản</a>
                                    <a class="dropdown-item" href="{{route('records')}}">Quản lý tài khoản</a>
                                    <a class="dropdown-item" href="#">Thêm tour</a>
                                    <a class="dropdown-item" href="#">Thêm khách sạn</a>
                                    <a class="dropdown-item" href="#">Đơn phòng</a>
                                    <a class="dropdown-item" href="#">Tour đã book</a>
                                </div>
                            </div>
                        </div>

                    @endif
                    @if(!\Illuminate\Support\Facades\Auth::check())
                            <a href="{{route('login')}}" style="width: 50%">
                                <button type="button" class="btn btn-primary"
                                        style="font-size: 14px;background-color: #FF3366; font-weight: 500;border: none">Đăng
                                    nhập
                                </button>
                            </a>
                            <a href="{{route('register')}}" style="width: 50%">
                                <button type="button" class="btn btn-outline-dark"
                                        style="font-size: 14px;color: #FF3366;font-weight: 500; border: 1px solid #FF3366">Đăng
                                    ký
                                </button>
                            </a>
                    @endif

                </div>

            </div>
        </div>
        <div class="col-md-1">
             <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
        </svg>
      </a>
    </span>
        </div>
    </div>
    <div class="menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="#">Khách sạn</a>
                    <a class="nav-item nav-link" href="#">Vé máy bay</a>
                    <a class="nav-item nav-link" href="#">Biệt thự, Homestay</a>
                    <a class="nav-item nav-link " href="#">Top thương hiệu</a>
                    <a class="nav-item nav-link " href="#">Nhà hàng</a>
                    <a class="nav-item nav-link" href="#">Tour & Sự kiện</a>
                </div>
            </div>
        </nav>
    </div>

</section>

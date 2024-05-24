@extends('layout.main')
@section('content')
    <div class="container details-hotel">
        @php
            $images= explode('|',$data_detail->library_images)
        @endphp
        <div class="title-hotel">
            {{$data_detail->item}}
        </div>
        <div class="rate-star">
            <svg width="14" height="14" fill="none" class="svgFillAll jss205" style="stroke:#FFBC39;fill:#FFBC39"><path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path></svg>
            <svg width="14" height="14" fill="none" class="svgFillAll jss205" style="stroke:#FFBC39;fill:#FFBC39"><path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path></svg>
            <svg width="14" height="14" fill="none" class="svgFillAll jss205" style="stroke:#FFBC39;fill:#FFBC39"><path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path></svg>
            <svg width="14" height="14" fill="none" class="svgFillAll jss205" style="stroke:#FFBC39;fill:#FFBC39"><path d="M12.464 5.684a1.055 1.055 0 00-.849-.719L9.078 4.6 7.94 2.31a1.05 1.05 0 00-1.88 0L4.925 4.598l-2.536.367a1.057 1.057 0 00-.87 1.292c.047.191.148.365.29.502L3.64 8.534l-.433 2.51a1.05 1.05 0 001.521 1.107l2.272-1.188 2.273 1.19a1.05 1.05 0 001.522-1.108l-.435-2.51 1.832-1.776a1.05 1.05 0 00.271-1.075z" fill="#FFBC39"></path></svg>
        </div>
        <div class="evaluate">
            <i class="fa fa-umbrella" aria-hidden="true">
                8.8</i>
            Rất tốt (38 đánh giá) <a href="#">Xem đánh giá</a>
        </div>
        <div class="address-hotel">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            {{$data_detail->address}}
            <a href="#">Xem bản đồ</a>
        </div>
        <div class="price-hotel">
            <i class="fa fa-money" aria-hidden="true"></i>
            {{$data_detail->price_sale}}
        </div>
        <div class="slide-hotel">
            <div class="video-slider">
                <video height="336px" type="video/mp4" loop="" muted="" autoplay=""><source src="https://teaser.hn.ss.bfcplatform.vn/594_MYTOUR.mp4">Your browser does not support the video tag.</video>
            </div>
         
          
            @foreach($images as $item)
                <div class="img-slider" style="width: 100%; height: 100%; position: relative; ">
                    <img style="top: 0; left:0; width:100%; height:100%; position:absolute;object-fit:cover;"  src="{{\Illuminate\Support\Facades\Storage::url($item)}}" alt="">
                </div>
             @endforeach
                 
         
        
        </div>
        <div class="rating row">
                <div class="col-md-1 pie-chart">
                    <div class="percentage" data-percent="71"></div>
                    <div class="rate-title">
                        <span class="rate-number">8.2</span>
                        <span>Rất tốt</span>
                    </div>
                </div>
                <div class="col-md-3 rate-detail">
                    <div class="rate-location">
                        <span>Vị trí</span>
                        <div class="bar-chart primary" data-total="90" animated>
                            <span class="bar-chart--inner" style="width:76%;"></span>
                        </div>
                    </div>
                    <div class="rate-price">
                        <span>Giá cả</span>
                        <div class="bar-chart primary" data-total="90" animated>
                            <span class="bar-chart--inner" style="width:76%;"></span>
                        </div>
                    </div>
                    <div class="rate-serve">
                        <span>Phục vụ</span>
                        <div class="bar-chart primary" data-total="90" animated>
                            <span class="bar-chart--inner" style="width:76%;"></span>
                        </div>
                    </div>
                    <div class="rate-environmen">
                        <span>Vệ sinh</span>
                        <div class="bar-chart primary" data-total="90" animated>
                            <span class="bar-chart--inner" style="width:76%;"></span>
                        </div>
                    </div>
                    <div class="rate-convenient">
                        <span>Tiện nghi</span>
                        <div class="bar-chart primary" data-total="90" animated>
                            <span class="bar-chart--inner" style="width:76%;"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 convenient">
                        <span class="title-convenient">
                            Tân sơn nhất Hotel
                        </span>
                        <div class="img-convenient">
                            <svg width="32" height="32" fill="none"><path d="M24.744 5.243a6.59 6.59 0 100 13.177c.501-.002 1-.065 1.487-.188a.333.333 0 01.368.49 9.106 9.106 0 01-7.838 4.698 1.667 1.667 0 000 3.333 12.947 12.947 0 0012.571-13.266V11.83a6.596 6.596 0 00-6.588-6.588zM8.314 5.243a6.59 6.59 0 000 13.177c.501-.002 1-.065 1.487-.188a.333.333 0 01.369.49 9.107 9.107 0 01-7.837 4.698 1.667 1.667 0 100 3.333 12.948 12.948 0 0012.57-13.266V11.83a6.596 6.596 0 00-6.589-6.588z" fill="#EAEFF4"></path></svg>
                        </div>
                        <span class="content-convenient">
                            Khách sạn vip, sạch đẹp,yên tĩnh, tiện nghi, wifi mạnh
                        </span>
                </div>
                <div class="col-md-4 slider">
                </div>
        </div>
        <div class="utilities-hotel row">
            <div class="col-md-8 maps">
                <div class="title">
                    Địa điểm nổi bật
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d251637.95196238213!2d105.6189045!3d9.779349!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1705485736679!5m2!1svi!2s" width="100%" height="150px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               <span><i class="fa fa-map-marker" aria-hidden="true"></i>
                202, Hoàng Văn Thụ, Quận Phú Nhận, Hồ Chí Minh, Việt Nam
               </span>
            </div>
            <div class="col-md-4 utilities-icon">
                <div class="title">
                    Tiện nghi khách sạn
                </div>
                <div class="icon row">
                    <div class="col-md-3">
                        <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/thethao/gym.png" alt="">
                        <span> Thể thao</span>
                    </div>
                    <div class="col-md-3">
                        <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/thethao/gym.png" alt="">
                        <span> Phòng gym</span>
                    </div>
                    <div class="col-md-3">
                        <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/thethao/gym.png" alt="">
                        <span> Giữ hành lý</span>
                    </div>
                    <div class="col-md-3">
                        <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/thethao/gym.png" alt="">
                        <span> Giữ hành lý</span>
                    </div>
                    <div class="col-md-3">
                        <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/thethao/gym.png" alt="">
                        <span> Giữ hành lý</span>
                    </div>
                    <div class="col-md-3">
                        <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/thethao/gym.png" alt="">
                        <span> Giữ hành lý</span>
                    </div>
                    <div class="col-md-3">
                        <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/thethao/gym.png" alt="">
                        <span> Giữ hành lý</span>
                    </div>
                    <div class="col-md-3">
                        <img src="https://storage.googleapis.com/tripi-assets/images/hotels/amenities/thethao/gym.png" alt="">
                        <span> Giữ hành lý</span>
                    </div>

                </div>
            </div>
        </div>
        <div class="book-hotel">
            <span>Đặt phòng</span>
            <div class="choose-number ">
                <input class="choose-date"  type="text" name="daterange" value="01/01/2018 - 01/15/2018" />
                <div class="choose-quantity btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="adult"> <div class="number-adult">0</div> Người lớn</span>
                        <span class="children"><div class="number-children">0</div> Trẻ em</span>
                        <span class="rom"><div class="number-rom">0</div> Số phòng</span>
                    </button>

                    <ul class="dropdown-menu" style="width: calc(150% + 89px);">
                        <li>
                            <span>Người lớn</span>
                                <div class="wrapper">
                                    <div class="control" id="minus-adult">-</div>
                                    <div class="number-adult">0</div>
                                    <div class="control" id="plus-adult">+</div>
                                </div>
                        </li>
                        <li>
                            <span>Trẻ em</span>
                            <div class="wrapper">
                                <div class="control" id="minus-children">-</div>
                                <div class="number-children">0</div>
                                <div class="control" id="plus-children">+</div>
                            </div>
                        </li>
                        <li>
                            <span>Số phòng</span>
                            <div class="wrapper">
                                <div class="control" id="minus-rom">-</div>
                                <div class="number-rom">0</div>
                                <div class="control" id="plus-rom">+</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <button type="button" class="btn book">Đặt phòng</button>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('.percentage').easyPieChart({
            scaleColor: "transparent",
            lineWidth: 8,
            lineCap: 'round',
            barColor: '#FF3366',
            trackColor:	"#E2E8F0",
            size: 130,
            rotate: 2,
            animate: 1000,
        });

        var app = {
            init: function(){
                this.cacheDOM();
                this.handleCharts();
            },
            cacheDOM: function(){
                this.$chart = $(".bar-chart");
            },
            cssSelectors: {
                chartBar: "bar-chart--inner"
            },
            handleCharts: function(){
                $.each(this.$chart, function(){
                    var $this = $(this),
                        total = $this.data("total"),
                        $targetBar = $this.find("."+app.cssSelectors.chartBar);
                    $targetBar.css("width","0%"); // zero out for animation
                    setTimeout(function(){
                        $targetBar.css("width",total+"%");
                    },400);
                });
            }
        }

        app.init();
    </script>
    <script>
        $('.choose-date').daterangepicker();
        var number_adult = 0;
        $("#minus-adult").click(function(){
            number_adult -= 1;
            if (number_adult <= 0) number_adult = 0;
            setNumberAdult(number_adult);
            $(".number-adult").addClass('bounce-adult');
            removeAnimationAdult();
        });
        $("#plus-adult").click(function(){
            console.log(number_adult,1)
            number_adult += 1;
            setNumberAdult(number_adult);
            $(".number-adult").addClass('bounce-adult')
            removeAnimationAdult();
        });

        function removeAnimationAdult() {
            setTimeout(function(){
                $(".number-adult").removeClass('bounce-adult');
            }, 100);
        }

        function setNumberAdult(number_adult) {
            // $("#number").attr('data-content', number);
            $(".number-adult").text(number_adult);
        }

        var number_children= 0;
        $("#minus-children").click(function(){
            number_children -= 1;
            if (number_children <= 0) number_children = 0;
            setNumberChildren(number_children);
            $(".number-children").addClass('bounce-children');
            removeAnimationChildren();
        });
        $("#plus-children").click(function(){
            console.log(number_children,2)
            number_children += 1;
            setNumberChildren(number_children);
            $(".number-children").addClass('bounce-children')
            removeAnimationChildren();
        });

        function removeAnimationChildren() {
            setTimeout(function(){
                $(".number-children").removeClass('bounce-children');
            }, 100);
        }

        function setNumberChildren(number_children) {
            // $("#number").attr('data-content', number);
            console.log(number_children,4)
            $(".number-children").text(number_children);
        }

        var number_rom= 0;
        $("#minus-rom").click(function(){
            number_rom -= 1;
            if (number_rom <= 0) number_rom = 0;
            setNumberRom(number_rom);
            $(".number-rom").addClass('bounce-rom');
            removeAnimationRom();
        });
        $("#plus-rom").click(function(){
            console.log(number_rom,3)
            number_rom += 1;
            setNumberRom(number_rom);
            $(".number-rom").addClass('bounce-rom')
            removeAnimationRom();
        });

        function removeAnimationRom() {
            setTimeout(function(){
                $(".number-rom").removeClass('bounce-rom');
            }, 100);
        }

        function setNumberRom(number_rom) {
            // $("#number").attr('data-content', number);
            $(".number-rom").text(number_rom);
        }
    </script>
@endsection

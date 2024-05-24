<section class="footer">
    <div class="container" style="margin: 0 auto">
        <div class="contact">
            <div class="contact-form">
                <div class="row">
                    <div class="col-md-2 contact-item">
                        <img src="https://gcs.tripi.vn/tripi-assets/mytour/icons/icon_mail_red.svg" alt="">
                    </div>
                    <div class="col-md-6">
                        <div>
                            <h4 class="h4-text">Bạn muốn tiết kiệm tới 50% khi đặt phòng khách sạn, vé máy bay?</h4>
                            <p class="p-text">Nhập số điện thoại để Mytour có thể gửi đến bạn những chương trình khuyến
                                mại mới nhất</p>
                        </div>
                    </div>
                    <div class="col-md-4 contact-item">
                        <div class="wrap" style="width: 80%">
                            <div class="search">
                                <input type="text" class="searchTerm" placeholder="VD:0912346789">
                                <button type="submit" class="searchButton">
                                    Đăng ký
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="prolicy-privacy">
            <img src="https://gcs.tripi.vn/tripi-assets/mytour/icons/icon_logo_mytour_red_medium.svg" alt="">
            <div class="row">
                <div class="col-md-4">
                    <ul>
                        <li>
                            <p>Công ty cổ phần du lịch Việt Nam VNTravel</p>
                        </li>
                        <li>Tổng đài chăm sóc: 1900 2083</li>
                        <li>Email: hotro@mytour.vn</li>
                        <li>Văn phòng Hà Nội: Tầng 11, Tòa Peakview, 36 Hoàng Cầu, Đống Đa</li>
                        <li>Văn phòng HCM: Tầng 3, Tòa nhà ACM, 96 Cao Thắng, Quận 3</li>
                        <li style="display: flex">
                            <a href="#">
                                <img src="https://staticproxy.mytourcdn.com/0x0,q90/themes/images/logo-dathongbao-bocongthuong-w165.png" alt="">
                            </a>
                            <a href="#">
                                <img src="https://staticproxy.mytourcdn.com/0x0,q90/themes/images/logo-congthuong-w165.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li>
                            <p>Chính sách & quy định</p>
                        </li>
                        <li>
                            <a href="#">Điều khoản và điều kiện</a>
                        </li>
                        <li>
                            <a href="#">Quy định về thanh toán</a>
                        </li>
                        <li>
                            <a href="#">Chính sách bảo mật thông tin</a>
                        </li>
                        <li>
                            <a href="#">Quy chế hoạt động</a>
                        </li>
                        <li>
                            <a href="#">Chương trình khách hàng thân thiết</a>
                        </li>
                        <li>
                            <a href="#">Chương trình đánh giá trải nghiệm khách sạn</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        <li>
                            <p>Chính sách & quy định</p>
                        </li>
                        <li>
                            <a href="#">Điều khoản và điều kiện</a>
                        </li>
                        <li>
                            <a href="#">Đăng nhập HMS</a>
                        </li>
                        <li>
                            <a href="#">Tuyển dụng</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="information">
            <p>Mytour là thành viên của VNTravel Group - Một trong những tập đoàn đứng đầu Đông Nam Á về du lịch trực tuyến và các dịch vụ liên quan</p>
            <img src="https://gcs.tripi.vn/tripi-assets/mytour/icons/icon_company_group_l.svg" alt="" class="lazyload">
            <p>Copyright © 2020 - CÔNG TY CỔ PHẦN DU LỊCH VIỆT NAM VNTRAVEL - Đăng ký kinh doanh số 0108886908 - do Sở Kế hoạch và Đầu tư thành phố Hà Nội cấp lần đầu ngày 04 tháng 09 năm 2019</p>
        </div>
    </div>
</section>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.0/lazysizes.min.js" async=""></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="{{asset('js/script.js')}}"></script>
<script>
    $(document).ready(function (){
        $('#search').on('keyup',function () {
            let key=$(this).val();
            $.ajax({
                url:'{{ \Illuminate\Support\Facades\URL::route('search') }}',
                type:'POST',
                data:{"_token":"{{csrf_token()}}", key:key},
                success: function(data) {
                    console.log(data);
                    if(data){
                        $('#list-show').hide()
                        $('#resultSearch').html(data)
                    }
                }
            })
        })
        $('.filer-price').on('click', function (){
            var price= [];
            $('.filer-price').each(function (){
                if ($(this).is(":checked")){
                    price.push($(this).val())
                }
            })
            Finalprice = price.toString();
            $.ajax({
                url:'{{ \Illuminate\Support\Facades\URL::route('filter') }}',
                type:'POST',
                data:{"_token":"{{csrf_token()}}", Finalprice:Finalprice},
                success: function(data) {
                    if(data === ''){
                        $('#list-show').hide()
                    }else {
                        $('#list-show').hide()
                        $('#resultSearch').html(data)
                    }
                }
            })
        })
    })
</script>
</html>

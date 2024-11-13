@extends('layout.main')
@section('content')
<div class="container ">
    @php
    $images= explode('|',$detail_tour->library_images)
    @endphp
    <div class="row payment">
        <form method="post" action="{{url('/vnpay_payment')}}" style="padding-top:4rem">
            @csrf
            <input type="hidden" name="id_tour"value="{{$detail_tour->id}}">
            <div class="col-md-7">
                <div class="information-tour">
                    <div class="row">
                        <div class="col-md-4 avatar" style="padding:0">
                            <img src="{{\Illuminate\Support\Facades\Storage::url($images[0])}}" alt="">
                        </div>
                        <div class="col-md-8 info" style="padding:0">
                            <div class="info-name">
                                {{$detail_tour->title}}
                            </div>
                            <div class="info-wap">
                                <div class="date-start">
                                    <p>Ngày khởi hành:</p>
                                    <span name="date-start">{{$detail_tour->date_start}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="payment-label">
                    Tùy chọn
                    <span class="note-required">*</span>
                </div>
                <div class="payment-choose">
                    <span>Người lớn</span>
                    <div class="wrapper">
                        <div class="control" id="minus-adult" data-id="{{$detail_tour->id}}"><img src="data:image/svg+xml,%3csvg%20width='32'%20height='32'%20viewBox='0%200%2032%2032'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cg%20clip-path='url(%23clip0_5598_7152)'%3e%3cpath%20d='M16.0004%202.28564C13.288%202.28564%2010.6365%203.08997%208.38118%204.59692C6.12587%206.10386%204.36808%208.24574%203.33008%2010.7517C2.29208%2013.2577%202.02049%2016.0151%202.54966%2018.6755C3.07882%2021.3358%204.38498%2023.7794%206.30296%2025.6974C8.22094%2027.6154%2010.6646%2028.9215%2013.3249%2029.4507C15.9852%2029.9799%2018.7427%2029.7083%2021.2487%2028.6703C23.7546%2027.6323%2025.8965%2025.8745%2027.4034%2023.6192C28.9104%2021.3639%2029.7147%2018.7124%2029.7147%2015.9999C29.7111%2012.3638%2028.265%208.87762%2025.6939%206.30648C23.1227%203.73533%2019.6366%202.28928%2016.0004%202.28564Z'%20fill='%230D4C3F'/%3e%3cpath%20d='M22.0003%2017.1429H10.0003C9.69717%2017.1429%209.40648%2017.0225%209.19216%2016.8082C8.97783%2016.5938%208.85742%2016.3031%208.85742%2016C8.85742%2015.6969%208.97783%2015.4062%209.19216%2015.1919C9.40648%2014.9776%209.69717%2014.8572%2010.0003%2014.8572H22.0003C22.3034%2014.8572%2022.5941%2014.9776%2022.8084%2015.1919C23.0227%2015.4062%2023.1431%2015.6969%2023.1431%2016C23.1431%2016.3031%2023.0227%2016.5938%2022.8084%2016.8082C22.5941%2017.0225%2022.3034%2017.1429%2022.0003%2017.1429Z'%20fill='%23FAFAFA'/%3e%3c/g%3e%3cdefs%3e%3cclipPath%20id='clip0_5598_7152'%3e%3crect%20width='32'%20height='32'%20fill='white'/%3e%3c/clipPath%3e%3c/defs%3e%3c/svg%3e" alt=""></div>
                        <div class="number-adult">1</div>
                        <input name="number_adult" type="hidden" id="data-number" value="1">
                        <div class="control plus-adult" data-id="{{$detail_tour->id}}"><img src="data:image/svg+xml,%3csvg%20width='32'%20height='32'%20viewBox='0%200%2032%2032'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cg%20clip-path='url(%23clip0_5598_7144)'%3e%3cpath%20d='M16.0004%202.28564C13.288%202.28564%2010.6365%203.08997%208.38118%204.59692C6.12587%206.10386%204.36808%208.24574%203.33008%2010.7517C2.29208%2013.2577%202.02049%2016.0151%202.54966%2018.6755C3.07882%2021.3358%204.38498%2023.7794%206.30296%2025.6974C8.22094%2027.6154%2010.6646%2028.9215%2013.3249%2029.4507C15.9852%2029.9799%2018.7427%2029.7083%2021.2487%2028.6703C23.7546%2027.6323%2025.8965%2025.8745%2027.4034%2023.6192C28.9104%2021.3639%2029.7147%2018.7124%2029.7147%2015.9999C29.7111%2012.3638%2028.265%208.87762%2025.6939%206.30648C23.1227%203.73533%2019.6366%202.28928%2016.0004%202.28564Z'%20fill='%230D4C3F'/%3e%3cpath%20d='M22.0003%2017.1429H17.1431V22C17.1431%2022.3031%2017.0227%2022.5938%2016.8084%2022.8082C16.5941%2023.0225%2016.3034%2023.1429%2016.0003%2023.1429C15.6972%2023.1429%2015.4065%2023.0225%2015.1922%2022.8082C14.9778%2022.5938%2014.8574%2022.3031%2014.8574%2022V17.1429H10.0003C9.69717%2017.1429%209.40648%2017.0225%209.19216%2016.8082C8.97783%2016.5938%208.85742%2016.3031%208.85742%2016C8.85742%2015.6969%208.97783%2015.4062%209.19216%2015.1919C9.40648%2014.9776%209.69717%2014.8572%2010.0003%2014.8572H14.8574V10C14.8574%209.69693%2014.9778%209.40624%2015.1922%209.19191C15.4065%208.97759%2015.6972%208.85718%2016.0003%208.85718C16.3034%208.85718%2016.5941%208.97759%2016.8084%209.19191C17.0227%209.40624%2017.1431%209.69693%2017.1431%2010V14.8572H22.0003C22.3034%2014.8572%2022.5941%2014.9776%2022.8084%2015.1919C23.0227%2015.4062%2023.1431%2015.6969%2023.1431%2016C23.1431%2016.3031%2023.0227%2016.5938%2022.8084%2016.8082C22.5941%2017.0225%2022.3034%2017.1429%2022.0003%2017.1429Z'%20fill='%23FAFAFA'/%3e%3c/g%3e%3cdefs%3e%3cclipPath%20id='clip0_5598_7144'%3e%3crect%20width='32'%20height='32'%20fill='white'/%3e%3c/clipPath%3e%3c/defs%3e%3c/svg%3e" alt=""></div>
                    </div>

                </div>
                <div class="note-form">
                    * Hoạt động cần đăng ký tối thiểu 1 khách. Giá có thể sẽ thay đổi tùy thuộc vào số lượng khách.
                </div>
                <div class="payment-label">
                    Thông tin liên lạc
                    <span class="note-required">*</span>
                </div>
                <div class="info-contact">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Tên của bạn:</label>
                        <div class="col-sm-8">
                            <input name="reservation_name" type="text" class="form-control" id="inputName">
                            @error('reservation_name')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Ngày sinh:</label>
                        <div class="col-sm-8">
                            <input name="reservation_date" type="date" class="form-control" id="inputBirtday">
                            @error('reservation_date')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Số điện thoại:</label>
                        <div class="col-sm-8">
                            <input name="reservation_phone" type="text" class="form-control" id="inputPhone">
                            @error('reservation_phone')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Email của bạn:</label>
                        <div class="col-sm-8">
                            <input name="reservation_email" type="text" class="form-control" id="inputEmail">
                            @error('reservation_email')
                                <span style="color: red">{{$message}}</span>
                                @enderror
                        </div>
                    </div>
                </div>
                <div class="payment-label">
                    Phương thức thanh toán
                    <span class="note-required">*</span>
                </div>
                <div class="pre-payment">
                    <div class="custom-control custom-radio" style="padding-bottom:2rem">
                        <input type="checkbox" data-id="{{$detail_tour->id}}" id="customRadio1" name="customRadio" class="pre-pay custom-control-input" value="1">
                        <label style="padding-left: 3rem;" class="custom-control-label" for="customRadio1">Thanh toán trước 30%</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="checkbox" data-id="{{$detail_tour->id}}" id="customRadio2" name="customRadio" class="pre-pay custom-control-input" value="2">
                        <label style="padding-left: 3rem;" class="custom-control-label" for="customRadio2">Thanh toán trước 100%</label>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="info-policy">
                    <div class="header-policy">
                        <div class="heder-policy-top">
                            <div class="policy-icon">
                                <img src="data:image/svg+xml,%3csvg%20width='28'%20height='33'%20viewBox='0%200%2028%2033'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cg%20clip-path='url(%23clip0_4301_53650)'%3e%3cpath%20d='M25.3235%209.8463C25.2915%209.12402%2025.2915%208.43602%2025.2915%207.74573C25.2937%207.61587%2025.2697%207.4869%2025.2209%207.36652C25.1722%207.24614%2025.0996%207.13682%2025.0077%207.04509C24.9158%206.95336%2024.8063%206.88109%2024.6858%206.8326C24.5653%206.78411%2024.4363%206.7604%2024.3064%206.76287C20.2081%206.76287%2017.0904%205.58116%2014.5007%203.05544C14.3133%202.88439%2014.0687%202.78955%2013.815%202.78955C13.5612%202.78955%2013.3167%202.88439%2013.1293%203.05544C10.5395%205.58116%207.41497%206.76287%203.32354%206.76287C3.19369%206.7604%203.06466%206.78411%202.94417%206.8326C2.82368%206.88109%202.71419%206.95336%202.62225%207.04509C2.5303%207.13682%202.45778%207.24614%202.40901%207.36652C2.36024%207.4869%202.33623%207.61587%202.3384%207.74573C2.3384%208.43145%202.3384%209.11716%202.3064%209.8463C2.16697%2016.7286%201.9704%2026.18%2013.4858%2030.148L13.8127%2030.2143L14.1418%2030.148C25.6184%2026.18%2025.4561%2016.7674%2025.3235%209.8463Z'%20fill='%230D4C3F'/%3e%3cpath%20d='M13.0285%2019.3915C12.838%2019.557%2012.595%2019.6493%2012.3427%2019.6521H12.3085C12.1774%2019.6499%2012.0484%2019.6196%2011.93%2019.5632C11.8117%2019.5068%2011.7069%2019.4257%2011.6227%2019.3252L8.56445%2015.9469L10.0387%2014.6349L12.4342%2017.2909L17.7462%2012.2395L19.0925%2013.6841L13.0285%2019.3915Z'%20fill='white'/%3e%3c/g%3e%3cdefs%3e%3cclipPath%20id='clip0_4301_53650'%3e%3crect%20width='27.6549'%20height='32'%20fill='white'%20transform='translate(0%200.5)'/%3e%3c/clipPath%3e%3c/defs%3e%3c/svg%3e" alt="">
                            </div>
                            <div class="policy-label">
                                Hoàn hủy linh hoạt
                            </div>
                        </div>
                        <div class="header-policy-content">
                            Bạn sẽ nhận lại 100% giá trị cọc nếu thông báo huỷ trước ngày khởi hành theo quy định
                        </div>
                    </div>
                    <div class="header-policy">
                        <div class="heder-policy-top">
                            <div class="policy-icon">
                                <img src="data:image/svg+xml,%3csvg%20width='26'%20height='32'%20viewBox='0%200%2026%2032'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20d='M21.1428%2014.2856H19.4285V9.14279C19.4285%207.32416%2018.7061%205.58002%2017.4201%204.29405C16.1341%203.00809%2014.39%202.28564%2012.5714%202.28564C10.7527%202.28564%209.00859%203.00809%207.72263%204.29405C6.43666%205.58002%205.71422%207.32416%205.71422%209.14279V14.2856H3.99993C3.54527%2014.2856%203.10924%2014.4663%202.78775%2014.7877C2.46626%2015.1092%202.28564%2015.5453%202.28564%2015.9999V27.9999C2.28564%2028.4546%202.46626%2028.8906%202.78775%2029.2121C3.10924%2029.5336%203.54527%2029.7142%203.99993%2029.7142H21.1428C21.5974%2029.7142%2022.0335%2029.5336%2022.355%2029.2121C22.6765%2028.8906%2022.8571%2028.4546%2022.8571%2027.9999V15.9999C22.8571%2015.5453%2022.6765%2015.1092%2022.355%2014.7877C22.0335%2014.4663%2021.5974%2014.2856%2021.1428%2014.2856ZM15.9999%2014.2856H9.14279V9.14279C9.14279%208.23347%209.50401%207.3614%2010.147%206.71842C10.79%206.07544%2011.662%205.71422%2012.5714%205.71422C13.4807%205.71422%2014.3527%206.07544%2014.9957%206.71842C15.6387%207.3614%2015.9999%208.23347%2015.9999%209.14279V14.2856Z'%20fill='%230D4C3F'/%3e%3cpath%20d='M13.4284%2022.6286V24.5806C13.4284%2024.8079%2013.3381%2025.0259%2013.1773%2025.1867C13.0166%2025.3474%2012.7985%2025.4377%2012.5712%2025.4377C12.3439%2025.4377%2012.1259%2025.3474%2011.9651%2025.1867C11.8044%2025.0259%2011.7141%2024.8079%2011.7141%2024.5806V22.6286C11.3873%2022.4399%2011.1318%2022.1487%2010.9874%2021.8C10.843%2021.4514%2010.8177%2021.0648%2010.9153%2020.7003C11.013%2020.3358%2011.2282%2020.0137%2011.5276%2019.7839C11.827%2019.5542%2012.1938%2019.4297%2012.5712%2019.4297C12.9486%2019.4297%2013.3154%2019.5542%2013.6148%2019.7839C13.9142%2020.0137%2014.1294%2020.3358%2014.2271%2020.7003C14.3248%2021.0648%2014.2994%2021.4514%2014.155%2021.8C14.0106%2022.1487%2013.7552%2022.4399%2013.4284%2022.6286Z'%20fill='white'/%3e%3c/svg%3e" alt="">
                            </div>
                            <div class="policy-label">
                                Thanh toán an toàn
                            </div>
                        </div>
                        <div class="header-policy-content">
                            Hỗ trợ đổi ngày đăng ký và thông tin của bạn được bảo mật ở tất cả các phương thức thanh toán
                        </div>
                    </div>
                </div>
                <div class="preview">
                    <div class="item-preview-item">
                        <div class="item-preview-left">
                            <span style="margin-right:8px">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </span>
                            <span>
                                Ngày khởi hành:
                            </span>
                        </div>
                        <div class="item-preview-right">
                            {{$detail_tour->date_start}}
                            <input type="hidden" name="date_start"value="{{$detail_tour->date_start}}">
                        </div>
                    </div>
                    <div class="item-preview-item">
                        <div class="item-preview-left">
                            <span style="margin-right:8px">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </span>
                            <span>
                                Số thành viên:
                            </span>
                        </div>
                        <div class="item-preview-right">
                            1 người lớn
                        </div>
                    </div>
                    <div class="item-preview-item">
                        <div class="item-preview-left">
                            <span style="margin-right:8px">
                                <i class="fa fa-money" aria-hidden="true"></i>
                            </span>
                            <span>
                                Loại thanh toán:
                            </span>
                        </div>
                        <div class="item-preview-right">

                        </div>
                    </div>
                    <div class="line-bot mt-4 mb-4"></div>
                    <div class="preview-calculate">
                        <div class="calculate-left">
                            Giá một người:
                        </div>
                        <div class="calculate-right">
                            1 x {{$detail_tour->price}} VND
                        </div>
                    </div>
                    <div class="preview-calculate">
                        <div class="calculate-left">
                            Tạm tính:
                        </div>
                        <div class="calculate-right">
                            1 x {{$detail_tour->price}} VND
                        </div>
                    </div>
                    <div class="preview-calculate">
                        <div class="calculate-left">
                            Giảm giá:
                        </div>
                        <div class="calculate-right">
                            0 VND
                        </div>
                    </div>
                    <div class="preview-calculate">
                        <div class="calculate-left">
                            Voucher giảm giá:
                        </div>
                        <div class="calculate-right">
                            0 VND
                        </div>
                    </div>
                    <div class="preview-calculate">
                        <div class="calculate-left">
                            Phí tiện lợi:
                        </div>
                        <div class="calculate-right">
                            0 VND
                        </div>
                    </div>
                    <div class="line-bot mt-4 mb-4"></div>
                    <div class="preview-calculate">
                        <div class="calculate-left">
                            Cần thanh toán:
                        </div>
                        <div class="calculate-right">
                        {{$detail_tour->price}} VND
                        <input type="hidden" name="payment"value="{{$detail_tour->price}}">
                        </div>
                    </div>
                    <div class="line-bot mt-4 mb-4"></div>
                    <div class="preview-calculate">
                        <div class="calculate-left">
                            Còn lại:
                        </div>
                        <div  class="calculate-right">
                            0 VND
                            <input type="hidden" name="debt"value="0">
                        </div>
                    </div>
                    <div style="padding-top:4rem">
                    <input type="hidden" name="total" value="{{$detail_tour->price}}">
                    <button type="submit" name="redirect" style="float:right;background: #EC0072;font-size: 17px;color: #fff;width: 15rem;height:6rem;font-weigh:700" class="btn">Đặt ngay</button>
                    </div>
                </div>
                <div class="pre-privew"></div>

            </div>
        </form>
    </div>
</div>
<script>
    var number_adult = 1;
    $("#minus-adult").click(function() {
        number_adult -= 1;
        if (number_adult <= 0) number_adult = 0;
        setNumberAdult(number_adult);
        setChecker(number_adult);
        $(".number-adult").addClass('bounce-adult');
        removeAnimationAdult();
    });
    $(".plus-adult").click(function() {
        number_adult += 1;
        setNumberAdult(number_adult);
        setChecker(number_adult);
        $(".number-adult").addClass('bounce-adult')
        removeAnimationAdult();
    });

    function removeAnimationAdult() {
        setTimeout(function() {
            $(".number-adult").removeClass('bounce-adult');
        }, 100);
    }

    function setNumberAdult(number_adult) {
        // $("#number").attr('data-content', number);
        $(".number-adult").text(number_adult);
        $("#data-number").val(number_adult);
    }

    $(document).ready(function() {
        var number_adult = 1;
        $('.plus-adult').on('click', function() {
            number_adult += 1;
            var id = $(this).attr('data-id');
            $.ajax({
                url: '{{ \Illuminate\Support\Facades\URL::route('plus.adult.tour') }}',
                type: 'POST',
                data: {
                    "_token": "{{csrf_token()}}",
                    number_adult,
                    id
                },
                success: function(response) {
                    if (response === '') {
                        $('.preview');
                    } else {
                        $('.preview').hide()
                        let output = '';
                        output += `  <div class="item-preview-item">
                           <div class="item-preview-left">
                            <span style="margin-right:8px"> 
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                    </span>
                    <span>
                        Ngày khởi hành:
                    </span>
                    </div>
                    <div class="item-preview-right">
                    ${response.detail_tour.date_start}
                    </div>
                </div>
                <div class="item-preview-item">
                    <div class="item-preview-left">
                    <span style="margin-right:8px"> 
                    <i class="fa fa-users" aria-hidden="true"></i>
                    </span>
                    <span>
                        Số thành viên:
                    </span>
                    </div>
                    <div class="item-preview-right">
                        ${response.number_adult} người lớn
                    </div>
                </div>
                <div class="item-preview-item">
                    <div class="item-preview-left">
                    <span style="margin-right:8px"> 
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </span>
                    <span>
                        Loại thanh toán:
                    </span>
                    </div>
                    <div class="item-preview-right">
                        
                    </div>
                </div>
                <div class="line-bot mt-4 mb-4"></div>  
                <div class="preview-calculate">
                    <div class="calculate-left">
                    Giá một người:
                    </div>
                    <div class="calculate-right">
                    ${response.number_adult} x ${response.detail_tour.price} VND
                    </div>
                </div> 
                <div class="preview-calculate">
                    <div class="calculate-left">
                    Tạm tính:
                    </div>
                    <div class="calculate-right">
                    ${response.totalFormat} VND
                    </div>
                </div>
                <div class="preview-calculate">
                    <div class="calculate-left">
                    Giảm giá:
                    </div>
                    <div class="calculate-right">
                    0 VND
                    </div>
                </div>
                <div class="preview-calculate">
                    <div class="calculate-left">
                    Voucher giảm giá:
                    </div>
                    <div class="calculate-right">
                    0 VND
                    </div>
                </div>
                <div class="preview-calculate">
                    <div class="calculate-left">
                    Phí tiện lợi:
                    </div>
                    <div class="calculate-right">
                    0 VND
                    </div>
                </div>
                <div class="line-bot mt-4 mb-4"></div>  
                <div class="preview-calculate">
                    <div name="payment" class="calculate-left">
                    Cần thanh toán:
                    </div>
                    <div class="calculate-right">
                    ${response.totalFormat} VND
                    <input type="hidden" name="payment"value="${response.totalFormat}">
                    </div>
                </div>
                <div class="line-bot mt-4 mb-4"></div>  
                <div class="preview-calculate">
                    <div class="calculate-left">
                    Còn lại:
                    </div>
                    <div name="debt" class="calculate-right">
                    0 VND
                    <input type="hidden" name="debt"value="0">
                    </div>
                </div>
                <div style="style="padding-top:4rem">
                <input type="hidden" name="total" value="${response.total}">
                <button type="submit" name="redirect" style="float:right;background: #EC0072;font-size: 17px;color: #fff;width: 15rem;height:6rem;font-weigh:700" class="btn">Đặt ngay</button>
            </div>
`;
                        $('.pre-privew').html(output);
                    }

                }
            })
        })
        $('#minus-adult').on('click', function() {
            if (number_adult <= 0) number_adult = 0;
            number_adult -= 1;
            var id = $(this).attr('data-id');
            $.ajax({
                url: '{{ \Illuminate\Support\Facades\URL::route('minus.adult.tour') }}',
                type: 'POST',
                data: {
                    "_token": "{{csrf_token()}}",
                    number_adult,
                    id
                },
                success: function(response) {
                    if (response === '') {
                        $('.preview');
                    } else {
                        $('.preview').hide()
                        let output = '';
                        output += `  <div class="item-preview-item">
                           <div class="item-preview-left">
                            <span style="margin-right:8px"> 
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                    </span>
                    <span>
                        Ngày khởi hành:
                    </span>
                    </div>
                    <div class="item-preview-right">
                    ${response.detail_tour.date_start}
                    </div>
                </div>
                <div class="item-preview-item">
                    <div class="item-preview-left">
                    <span style="margin-right:8px"> 
                    <i class="fa fa-users" aria-hidden="true"></i>
                    </span>
                    <span>
                        Số thành viên:
                    </span>
                    </div>
                    <div class="item-preview-right">
                        ${response.number_adult} người lớn
                    </div>
                </div>
                <div class="item-preview-item">
                    <div class="item-preview-left">
                    <span style="margin-right:8px"> 
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </span>
                    <span>
                        Loại thanh toán:
                    </span>
                    </div>
                    <div class="item-preview-right">
                        
                    </div>
                </div>
                <div class="line-bot mt-4 mb-4"></div>  
                <div class="preview-calculate">
                    <div class="calculate-left">
                    Giá một người:
                    </div>
                    <div class="calculate-right">
                    ${response.number_adult} x ${response.detail_tour.price} VND
                    </div>
                </div> 
                <div class="preview-calculate">
                    <div class="calculate-left">
                    Tạm tính:
                    </div>
                    <div class="calculate-right">
                    ${response.totalFormat} VND
                    </div>
                </div>
                <div class="preview-calculate">
                    <div class="calculate-left">
                    Giảm giá:
                    </div>
                    <div class="calculate-right">
                    0 VND
                    </div>
                </div>
                <div class="preview-calculate">
                    <div class="calculate-left">
                    Voucher giảm giá:
                    </div>
                    <div class="calculate-right">
                    0 VND
                    </div>
                </div>
                <div class="preview-calculate">
                    <div class="calculate-left">
                    Phí tiện lợi:
                    </div>
                    <div class="calculate-right">
                    0 VND
                    </div>
                </div>
                <div class="line-bot mt-4 mb-4"></div>  
                <div class="preview-calculate">
                    <div class="calculate-left">
                    Cần thanh toán:
                    </div>
                    <div  class="calculate-right">
                    ${response.totalFormat} VND
                    <input type="hidden" name="payment"value="${response.totalFormat}">
                    </div>
                </div>
                <div class="line-bot mt-4 mb-4"></div>  
                <div class="preview-calculate">
                    <div class="calculate-left">
                    Còn lại:
                    </div>
                    <div name="debt" class="calculate-right">
                    0 VND
                      <input type="hidden" name="debt"value="0">
                    </div>
                </div>
                <div style="style="padding-top:4rem">
                <input type="hidden" name="total" value="${response.total}">
                <button type="submit" name="redirect" style="float:right;background: #EC0072;font-size: 17px;color: #fff;width: 15rem;height:6rem;font-weigh:700" class="btn">Đặt ngay</button>
                </div>
                `;
                        $('.pre-privew').html(output);
                    }

                }
            })
        })
        $('.pre-pay').on('click', function() {
            var dataNumber = $('#data-number').val();
            var id = $(this).attr('data-id');
            var prePay = [];
            $('.pre-pay').each(function() {
                if ($(this).is(":checked")) {
                    prePay.push($(this).val())
                }
            })
            FinalprePay = prePay.toString();
            $.ajax({
                url: '{{ \Illuminate\Support\Facades\URL::route('prePayment.tour') }}',
                type: 'POST',
                data: {
                    "_token": "{{csrf_token()}}",
                    FinalprePay: FinalprePay,
                    dataNumber,
                    id
                },
                success: function(response) {
                    if (response === '') {
                        $('.preview');
                    } else {
                        $('.preview').hide()
                        let output = '';
                        output += ` 
                         <div class="item-preview-item">
                           <div class="item-preview-left">
                            <span style="margin-right:8px"> 
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                    </span>
                    <span>
                        Ngày khởi hành:
                    </span>
                    </div>
                    <div class="item-preview-right">
                    ${response.detail_tour.date_start}
                    </div>
                </div>
                <div class="item-preview-item">
                    <div class="item-preview-left">
                    <span style="margin-right:8px"> 
                    <i class="fa fa-users" aria-hidden="true"></i>
                    </span>
                    <span>
                        Số thành viên:
                    </span>
                    </div>
                    <div class="item-preview-right">
                        ${response.dataNumber} người lớn
                    </div>
                </div>
                <div class="item-preview-item">
                    <div class="item-preview-left">
                    <span style="margin-right:8px"> 
                        <i class="fa fa-money" aria-hidden="true"></i>
                    </span>
                    <span>
                        Loại thanh toán:
                    </span>
                    </div>
                    <div class="item-preview-right">
                        ${response.advancePay}
                    </div>
                </div>
                <div class="line-bot mt-4 mb-4"></div>  
                <div class="preview-calculate">
                    <div class="calculate-left">
                    Giá một người:
                    </div>
                    <div class="calculate-right">
                    ${response.dataNumber} x ${response.detail_tour.price} VND
                    </div>
                </div> 
                <div class="preview-calculate">
                    <div class="calculate-left">
                    Tạm tính:
                    </div>
                    <div class="calculate-right">
                    ${response.totalFormat} VND
                    </div>
                </div>
                <div class="preview-calculate">
                    <div class="calculate-left">
                    Giảm giá:
                    </div>
                    <div class="calculate-right">
                    0 VND
                    </div>
                </div>
                <div class="preview-calculate">
                    <div class="calculate-left">
                    Voucher giảm giá:
                    </div>
                    <div class="calculate-right">
                    0 VND
                    </div>
                </div>
                <div class="preview-calculate">
                    <div class="calculate-left">
                    Phí tiện lợi:
                    </div>
                    <div class="calculate-right">
                    0 VND
                    </div>
                </div>
                <div class="line-bot mt-4 mb-4"></div>  
                <div class="preview-calculate">
                    <div class="calculate-left">
                    Cần thanh toán:
                    </div>
                    <div name="payment" class="calculate-right">
                    ${response.needPayment} VND
                      <input type="hidden" name="payment"value="${response.needPayment}">
                    </div>
                </div>
                <div class="line-bot mt-4 mb-4"></div>  
                <div class="preview-calculate">
                    <div class="calculate-left">
                    Còn lại:
                    </div>
                    <div name="debt" class="calculate-right">
                    ${response.end} VND
                      <input type="hidden" name="debt"value="${response.end}">
                    </div>
                </div>
                <div style="style="padding-top:4rem">
                <input type="hidden" name="total" value="${response.needPayment1}">
                <button type="submit" name="redirect" style="float:right;background: #EC0072;font-size: 17px;color: #fff;width: 15rem;height:6rem;font-weigh:700" class="btn">Đặt ngay</button>
                </div>
                `;
                        $('.pre-privew').html(output);
                    }

                }
            })
        })
    })
</script>
@endsection
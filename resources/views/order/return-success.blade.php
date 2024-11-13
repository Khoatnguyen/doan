@extends('layout.main')
@section('content')
<div class="container ">
    <div class="row return-succes">
            @php
             $images= explode('|',$tour_detail->library_images)
            @endphp
            <div class="col-md-7">
                <div class="information-tour">
                    <div class="title-success">
                    Chúc mừng bạn thanh toán thành công
                    </div>
                    <div class="info-name">
                    Kilimanjaro - Se7en Summits Challenge - Chinh Phục Nóc nhà Châu Phi Thông Qua Lemosho
                    </div>
                    <div class="info-img">
                    <img width="100%" src="{{\Illuminate\Support\Facades\Storage::url($images[0])}}" alt="">
                    </div>
                </div>
                <div class="info-content">
                    <p>Xin chào,</p>
                    <p>Cảm ơn bạn đã chọn intoWild làm bạn đồng hành trong chuyến đi sắp tới. Chúng tôi sẽ gửi email xác nhận đăng ký dựa theo thông tin bạn đã đăng ký như sau:</p>
                    <p>Họ và tên: <strong>{{$order->reservation_name}}</strong> </p>
                    <p>Số điện thoại: <strong>{{$order->reservation_phone}}</strong> </p>
                    <p>Email: <strong>{{$order->reservation_email}}</strong> </p>
                    <p>Phương thức thanh toán: <strong>VnPay</strong> </p>
                    <p>Đừng quên kiểm tra hộp thư điện tử để cập nhật những thông tin cần thiết, chuẩn bị cho chuyến phiêu lưu của bạn nhé! Hẹn sớm gặp lại bạn trong chuyến đi!</p>
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
                           {{$order->date_start}}
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
                        {{$order->number_person}} người lớn
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
                            @if ($order->debt == 0)
                            Thanh toán 100%
                            @else
                            Thanh toán 30%
                            @endif
                        </div>
                    </div>
                    <div class="line-bot mt-4 mb-4"></div>
                    <div class="preview-calculate">
                        <div class="calculate-left">
                            Giá một người:
                        </div>
                        <div class="calculate-right">
                            {{$priceFormat}} VND
                        </div>
                    </div>
                    <div class="preview-calculate">
                        <div class="calculate-left">
                            Tạm tính:
                        </div>
                        <div class="calculate-right">
                           {{$totalFormat}} VND
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
                        {{$totalPayment}} VND
                        </div>
                    </div>
                    <div class="line-bot mt-4 mb-4"></div>
                    <div class="preview-calculate">
                        <div class="calculate-left">
                            Còn lại:
                        </div>
                        <div  class="calculate-right">
                            {{$totalDebt}} VND
                            <input type="hidden" name="debt"value="0">
                        </div>
                    </div>
                    <div style="padding-top:4rem">
                    <button type="submit" style="float:right;background: #EC0072;font-size: 17px;color: #fff;width: 15rem;height:6rem;font-weigh:700" class="btn">Đặt ngay</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
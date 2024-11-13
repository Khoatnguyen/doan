<?php

namespace App\Http\Controllers;

use App\Models\OrderTourInfor;
use App\Models\Tour;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment_vnpay(Request $request)  {
        
        //Lưu thông tin order
        // thêm bảngOrder, OrderDetail
    $data=$request->all();
    $code_cart= rand(0,9999);
    $request ->validate([
        'reservation_name'=>'required',
        'reservation_date'=>'required',
        'reservation_phone'=>'required',
        'reservation_email'=>'required',
        
    ],[
        'reservation_name.required'=>'Tên không được để trống',
        'reservation_date.required'=>'Ngày sinh không được để trống ',
        'reservation_phone.required'=>'Số điện thoại không được để trống',
        'reservation_email.required'=>'email không được để trống',
        
    ]);
    //payment_status = 1: chưa thanh toán
    //payment_status = 00: thanh toán thành công
    //status = 0: đã đi 
    //status = 1: chưa đi 
    $debt= (int) str_replace('.', '', $request->debt) ;
    $payment= (int) str_replace('.', '', $request->payment);
    $number_adult= (int) str_replace('.', '', $request->number_adult);
    $id_tour= (int) str_replace('.', '', $request->id_tour);
    $saveOrder = new OrderTourInfor();
    $saveOrder->order_id=$code_cart;
    $saveOrder->tour_id=$id_tour;
    $saveOrder->reservation_name=$request->reservation_name;
    $saveOrder->reservation_date=$request->reservation_date;
    $saveOrder->reservation_phone=$request->reservation_phone;
    $saveOrder->reservation_email=$request->reservation_email;
    $saveOrder->date_start=$request->date_start;
    $saveOrder->debt=$debt;
    $saveOrder->status=0;
    $saveOrder->payment_status=1;
    $saveOrder->payment=$payment;
    $saveOrder->number_person=$number_adult;
    $saveOrder->save();   


    if ($saveOrder->save()) {
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('payment.vnpay.return');
        $vnp_TmnCode = "9CJ9X2L5";//Mã website tại VNPAY 
        $vnp_HashSecret = "IL78X6OPBHRUD2222X9YHS7K4M87AL47"; //Chuỗi bí mật
        
        $vnp_TxnRef = $code_cart; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này 
        $vnp_OrderInfo = "Thanh toán hóa đơn";
        $vnp_OrderType = "My Tour";
        $vnp_Amount = $data['total']*100 ;
        $vnp_Locale = "VN";
        $vnp_BankCode = "NCB";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
       
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );
        
        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }
        
        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }
        
        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00'
            , 'message' => 'success'
            , 'data' => $vnp_Url
        );
        if (isset($_POST['redirect'])) { 
                header('Location: ' . $vnp_Url);
                die();
        } else {
                echo json_encode($returnData);
        }
            // vui lòng tham khảo thêm tại code demo
    
    } else {
        echo 'Failed to save user';
    }
    
    
    }
    public function vnpayReturn(Request $request)
    { 
        // Lấy các tham số trả về từ VNPay
        $vnp_ResponseCode = $request->get('vnp_ResponseCode'); // Mã phản hồi từ VNPay
        // $vnp_Amount = $request->get('vnp_Amount') / 100; // Số tiền đã thanh toán
        $vnp_TxnRef = $request->get('vnp_TxnRef'); // Mã đơn hàng (order_id)

        // Kiểm tra xem thanh toán có thành công không
        if ($vnp_ResponseCode == '00') {
            // Lưu thông tin thanh toán vào cơ sở dữ liệu
            $order = OrderTourInfor::where('order_id', $vnp_TxnRef)->first();
            $tour_detail= Tour::where('id', $order->tour_id)->first();
            //dd($tour_detail->library_images);
            $total= ($tour_detail->price)*($order->number_person);
            $totalFormat= number_format($total, 0, ',', '.');
            $totalPayment= number_format($order->payment, 0, ',', '.');
            $totalDebt= number_format($order->debt, 0, ',', '.');
            $priceFormat= number_format($tour_detail->price, 0, ',', '.');
            if ($order) {
                $order->payment_status = 2; // Cập nhật trạng thái thanh toán
                $order->save();

                return view('order.return-success')->with([
                    'order'=>$order,
                    'tour_detail'=>$tour_detail,
                    'totalFormat'=>$totalFormat,
                    'totalPayment'=>$totalPayment,
                    'totalDebt'=>$totalDebt,
                    'priceFormat'=>$priceFormat,
                ]);
            }
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'Thanh toán không thành công.'
        ]);
    }
   
}

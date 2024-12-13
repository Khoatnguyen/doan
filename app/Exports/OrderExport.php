<?php

namespace App\Exports;

use App\Models\OrderTourInfor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class OrderExport implements FromCollection,WithMapping,WithHeadings,WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return OrderTourInfor::with('tour')->get();
    }
    public function headings(): array {
        return [
            'ID',
            'Mã tour',
            'Tên tour',    
            "Mã đặt tour",
            "Tên khách hàng",
            "Số điện thoại",
            "Email",
            "Trạng thái thanh toán",
            "Trạng thái đơn hàng",
            "Giá tour",
            "Đã thanh toán",
            "Còn nợ",
        ];
    }
 
    public function map($TourInfo): array {
        return [
            $TourInfo->id,
            $TourInfo->tour_id,
            $TourInfo->tour->title,
            $TourInfo->order_id,
            $TourInfo->reservation_name,
            $TourInfo->reservation_phone,
            $TourInfo->reservation_email,
            $TourInfo->payment_status == 1?"Chưa thanh toán":"Đã thanh toán",
            $TourInfo->status == 0?"Đang xử lý":($TourInfo->status == 1?"Đã xử lý":"Đã hủy"),
            $TourInfo->tour->price,
            $TourInfo->payment, 
            $TourInfo->debt, 
        ];
    }
    public function columnFormats(): array
    {
        return [
          "J"=> NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED2,
          "K"=> NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED2,
          "L"=> NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED2,
        ];
    }
}

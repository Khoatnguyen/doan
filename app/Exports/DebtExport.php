<?php

namespace App\Exports;

use App\Models\OrderTourInfor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class DebtExport implements FromCollection,WithMapping,WithHeadings,WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return OrderTourInfor::with('tour.ScheduleFee')->get();
    }
    public function headings(): array {
        return [
            'Tên khách hàng',
            'Số người đi',
            'Mã đặt tour',    
            "Tour đã đặt",
            "Tổng tiền tour",
            "Tổng khách trả",
            "Tiền đã trả",
            "Còn nợ",
            "Ngày thanh toán",
            "Ngày trả",
            "Trạng thái thanh toán",
            "Đã trả nhà cung cấp",
            "Còn nợ nhà cung cấp",
        ];
    }
 
    public function map($TourInfo): array {
        return [
            $TourInfo->reservation_name,
            $TourInfo->number_person,
            $TourInfo->order_id,
            $TourInfo->tour->id,
            $TourInfo->tour->schedule_price,
            $TourInfo->tour->price,
            $TourInfo->payment,
            $TourInfo->debt,
            $TourInfo->created_at->format('Y-m-d'),
            $TourInfo->date_start ? \Carbon\Carbon::parse($TourInfo->date_start)->subDays(7)->format('Y-m-d') : null,
            $TourInfo->debt == 0?"Thanh toán 100%":"Thanh toán trước 30%",
            $TourInfo->payment_supplier,
            $TourInfo->debt_supplier,

        ];
    }
    public function columnFormats(): array
    {
        return [
          "E"=> NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED2,
          "F"=> NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED2,
          "G"=> NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED2,
          "H"=> NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1,
          "L"=> NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1,
          "M"=> NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1,
        ];
    }
}

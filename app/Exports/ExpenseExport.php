<?php

namespace App\Exports;

use App\Models\ScheduleFee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class ExpenseExport implements FromCollection,WithMapping,WithHeadings,WithColumnFormatting
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ScheduleFee::with('tour')->get();
    }
    
    public function headings(): array {
        return [
            ['Chi phí tổ chức tour', '', '', '', '', '', '', 'Lợi nhuận từng tour', '', ''],
            [
            'Mã tour',
            'Cp vé máy bay',
            'Cp khách sạn',    
            "Cp di chuyển",
            "Cp ăn uống",
            "Cp hướng dẫn viên",
            "Cp khác",
            "Giá thu khách hàng",
            "Chi phí",
            "Lợi nhuận",
            ],
        ];
    }
 
    public function map($expense): array {
        return [
            $expense->tour_id,
            $expense->airfare_fee,
            $expense->hotel_fee,
            $expense->trans_fee,
            $expense->meal_fee,
            $expense->guide_fee,
            $expense->other_fee,
            $expense->tour->price,
            $expense->tour->schedule_price, 
            $expense->tour->price - $expense->tour->schedule_price, 
        ];
    }
    public function columnFormats(): array
    {
        return [
          "A"=>NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1,
          "B"=>NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1,
          "C"=>NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1,
          "D"=>NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1,
          "E"=>NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1,
          "F"=>NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1,
          "G"=>NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1,
          "H"=>NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1,
          "I"=>NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1,
          "J"=>NumberFormat::FORMAT_NUMBER_COMMA_SEPARATED1,
        ];
    }
}

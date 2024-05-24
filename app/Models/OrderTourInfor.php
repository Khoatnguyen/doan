<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTourInfor extends Model
{
    use HasFactory;
    protected $table = 'order_tour_info';
    protected $fillable =[
        'oder_id',
        'reservation_name',
        'reservation_phone',
        'reservation_email',
        'date_star',
        'number_person',
    ];
}

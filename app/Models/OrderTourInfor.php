<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTourInfor extends Model
{
    use HasFactory;
    protected $table = 'order_tours_info';
    protected $fillable =[
        'order_id',
        'tour_id',
        'reservation_name',
        'reservation_date',
        'reservation_phone',
        'reservation_email',
        'date_start',
        'debt',
        'status',
        'payment_status',
        'payment',
        'number_person',    
    ];
    
}

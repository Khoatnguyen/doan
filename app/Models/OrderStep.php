<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStep extends Model
{
    use HasFactory;
    protected $table = 'order_step';
    protected $fillable =[
        'fight_code',
        'hotel_code',
        'order_code',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHotel extends Model
{
    use HasFactory;
    protected $table = 'order_hotel';
    protected $fillable =[
        'hotel_id',
        'name_custom',
        'phone_custom',
        'email_custom',
        'number_rom',
        'children_person',
        'adult_person',
        'price_hotel',
        'price',
        'status',
        'date_start',
        'date_end',
    ];
    public function hotel(){
        return $this->hasOne(Hotel::class,'id','hotel_id');
    }
}

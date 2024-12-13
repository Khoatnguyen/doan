<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleFee extends Model
{
    use HasFactory;
    protected $table ='schedule_fee';
    protected $fillable =[
        'tour_id',
        'airfare_fee',
        'trans_fee',
        'meal_fee',
        'guide_fee',
        'hotel_fee',
        'other_fee',
    ];
     public function tour(){
        return $this->hasOne(Tour::class,'id','tour_id');
    }
}

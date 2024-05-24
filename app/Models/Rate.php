<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    protected $table = 'rates';
    protected $fillable=[
        'tour_id',
        'hotel_id',
        'name',
        'email',
        'rate_content',
        'rate_number',
        'type_rate',
    ];
}
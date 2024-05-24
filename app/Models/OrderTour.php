<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTour extends Model
{
    use HasFactory;
    protected $table = 'orders_tours';
    protected $fillable = [
        'user_id',
        'tour_id',
    ];
}

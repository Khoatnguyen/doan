<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table = 'hotels';
    protected $fillable = [
        'title',
        'description',
        'small_description',
        'address',
        'price_ori',
        'price_sell',
        'library_images',
        'number_bed',
        'area',
        'note',
        'view',
    ];
}

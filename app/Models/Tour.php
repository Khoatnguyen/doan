<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $table = 'tours';
    protected $fillable = [
        'title',
        'description',
        'small_description',
        'time',
        'type_tour',
        'number_person',
        'address',
        'vehicle',
        'depart',
        'schedule',
        'library_images',
        'include_price',
        'none_include_price',
        'note',
        'schedule_price',
        'price',
        'date_start',
    ];

    public function setFilenamesAttribute($value)
    {
        $this->attributes['library_images'] = json_encode($value);
    }
}

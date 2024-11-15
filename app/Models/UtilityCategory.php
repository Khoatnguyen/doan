<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UtilityCategory extends Model
{
    use HasFactory;
    protected $table = 'utility_category';
    protected $fillable = [
        'name',
        'icon',
    ];
}

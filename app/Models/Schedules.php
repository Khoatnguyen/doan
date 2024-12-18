<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    use HasFactory;
    protected $table ='schedules';
    protected $fillable =[
        'tour_id',
        'title',
        'description',
    ];
}

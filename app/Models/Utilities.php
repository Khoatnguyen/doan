<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilities extends Model
{
    use HasFactory;
    protected $table ='utilities';
    protected $fillable =[
        'hotel_id',
        'utility_category_id',
        'name',
        'icon',
    ];
    public function utilitiesCategory(){
        return $this->hasOne(UtilityCategory::class,'id','utility_category_id');
    }
    public function hotel(){
        return $this->hasOne(Hotel::class,'id','hotel_id');
    }
}

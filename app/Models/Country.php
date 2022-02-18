<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $table = 'countries';
    protected $primaryKey = 'id';

    protected $fillable = [
        'country_name','country_name_ar'
    ];

    public function governorates(){
        return $this->hasMany(Governorate::class,'country_id','id');
      }

      public function cities(){
        return $this->hasMany(City::class,'country_id','id');
      }
}

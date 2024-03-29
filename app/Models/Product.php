<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','file_id','option_id','price',
        'no_of_copies'
    ];

    public function customer(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function files(){
        return $this->hasMany(File::class,'id','file_id');
    }

    public function option(){
        return $this->hasOne(Option::class,'id','option_id');
    }

    public function vouchers(){
        return $this->belongsToMany(Voucher::class);
    }
}

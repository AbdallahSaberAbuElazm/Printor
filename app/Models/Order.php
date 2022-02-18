<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id', 'library_owner_id','cart_id',
        'order_date' ,'payment_id','delivery',
        'total_cost',
    ];

    public function customer(){
        return $this->belongsTo(User::class);
      }

      public function cart(){
        return $this->hasOne(Cart::class,'cart_id','id');
      }

      public function payments(){
        return $this->hasOne(Payment::class);
      }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Shipment extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id','library_owner_id','order_id','payment_id',
        'status','shipment_date','order_confirmed_qr',
        'order_confirmed'
    ];

    public function customer(){
        return $this->belongsTo(User::class,'id','user_id');
      }

    public function libraryOwner(){
    return $this->belongsTo(LibraryOwner::class,'library_owner_id','id');
    }

      public function order(){
        return $this->belongsTo(Order::class);
      }

      public function payment(){
        return $this->hasOne(Payment::class);
      }

      public function humanFormattedDate(){
        return Carbon::createFromTimeStamp( strtotime($this->created_at))->diffForHumans();
      }
}

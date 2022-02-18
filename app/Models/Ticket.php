<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id','order_id','ticket_type_id',
        'title','message','status',
    ];

    public function customer(){
        return $this->belongsTo(User::class,'user_id','id');
      }

      public function order(){
        return $this->belongsTo(Order::class,'order_id','id');
      }

      public function tickettype(){
        return $this->belongsTo(TicketType::class,'ticket_type_id','id');
      }
}

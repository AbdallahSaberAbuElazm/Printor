<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id','wish_list'
      ];

      public function customer(){
        $this->belongsTo(User::class);
      }
}

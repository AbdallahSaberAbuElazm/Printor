<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Review extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id','library_owner_id','stars','review',
        'evaluation'
    ];

    public function customer(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function humanFormattedDate(){
        return Carbon::createFromTimeStamp( strtotime($this->created_at))->diffForHumans();
      }
}

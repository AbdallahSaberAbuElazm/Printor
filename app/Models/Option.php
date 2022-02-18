<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $fillable=[
        'size_id' , 'color','side',
        'layout','wrapping','note',
    ];

    public function size(){
        return $this->belongsTo(Size::class,'size_id','id');
    }
}

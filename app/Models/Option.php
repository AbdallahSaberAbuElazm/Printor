<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $table = 'options';
    protected $primaryKey = 'id';

    protected $fillable=[
        'size_id' , 'color','side',
        'layout','wrapping','note','first_page_id','paper_type_id',
    ];

    public function sizes(){
        return $this->hasOne(Size::class,'id','size_id');
    }

    public function hasWrapping(){
        return $this->hasMany(Wrapping::class,'id','wrapping');
    }

    public function layouts(){
        return $this->hasMany(Layout::class,'id','layout');
    }

    public function sides(){
        return $this->hasMany(Side::class,'id','side');
    }

    // size - paperType - layouts - side - wrapping
    //side_size_layouts_paperType_wrapping
}

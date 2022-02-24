<?php

namespace App\Models;

use App\Http\Resources\PaperTypeResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $fillable=[
        'size','price_black_white',
        'price_color',
    ];

    public function layouts(){
        return $this->belongsToMany(Layout::class,'size_layout');
    }

    public function sides(){
        return $this->belongsToMany(Side::class,'side_size');
    }

    public function paperTypes(){
        return $this->belongsToMany(PaperType::class,'size_paper_type');
    }

    public function sizePaperTypeWrapping(){
        return $this->belongsToMany(Wrapping::class,'paper_type_wrapping');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperType extends Model
{
    use HasFactory;

    protected $fillable=[
        'type',
    ];

    public function paperTypeWrapping(){
        return $this->belongsToMany(Wrapping::class,'paper_type_wrapping');
    }
}

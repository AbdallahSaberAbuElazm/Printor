<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wrapping extends Model
{
    use HasFactory;

    protected $fillable = [
        'wrapping_category','price'
    ];
}

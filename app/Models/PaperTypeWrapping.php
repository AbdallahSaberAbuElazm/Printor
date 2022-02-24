<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaperTypeWrapping extends Model
{
    use HasFactory;

    protected $table = 'paper_type_wrapping';

    protected $fillable = ['size_id','paper_type_id','wrapping'];
}

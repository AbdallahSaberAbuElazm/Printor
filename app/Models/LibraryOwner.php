<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryOwner extends Model
{
    use HasFactory;

    protected $fillable=[
        'start','end','available','rating','extra_options'
    ];
}

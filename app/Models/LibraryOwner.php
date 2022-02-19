<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryOwner extends Model
{
    use HasFactory;

    protected $fillable=[
        'start_at','expires_at','available','rating',
        'extra_options','option_id','extra_option'
    ];
}

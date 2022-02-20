<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibraryOwner extends Model
{
    use HasFactory;

    protected $table='library_owners';
    protected $primaryKey='id';

    protected $fillable=[
        'user_id','start_at','expires_at','available','rating',
        'extra_options','option_id','extra_option'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

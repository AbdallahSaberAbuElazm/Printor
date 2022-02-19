<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable=[
        'code','name','description','uses',
        'max_uses','max_uses_user','type',
        'discount_amount','is_fixed','start_at',
        'expires_at',
    ];

    public function orders(){
        return $this->hasMany(Order::class,'voucher_id','id');
    }

    public function userReachedMaximumUses(User $user)
    {
        if ($this->max_uses_user <= 0) {
            return false;
        }
        return $this->orders()->where('user_id', $user->id)->count() < $this->max_uses_user;
    }
}

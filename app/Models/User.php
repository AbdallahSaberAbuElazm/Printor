<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table='users';
    protected $primaryKey='id';

    protected $fillable = [
        'first_name','last_name','email','email_verified_at',
       'mobile','mobile_verified_at','password','shipping_address',
       'billing_address','university_student','api_token','remember_token'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function libraryOwners(){
        return $this->hasMany(LibraryOwner::class,'user_id','id');
    }

    public function orders(){
        return $this->hasMany(Order::class);
      }

      public function payments(){
        return $this->hasMany(Payment::class);
      }

      public function shipments(){
        return $this->hasMany(Shipment::class);
      }

      public function shippingAddress(){
        return $this->hasOne(Address::class,'id','shipping_address');
      }

      public function billingAddress(){
        return $this->hasOne(Address::class,'id','billing_address');
      }

      public function wishList(){
        $this->hasOne(WishList::class);
      }

      public function reviews(){
        $this->hasMany(Review::class);
      }

      public function roles(){
        return $this->belongsToMany(Role::class);
      }

      public function formattedName(){
        return $this->first_name.' '.$this->last_name;
      }


}



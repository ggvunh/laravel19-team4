<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use Notifiable;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['username', 'first_name', 'last_name', 'password', 'address','country', 'province', 'city', 'role', 'deposit', 'gender'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function bookings()
    {
        return $this->hasMany('App\Booking', 'user_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
	protected $table = 'bookings';
	protected $fillable = ['id', 'booking_code','check_in_date','check_out_date','status','cancelled_date','user_id'];

    public function user()
    {
    	return $this->belongsTo('App\User', 'user_id');
    }

        public function bookRooms()
    {
        return $this->hasMany('App\Book_Room');
    }
}
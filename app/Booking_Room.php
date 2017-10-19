<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking_Room extends Model
{   
    protected $table = 'booking_rooms';
    protected $fillable = ['room_id','booking_id'];

    public function bookings()
    {
        return $this->belongsTo('App\Booking');
    }

    public function room()
    {
        return $this->belongsTo('App\Room');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking_Room extends Model
{
    protected $fillable = ['room_id','booking_id'];

    public function room()
    {
        return $this->belongsTo('App\Room', 'room_id','id');
    }

    public function booking()
    {
    	return $this->belongsTo('App\Booking','booking_id','id');
    }

    public function bookService()
    {
    	return $this->belongsTo('App\Book_Room_Service');
    }
}

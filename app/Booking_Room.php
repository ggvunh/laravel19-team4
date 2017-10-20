<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking_Room extends Model
{
    protected $table = 'booking_rooms';
    protected $fillable = ['room_id', 'booking_id'];

    public function service()
    {
        return $this->belongsToMany('App\Service','book_room_services', 'book_room_id', 'service_id')->withPivot('quantity');
    }
    public function booking()
    {
        return $this->belongsTo('App\Booking','booking_id');
    }   
    public function room()
    {
        return $this->belongsTo('App\Room','room_id');
    }
}

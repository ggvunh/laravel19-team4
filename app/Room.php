<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';

    protected $fillable = ['id', 'room_name', 'room_price', 'room_status', 'description', 'amount_people', 'room_type_id', 'image', 'image_2', 'image_3'];

    public function room_types()
    {
        return $this->belongsTo('App\Room_Type' , 'room_type_id');
    }
    
    public function bookings()
    {
        return $this->belongsToMany('App\Booking', 'book_rooms');
    }
    // Booking Management
    public function bookRooms()
    {
        return $this->hasMany('App\Book_Room','room_id');
    }

    public function people()
    {
        return $this->belongsTo('App\People' , 'mount_people_id');
    }
}

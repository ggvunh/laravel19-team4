<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable =['name', 'price', 'type'];

    public function booking_room_service()
    {
    	return $this->hasMany('App/Bookking_Room_Service');
    }
}

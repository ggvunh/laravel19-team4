<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable =['name', 'price', 'role' 'phone', 'addres', 'country', 'deposit'];

    public function booking_room_service()
    {
    	return $this->hasMany('app/Bookking_Room_Servic');
    }
}

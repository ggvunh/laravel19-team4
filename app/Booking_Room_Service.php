<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boongking_Room_Service extends Model
{
	protected $fillable = ['service_id', 'booking_room_id', 'quantity'];

	public function booking_room()
	{
		return $this->belongsTo('App\Booking_Room');
	}

	public function service()
	{
		return $this->belongsTo('App\Service');
	}
}

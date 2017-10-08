<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = ['code_name', 'promotion'];

	public function booking_room()
	{
		return $this->hasMany('app\Booking');
	}
}

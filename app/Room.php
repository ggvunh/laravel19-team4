<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class Room extends Model
{
	protected $table = 'rooms';
    protected $fillable = ['id','name','description','price','status','image','room_type_id','image_2','image_3'];

    public function room_type()
    {
    	return $this->belongsTo('App\Room_Type');
    }

    public function bookings()
    {
    	return $this->belongsToMany('App\Booking');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	protected $table = 'services';
    protected $fillable =['name', 'price', 'type'];

    public function bookroom()
    {
        return $this->belongsToMany('App\Booking_Room','book_room_services', 'book_room_id', 'service_id')->withPivot('quantity');
    }
}

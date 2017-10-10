<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_Image extends Model
{
    protected $fillable = ['id','url','room_id'];

    public function room()
    {
    	return $this->belongsTo('App\Room');
    }
}

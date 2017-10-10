<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['id','name','description','price','status','image','room_type_id'];

    public function room_type()
    {
    	return $this->belongsTo('App\Room_Type');
    }

    public function room_image()
    {
    	return $this->belongsTo('App\Room_Image');
    }
}

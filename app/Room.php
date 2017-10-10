<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['id','name','description','price','status','image','room_type_id'];

    public function room_types()
    {
    	return $this->hasMany('App\Room_Type');
    }

    public function room_images()
    {
    	return $this->hasMany('App\Room_Image');
    }
}

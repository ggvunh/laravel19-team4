<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room_Type extends Model
{
	protected $table = 'room_types';
    protected $fillable = ['id','name'];

    public function rooms()
    {
    	return $this->hasMany('App\Room');
    }
}

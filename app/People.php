<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'people';
    protected $fillable = ['id','name'];

    public function rooms()
    {
    	return $this->hasMany('App\Room', 'mount_people_id', 'id');
    }
}

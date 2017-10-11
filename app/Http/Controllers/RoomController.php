<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Room_Image;
use App\Room_Type;
use Illuminate\Support\Facades\Input;

class RoomController extends Controller
{
    public function getRooms()
    {
    	$rooms = Room::paginate(4);
    	return view('rooms.list_all_room', compact('rooms'));
    }


    public function showRoom(Room $room)
    {
        return view('rooms.detail_room', compact('room'));
    }


    public function searchRooms(Request $search)
    {
        $data = Input::all();
        if($data['keyword'] != '')
        {
        	$rooms = Room::where('name', 'like', '%'.$search->keyword.'%')
        				->paginate(4);
    					/**
    					->whereHas('room_types', function($query)
    					{
    						$query->where('name','like','%'.$search->keyword.'%');
    					})->paginate(4);
    					**/		
        	return view('rooms.search_result',compact('rooms','search'));
        }
        else
        {
            return redirect('/search');
        }
    }

}

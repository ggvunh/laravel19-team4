<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Room_Image;
use App\Room_Type;
use App\People;
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
    					->orwhereHas('room_type',function($query) use($search)
    					{
    						$query->where('name','like','%'.$search->keyword.'%');
    					})->paginate(4);

        	return view('rooms.search_result',compact('rooms','search'));
        }
        else
        {
            return redirect('/search');
        }
    }
    public function searchDate()
    {
        return view('admin.search.booking_date');
    }

//CRUD Room
    public function home()
    {
        return redirect('admin/room/index');
    }

    public function listroom()
    {
        $rooms = Room::OrderBy('id' , 'desc')->paginate(9);
        return view('admin.room.index', compact('rooms'));
    }

    public function create()
    {
        $roomTypes = Room_type::all()->pluck('name','id');
        $peoples = People::all()->pluck('mount','id');
        return view('admin.room.create',compact('roomTypes', 'peoples'));
    }

    public function showdetailroom($id)
    {
        $room = Room::find($id);
        return view('admin.room.show', compact('room')); 
    }

    public function saveRoom(roomRequest $request)
    {
        $data = Input::except('image','images_2','images_3');
        $file = $request->file('image');
        $filename = $file->getClientOriginalExtension();
        $request->file = $filename;
        $image = time().".".$filename;
        $destinationPath = public_path('/images/upload/rooms');
        $file->move($destinationPath, $image);
        $data['image'] = $image;
        if ($request->hasFile('images_3') )
        {    
            $file1 = $request->file('images_3');
            $filename1 = $file1->getClientOriginalExtension();
            $request->file = $filename1;
            $images_3 = time().".".$filename;
            $destinationPath1 = public_path('/images/upload/rooms');
            $file1->move($destinationPath1, $images_3);
            $data['images_3'] = $images_3;
        }

        if ($request->hasFile('images_2') )
        {    
            $file2 = $request->file('images_2');
            $filename2 = $file2->getClientOriginalExtension();
            $request->file = $filename2;
            $images_2 = time().".".$filename;
            $destinationPath2 = public_path('/images/upload/rooms');
            $file2->move($destinationPath2, $images_2);
            $data['images_2'] = $images_2;
        }

        $room = Room::create($data);
        return redirect('admin/room/')->withSuccess('Room has been created');
    }

        public function editRoom(Room $room)
    {
        $roomTypes=Room_type::all()->pluck('name','id');
        $peoples = People::all()->pluck('mount','id');
        dd($room);
        return view('admin.room.edit' ,compact('roomTypes','peoples','room'));
    }

}

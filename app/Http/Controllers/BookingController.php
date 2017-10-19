<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Booking;
use App\Room;
use App\Booking_Room;
use App\Room_Type;

class BookingController extends Controller
{
    public function showRoom(Room $room)
    {
        return view('hotels.bookings.detail_room', compact('room'));
    }


    public function searchRooms(Request $request)
    {
        $data = Input::all();
        $checkin = $data['checkin']; 
	  	$from = date("Y-m-d", strtotime($checkin));
		$checkout = $data['checkout'];
		$to = date("Y-m-d", strtotime($checkout));

        $rooms = Room::where('status', '=', '1' )
    			->whereDoesntHave('bookings', function($query) use($from){
    				$query->where('check_in_date', '>=', $from);})	
  				->whereDoesntHave('bookings', function($query) use($to){
    				$query->where('check_in_date', '>=', $to);})
    			->whereDoesntHave('bookings', function($query) use($from){
    				$query->where('check_out_date', '<=', $from);})
    			->whereDoesntHave('bookings', function($query) use($to){
    				$query->where('check_out_date', '<=', $to);})
    			->paginate(4);

    	return view('hotels.bookings.search_result',compact('rooms'));
       	
    }
}

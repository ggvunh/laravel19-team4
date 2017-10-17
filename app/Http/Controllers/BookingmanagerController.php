<?php

namespace App\Http\Controllers;
use App\Booking;
use App\Room;
use Illuminate\Http\Request;
use App\Booking_Room;
use App\User;

class BookingmanagerController extends Controller
{
	public function home()
  	{
    	return redirect('admin/managerbooking/index');
  	}

    public function getBooking()
    {
    	$dem = 1;
    	$bookings = Booking::all();
    	return view('admin.bookingmanager.index', compact('dem', 'bookings'));
    }

    public function show($id)
    {
      $bookings = Booking::find($id);
      return view('admin.bookingmanager.show', compact(['bookings']));
    }
}

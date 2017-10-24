<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Toastr;
use App\Booking;
use App\Room;
use App\Booking_Room;
use App\Room_Type;
use Cart;
use Twilio;

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


    public function add($id)
    {
        $room = Room::find($id);
        $room_price = (double)$room->price;
        Cart::add(
            [
                'id' => $room->id, 'qty'=> '1', 'name' => $room->name, 'price' => $room_price, 'option' => 
                [
                    'room_type' => $room->room_type->name
                ]
            ]);
        $content = Cart::content();
        //print_r($content);
        //Toastr::success('Thêm vào list booking thành công', $title = null, $options = []);
        return view('hotels.bookings.checkout',compact('content'));
    }

    public function checkout()
    {
        $content = Cart::content();
        return view('hotels.bookings.payment',compact('content'));
    }

    public function delete($rowId)
    {
        \Cart::remove($rowId);
        return redirect('/cart/checkout');
    }

    public function payment(Request $request)
    {
        $data = Input::all();
        $arrival = date("Y-m-d",strtotime($request->session()->get('checkin')));
        $departure = date("Y-m-d",strtotime($request->session()->get('checkout')));
        $booking = new Booking();
        $booking->booking_code = str_random(6);
        $booking->check_in_date =  $arrival;
        $booking->check_out_date = $departure;
        $booking->total = (double)Cart::total();
        $booking->save();
        foreach (Cart::content() as $row) 
        {
          $booking_room = new Booking_Room();
          $booking_room->room_id = $row->id;
          $booking_room->booking_id = $booking->id;
          $booking_room->save();
        }

        Twilio::message('+841287799410',"Save thanh cong booking");

        echo "Payment thanh cong";
    }
}

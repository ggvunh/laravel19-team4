@extends('layouts.master')

@section('content')

<div class="container">
<div class="row">
@foreach($rooms as $room)
  <div class="col-sm-6 wowload fadeInUp">
    <div class="rooms">
      <a href="{{ url('available/rooms/'. $room->id) }}"><img src="{{url('images/photos/'.$room->image)}}" class="img-responsive">
      <div class="info"><h3>Luxirious Suites</h3>
        <p> Name: {{$room->name}}<br>
						Description: {{$room->description}}<br>
    				Price: {{$room->price}}$<br>
    				Room Type: {{$room->room_type_id}}</p><a href="{{ url('rooms/' . $room->id) }}" class="btn btn-default">Check Details</a> <a href="{!! url('/cart/'.$room->id.'/add') !!}" class="btn btn-default">Book Now</a>
      </div>
    </div>
</div>
@endforeach
</div>
</div>


@stop
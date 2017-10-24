@extends('layouts.master')

@section('content')

<div class="container">
<div class="row">
@foreach($rooms as $room)
  <div class="col-sm-6 wowload fadeInUp">
    <div class="rooms">
      <img src="images/photos/8.jpg" class="img-responsive">
      <div class="info"><h3>Luxirious Suites</h3>
        <p> Name: {{$room->name}}<br>
								Description: {{$room->description}}<br>
		        				Status: {{$room->status}}<br>
		        				Room Type: {{$room->room_type_id}}</p><a href="room-details.php" class="btn btn-default">Check Details</a>
      </div>
    </div>
</div>
@endforeach
</div>
</div>


@stop

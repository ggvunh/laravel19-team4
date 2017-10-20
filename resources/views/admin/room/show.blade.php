@extends('layouts.admin')
@section('header')
@stop
@section('content')
	<h1>Room {!!$room->name!!}</h1>
	<li style="list-style: none;">
			<a href="{{url('admin/room/'.$room->id.'/edit')}}" ><i class="fa fa-edit"></i>Edit</a> - <a href="{{url('admin/room'.$room->id.'/delete')}}"><i class="fa fa-trash"></i>Delete</a>
	</li>	
	<img src="{!!url('/images/upload/rooms/'.$room->images)!!}" alt="" style='width: 550px; height: 30s0px; border:5px solid gray;''>

	<ul>
		<li><strong>Room Type:    </strong><span class="label label-warning" >@if ($room->room_types->id == 1) VIP @elseif($room->room_types->id == 2) Deluxe @else Family  @endif</span></li>
		<li><strong>Price: </strong>{{$room->price}} $</li>
		<li><strong>Status: {!!$room->status ? '<span class="label label-success">Available</span>' : '<span class="label label-danger">Not Available</span>'!!}</strong></li>
		<li><strong>Amount Person: <span>@if ($room->people->id == 1) Room for 2 persons @elseif($room->people->id == 2) Room for 4 persons @else Room for 6 persons  @endif</span></strong></li>
		<li>
			<strong>Decription:  {!!$room->description!!} </strong>
		</li>
	</ul>
	
@stop
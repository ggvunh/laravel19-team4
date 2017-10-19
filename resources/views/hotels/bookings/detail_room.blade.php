@extends('layouts.master')

@section('content')
	<div class="tm-white-bg section-padding-bottom">
	
		<div class="container">
		<div class="detail">
				<div class="row">
				<h1>This is Room {{$room->name}}</h1><br>
				<table>
				<tr>
					<td><img src="{{url('img/'.$room->image)}}" alt="image" class="img-responsive"></td>
					<td>
						<h4>Name: {{$room->name}}<br></h4>
						<h4>Description: {{$room->description}}<br></h4>
        				<h4>Status: {{$room->status}}<br></h4>
        				<h4>Room Type: {{$room->room_type->name}}<br></h4>	
    				</td>
				</tr>
				</table>
				</div>
		</div>
	</div>
	</div>
@stop
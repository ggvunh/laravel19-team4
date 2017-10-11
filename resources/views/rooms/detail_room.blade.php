@extends('layouts.master')

@section('content')
	<div class="tm-white-bg section-padding-bottom">
		<div class="container">
				<div class="row">
				<table>
				<tr>
					<td><img style="width:250px; height:225px;"src="{{url('img/'.$room->image)}}" alt="image" class="img-responsive"></td>
					<td>
						<b><p>Name: {{$room->name}}<br></p></b>
						<b><p>Description: {{$room->description}}<br></p></b>
        				<b><p>Status: {{$room->status}}<br></p></b>
        				<b><p>Room Type: {{$room->status}}<br></p>	</b>
    				</td>
				</tr>
				</table>
				</div>
		</div>
	</div>
@stop
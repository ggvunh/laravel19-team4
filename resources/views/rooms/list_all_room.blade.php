@extends('layouts.master')

@section('content')
	<section class="tm-white-bg section-padding-bottom">
		<div class="container">
				<div class="row">
					<div class="tm-section-header section-margin-top">
						<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
						<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">List of Rooms</h2></div>
						<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
					</div>
					@foreach ($rooms as $room)
					<div class="col-lg-6">
						<div class="tm-home-box-3">
							<div class="tm-home-box-3-img-container">
								<a href="{{ url('rooms/' . $room->id) }}"><img style="width:250px; height:225px;" src="{{url('img/'.$room->image)}}" alt="image" class="img-responsive"></a>
							</div>						
							<div class="tm-home-box-3-info">
								<p class="tm-home-box-3-description">Name: {{$room->name}}<br>
								Description: {{$room->description}}<br>
		        				Status: {{$room->status}}<br>
		        				Room Type: {{$room->room_type_id}}<br>
								</p>
						        <div class="tm-home-box-2-container">
									<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
									<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3">Price: {{$room->price}} <br></span></a>
									<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
								</div>
							</div>						
						</div>					
			     	</div>
		     		@endforeach
				</div>
		</div>
		<div style="text-align:center;">{{$rooms->links()}}</div>
	</section>


@stop
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
		<meta charset="UTF-8">
  	<title>Hotel</title>
  	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  	<link href="css/font-awesome.min.css" rel="stylesheet">
  	<link href="css/bootstrap.min.css" rel="stylesheet">
  	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
  	<link href="css/flexslider.css" rel="stylesheet">
  	<link href="css/templatemo-style.css" rel="stylesheet">
  	<link href="css/login.css" rel="stylesheet">
  	<link href="css/bookingform/normalize.css.css" rel="stylesheet">
  	<link href="css/bookingform/main.css" rel="stylesheet">
  	<link href="css/booking.css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
  	<script type="text/javascript" src="js/moment.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>
		<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
   	<script type="text/javascript" src="js/templatemo-script.js"></script>
   	<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
		<link  href = " //cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css "  rel = " stylesheet " >
		<script  src = " //cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js " > </script>
		<script  src = " //cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js " > </script>
		{!! Toastr :: render () !!}
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- CSRF Token -->
	  <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="tm-gray-bg">

  	<div class="tm-header">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-4 col-md-4 col-sm-3 tm-site-name-container">
  					<a href="{{url('/')}}" class="tm-site-name">Hotel</a>
  				</div>
	  			<div class="col-lg-7 col-md-8 col-sm-9" >
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav">
						<ul>
							<li><a href="{{ '/' }}" class="active">Home</a></li>
							<li><a href="#">Our Rooms</a></li>
							<li><a href="{{ 'booking' }}">Booking</a></li>
							@if (Auth::guest())
									<li><a href="{{url('/login')}}" class="login">Login</a></li>
									<li><a href="{{url('/register')}}" class="login">Register</a></li>
							@else
									<ul class="nav navbar-nav navbar-right">

														<li class="dropdown">
																<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
																		{{ Auth::user()->last_name }} <span class="caret"></span>
																</a>
																<ul class="dropdown-menu" role="menu">
																		<li>
																				<a href="{{ route('logout') }}"
																						onclick="event.preventDefault();
																										 document.getElementById('logout-form').submit();">
																						Logout
																				</a>

																				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																						{{ csrf_field() }}
																				</form>
																		</li>
																		
																</ul>
														</li>
									</ul>
							@endif
						</ul>
					</nav>
	  			</div>
  			</div>
  		</div>
  	</div>

	@yield('content')

	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; 2084 Your Company Name

                | Designed by <a rel="nofollow" href="http://www.templatemo.com" target="_parent">templatemo</a></p>
			</div>
		</div>
	</footer>

</body>
</html>

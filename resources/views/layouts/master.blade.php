<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  	<title>Hotel</title>
  	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
  	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  	<link href="{{asset('css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
  	<link href="{{asset('css/flexslider.css')}}" rel="stylesheet">
  	<link href="{{asset('css/templatemo-style.css')}}" rel="stylesheet">
  	<link href="{{asset('css/login.css')}}" rel="stylesheet">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{asset('js/jquery-1.11.2.min.js')}}"></script>
  	<script type="text/javascript" src="{{asset('js/moment.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.flexslider-min.js')}}"></script>
   	<script type="text/javascript" src="{{asset('js/templatemo-script.js')}}"></script>
   	<script type="text/javascript" src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
	<link  href = " //cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"  rel =" stylesheet" >
	<script  src = " //cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js " > </script>

</head>
<body class="tm-gray-bg">
	{!! Toastr :: render () !!}
  	<div class="tm-header">
  		<div class="container">
  			<div class="row">
  				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
  					<a href="{{url('/')}}" class="tm-site-name">Hotel</a>
  				</div>
	  			<div class="col-lg-6 col-md-8 col-sm-9">
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav">
						<ul>
							<li><a href="{{ url('/')}}" class="active">Home</a></li>
							<li><a href="{{ url('search') }}">Search</a></li>
							<li><a href="{{ url('booking') }}">Booking</a></li>
							<li><a href="{{ url('login') }}">Login</a></li>
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
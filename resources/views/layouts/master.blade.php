<!DOCTYPE html>
<html lang="en">
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

</head>
<body class="tm-gray-bg">
	
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
							<li><a href="{{ '/' }}" class="active">Home</a></li>
							<li><a href="#">Our Rooms</a></li>
							<li><a href="{{ 'booking' }}">Booking</a></li>
							<li><a href="{{ 'login' }}">Login</a></li>
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
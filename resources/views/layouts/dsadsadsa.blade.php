<!DOCTYPE html>
<html lang="en">
<head>
	<title>The Paradise-Hotel Website Template | Hotel :: w3layouts</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<!--start slider -->
	<link rel="stylesheet" href="{{asset('css/fwslider.css')}}" media="all">
	<script src="{{asset('js/jquery-ui.min.js')}}"></script>
	<script src="{{asset('js/css3-mediaqueries.js')}}"></script>
	<script src="{{asset('js/fwslider.js')}}"></script>
	<!--end slider -->
	<!---strat-date-piker---->
	<link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}" />
	<script src="{{asset('js/jquery-ui.js')}}"></script>
			  <script>
					  $(function() {
					    $( "#datepicker,#datepicker1" ).datepicker();
					  });
			  </script>
	<!---/End-date-piker---->
	<link type="text/css" rel="stylesheet" href="{{asset('css/JFGrid.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('css/JFFormStyle-1.css')}}" />
			<script type="text/javascript" src="{{asset('js/JFCore.js')}}"></script>
			<script type="text/javascript" src="{{asset('js/JFForms.js')}}"></script>
			<!-- Set here the key for your domain in order to hide the watermark on the web server -->
			<script type="text/javascript">
				(function() {
					JC.init({
						domainKey: ''
					});
					})();
			</script>
	<!--nav-->
	<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();

				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});

				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
	</script>
	<link  href = " //cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"  rel =" stylesheet" >
	<script  src = " //cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js " > </script>

</head>
<body> 
{!! Toastr :: render () !!}
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.html"><img src="images/logo.png" alt=""></a>
		</div>
		<div class="h_right">
			<!--start menu -->
			<ul class="menu">
				<li class="active"><a href="index.html">hotel</a></li> |
				<li><a href="rooms.html">rooms & suits</a></li> |
				<li><a href="reservation.html">reservation</a></li> |
				<li><a href="activities.html">activities</a></li> |
				<li><a href="contact.html">contact</a></li>
				<div class="clear"></div>
			</ul>
			<!-- start profile_details -->
					<form class="style-1 drp_dwn">
						<div class="row">
							<div class="grid_3 columns">
								<select class="custom-select" id="select-1">
									<option selected="selected">EN</option>
									<option>USA</option>
									<option>AUS</option>
									<option>UK</option>
									<option>IND</option>
								</select>
							</div>		
						</div>		
					</form>
		</div>
		<div class="clear"></div>
		<div class="top-nav">
		<nav class="clearfix">
				<ul>
				<li class="active"><a href="index.html">hotel</a></li> 
				<li><a href="rooms.html">rooms & suits</a></li> 
				<li><a href="reservation.html">reservation</a></li> 
				<li><a href="activities.html">activities</a></li> 
				<li><a href="contact.html">contact</a></li>
				</ul>
				<a href="#" id="pull">Menu</a>
			</nav>
		</div>
	</div>
</div>
</div>

@yield('content')

<div class="footer_bg">
<div class="wrap">
<div class="footer">
			<div class="copy">
				<p class="link"><span>© All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
			</div>
			<div class="f_nav">
				<ul>
					<li><a href="index.html">home</a></li>
					<li><a href="rooms.html">rooms & suits</a></li>
					<li><a href="reservation.html">reservation</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="soc_icons">
				<ul>
					<li><a class="icon1" href="#"></a></li>
					<li><a class="icon2" href="#"></a></li>
					<li><a class="icon3" href="#"></a></li>
					<li><a class="icon4" href="#"></a></li>
					<li><a class="icon5" href="#"></a></li>
					<div class="clear"></div>
				</ul>	
			</div>
			<div class="clear"></div>
</div>
</div>
</div>		
</body>
</html>
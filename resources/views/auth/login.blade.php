
    <!DOCTYPE html>
    <html lang="en">
        <head>
    		<meta name="viewport" content="width=device-width, initial-scale=1">


    		<!-- Website CSS style -->
    		<link href="css/bootstrap.min.css" rel="stylesheet">

    		<!-- Website Font style -->
    	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    		<link rel="stylesheet" href="style.css">
    		<!-- Google Fonts -->
    		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
        <link href="css/login1.css" rel="stylesheet">

    		<title>Admin</title>

    	</head>
    	<body>
    		<div class="container">
    			<div class="row main">
    				<div class="main-login main-center">
    				<h5>Sign in.</h5>
    					<form class="" method="post" action="{{ route('login') }}"> {{ csrf_field() }}

    						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    							<label for="email" class="cols-sm-2 control-label">Your Email</label>
    							<div class="cols-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
    									<input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Enter your Email" required autofocus/>
                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                    </div>
    							</div>
    						</div>

    						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    							<label for="password" class="cols-sm-2 control-label">Password</label>
    							<div class="cols-sm-10">
    								<div class="input-group">
    									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
    									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required/>
                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                    </div>
    							</div>
    						</div>

                <div class="form-group">
                                 <div class="col-md-6 col-md-offset-4">
                                     <div class="checkbox">
                                         <label>
                                             <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                         </label>
                                     </div>
                                 </div>
                             </div>

    						<div class="form-group ">
                  <div class="">
                      <button target="_blank" type="submit" class="btn btn-primary btn-lg btn-block login-button">
                          Login
                      </button>
                  </div>

    						</div>

    					</form>
    				</div>
    			</div>
    		</div>

    		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    	</body>
    </html>

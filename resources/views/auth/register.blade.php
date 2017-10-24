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
    <link href="css/register.css" rel="stylesheet">
		<title>Admin</title>

	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Sign up once and watch any of our free demos.</h5>
					<form class="" method="post" action="{{ route('register') }}"> {{ csrf_field() }}

            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
							<label for="name" class="cols-sm-2 control-label">First Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="first_name" id="first_name" value="{{ old('username') }}"  placeholder="Enter your First Name"/>
                  @if ($errors->has('first_name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('first_name') }}</strong>
                      </span>
                  @endif
                </div>
							</div>
						</div>

            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
							<label for="name" class="cols-sm-2 control-label">Last Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="last_name" id="last_name" value="{{ old('last_name') }}"  placeholder="Enter your Last Name"/>
                  @if ($errors->has('last_name'))
                      <span class="help-block">
                          <strong>{{ $errors->first('last_name') }}</strong>
                      </span>
                  @endif
                </div>
							</div>
						</div>

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Enter your Email"/>
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
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
							</div>
						</div>

						<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password_confirmation" id="confirm"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>

            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
							<label for="name" class="cols-sm-2 control-label">Phone</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="number" class="form-control" name="phone" id="name" value="{{ old('phone') }}"  placeholder="Enter your phone"/>
                  @if ($errors->has('phone'))
                      <span class="help-block">
                          <strong>{{ $errors->first('phone') }}</strong>
                      </span>
                  @endif
                </div>
							</div>
						</div>

            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
							<label for="name" class="cols-sm-2 control-label">Address</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="address" id="name" value=""  placeholder="Enter your address"/>
                  @if ($errors->has('address'))
                      <span class="help-block">
                          <strong>{{ $errors->first('address') }}</strong>
                      </span>
                  @endif
                </div>
							</div>
						</div>

            <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
              <label for="name" class="cols-sm-2 control-label">Country</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="country" id="name" value=""  placeholder="Enter your Country"/>
                  @if ($errors->has('address'))
                      <span class="help-block">
                          <strong>{{ $errors->first('address') }}</strong>
                      </span>
                  @endif
                </div>
              </div>
            </div>

            <div class="form-group">
                    <label for="gender" class="cols-sm-2 control-label">Gender</label> </br>
                    <div class="cols-sm-10">
                            <input type="radio" name="gender" value="0" checked> Male
                            <input type="radio" name="gender" value="1"> Female
                    </div>
            </div>

						<div class="form-group ">
              <div class="">
                  <button target="_blank" type="submit" class="btn btn-primary btn-lg btn-block login-button">
                      Register
                  </button>
              </div>
                <!-- <a href="" target="_blank" type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button">Register</a> -->
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

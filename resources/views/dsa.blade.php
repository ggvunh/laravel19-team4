<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>dsadsada</title>
	<link href="{{asset('assets/bootstrap.min.css')}}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- bootstrap -->
    <link href="{{asset('assets/bootstrap-datepicker.min.css')}}" rel="stylesheet">

	<!-- boostrap -->
    <script type="text/javascript" src="{{asset('assets/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/bootstrap-datepicker.min.js')}}"></script>
</head>
<body>
<div class="container">
 		<div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').data("DateTimePicker").FUNCTION();
            });
            $('#datepicker1').datepicker({
		      autoclose: true
		    })
        </script>

    </div>
</div>
</body>
</html>
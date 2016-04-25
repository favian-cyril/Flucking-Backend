<!DOCTYPE html>
<html lang= "en">
<head>
	<!-- Bootstrap -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

	<!-- Custom CSS -->
	<title>FLUCKING</title>
	<link href="{{url('public/css/style-index.css')}}" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{url('public/css/font-awesome.min.css')}}">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

	<!-- Navbar -->
	<div class = "navbar navbar-default navbar-fixed-top" role = "naviigation">
		<div class= "container">
			<div class = "navbar-header">
				<button type = "button" class = "navbar-toggle" data-toggle= "collapse" data-target = ".navbar-collapse">
					<span class = "sr-only">Toggle Navigation</span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
					<span class = "icon-bar"></span>
				</button>
			</div>
			<div class = "navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right pixelar">
					<li><a href= "#">About</a></li>
					<li><a href= "#">Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Body -->
    <div class="container text-center">
			@if ($errors->has('email'))
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				Wrong username or password.
			</div>
			@endif
    	<div class = "row">
			<img src="{{url('public/img/roulette.png')}}"  style = "padding:10px;">
		</div>
		<div class = "row">
			<img src="{{url('public/img/click.png')}}" href = "#register" data-toggle = "modal">
		</div>
		<!-- Login Box -->
			<!-- Form Start -->
			<form class = " form-horizontal login-box" role = "form" method="POST" action="{{ url('/login') }}">
			{!! csrf_field() !!}
				<div class = "form-group">
					<label for = "email">Email :</label>
					<input type = "text" id = "name" style ="background-color:transparent; border: none;" value="{{ old('email') }}" name="email">

				</div>
				<div class = "form-group">
					<label for = "password">Password :</label>
					<input type = "password" id = "password" style ="background-color:transparent; border: none;" name="password">
				</div>

		<div class = "row">
			<input type="image" src="{{url('public/img/flucking.png')}}" alt="Submit">
			</form> <!-- Form End -->
		</div>
    </div>


	<!-- Register -->
	<div class = "modal fade" id = "register" role = "dialog">
		<div class = "modal-dialog">
			<div class = "modal-content">
				<form class = "form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
					{!! csrf_field() !!}

					<div class = "modal-header">
						<h4> Register</h4>
					</div>
					<div class = "modal-body">
						<div class = "form-group">
							<label for = "name" class = "col-sm-4 control-label">Name</label>
							<div class="col-sm-7">
								<input type = "text" class = "form-control input-sm" id = "name" name="name">
							</div>
						</div>
						<div class = "form-group">
							<label for = "fluckerID" class = "col-sm-4 control-label">Flucker ID</label>
							<div class="col-sm-7">
								<input type = "text" class = "form-control input-sm" id = "fluckerID" name="fluckerid">
							</div>
						</div>
						<div class = "form-group">
							<label for = "age" class = "col-sm-4 control-label">Age</label>
							<div class="col-sm-7">
								<input type = "text" class = "form-control input-sm" id = "age" name="age">
							</div>
						</div>
						<div class = "form-group">
							<label for = "email" class = "col-sm-4 control-label">Email</label>
							<div class="col-sm-7">
								<input type = "text" class = "form-control input-sm" id = "email" name="email">
							</div>
						</div>
						<div class = "form-group">
							<label for = "headquarter" class = "col-sm-4 control-label">Headquarter</label>
							<div class="col-sm-7">
								<select class = "form-control input-sm" id = "headquarter" name="headquarter">
									<option value"Aceh">Aceh</option>
									<option value"Bali">Bali</option>
									<option value"Banten">Banten</option>
									<option value"Bengkulu">Bengkulu</option>
									<option value"Gorontalo">Gorontalo</option>
									<option value"Jakarta" selected>Jakarta</option>
									<option value"Jambi">Jambi</option>
									<option value"Jabarat">Jawa Barat</option>
									<option value"Jatengah">Jawa Tengah</option>
									<option value"Jatimur">Jawa Timur</option>
									<option value"Kalbarat">Kalimantan Barat</option>
									<option value"Kalselatan">Kalimantan Selatan</option>
									<option value"Kaltengah">Kalimantan Tengah</option>
									<option value"Kaltimur">Kalimantan Timur</option>
									<option value"Kalutara">Kalimantan Utara</option>
									<option value"Bangka">Kepulauan Bangka Belitung</option>
									<option value"Kelriau">Kepulauan Riau</option>
									<option value"Lampung">Lampung</option>
									<option value"Maluku">Maluku</option>
									<option value"Malutara">Maluku Utara</option>
									<option value"Nusabar">Nusa Tenggara Barat</option>
									<option value"Nusatim">Nusa Tenggara Timur</option>
									<option value"Papua">Papua</option>
									<option value"Papbarat">Papua Barat</option>
									<option value"Riau">Riau</option>
									<option value"Sulabarat">Sulawesi Barat</option>
									<option value"Sulatenggara">Sulawesi Tenggara</option>
									<option value"Sulautara">Sulawesi Utara</option>
									<option value"Sumselatan">Sumatera Selatan</option>
									<option value"Sumutara">Sumatera Utara</option>
									<option value"Yogya">Daerah Istimewa Yogyakarta</option>
								</select>
							</div>
						</div>
						<div class = "form-group">
							<label for = "password" class = "col-sm-4 control-label">Password</label>
							<div class="col-sm-7">
								<input type = "password" class = "form-control input-sm" id = "password" name="password">
							</div>
						</div>
						<div class = "form-group">
							<label for = "confirm-password" class = "col-sm-4 control-label">Confirm Password</label>
							<div class="col-sm-7">
								<input type = "password" class = "form-control input-sm" id = "confirm-password" name="password_confirmation">
							</div>
						</div>
						<div class = "form-group">
							<label for = "hint" class = "col-sm-4 control-label">Hint</label>
							<div class="col-sm-7">
								<input type = "text" class = "form-control input-sm" id = "hint" name="hint">
							</div>
						</div>
						<div class="checkbox">
  							<label><input type="checkbox" value="">I have read the terms & conditions</label>
						</div>
					</div>

					<div class = "modal-footer">
						<a class = "btn btn-default" data-dismiss = "modal">Close</a>
						<button type ="submit" class = "btn btn-primary">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="public/js/bootstrap.min.js"></script>
</body>
</html>

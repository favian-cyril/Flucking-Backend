<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="public/css/simplePagination.css"/>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="public/js/jquery.simplePagination.js"></script>
    <link href="public/css/navbar.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="16x16" href="public/img/favicon.png">
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>
	    <a class="navbar-brand" href="#"><img src="{{url('public/img/roulette.png')}}" style="width: 40px; height: 40px" /></a>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li><a href="#"><img src="{{url('public/img/house_logo.png')}}" style = "width:20px; height:20px; "></a></li>
	        <li><a href="#"><img src="{{url('public/img/movie_roll.png')}}" style = "width:20px; height:20px; "></a></li>
	        <li><a href="#"><img src="{{url('public/img/friends_logo.png')}}" style = "width:20px; height:20px; "></a></li>
	      </ul>
	      <form class="navbar-form navbar-left" role="search" action="/search" method="get">
	        <div class="input-group">
	            <input type="text" class="form-control" placeholder="Search movie or genre" name="s" />
              <input type="hidden" name="p" value="1"/>
	            <span class="input-group-btn" >
	                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
	            </span>
	        </div>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li>
            <a href="{{ url('/upload') }}" style="display:block;height:50px;width:50px;padding:0">
              <svg width="50" height="50">
                <defs>
                  <pattern id="image" patternUnits="userSpaceOnUse" height="50" width="50">
                    <image x="0" y="0" height="50" width="50" xlink:href="{{asset(Auth::user()->profilepict)}}"></image>
                  </pattern>
                </defs>
                <circle id='top' cx="25" cy="25" r="25" fill="url(#image)"/>
              </svg>
            </a>
          </li>
	        <li><a href="#"><img src="{{url('public/img/message_logo.png')}}" style = "width:20px; height:20px; "></a></li>
	        <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <img src="{{url('public/img/settings_logo.png')}}" style = "width:20px; height:20px; ">
            <span class="caret"></span>
            <ul class="dropdown-menu">
              <li><a href="/logout">Logout</a></li>
            </ul>
          </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

@yield('content')
</body>
</html>

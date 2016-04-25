@extends('layouts.app')

@section('content')
<style type="text/css">
.navbar-brand {
    position: absolute;
    width: 100%;
    left: 50%;
    bottom: 10px;
    text-align: center;
    margin-left: -50px !important;  /* 50% of your logo width */
    display: block;
}
.navbar-toggle {
    z-index:3;
}
.navbar-button{
  width: 20px;
  height: 20px;
}
body {
  background: url("public/img/background-3.png");
  padding-top: 4%;
}
.padding{
  padding: 10px 10px 10px 10px;
}

.margin{
  margin: 10px 10px 10px 10px;
}
@font-face {
    font-family: 'pixelar';
    src: url("fonts/pixelar.ttf");
}
p{
  display: inline;
  font-family: 'pixelar';
}
.container {
    /* remember to set a width */
    width: 70%;
    margin-right: auto;
    margin-left: auto;
}
.container-white{
  background: rgba(255, 255, 255, .6);
  border: solid 4px;
  border-radius: 10px;
  padding: 0px 30px 15px 30px;
}
.container-box{
  background: rgba(255,255,255, .8);
  border: solid 4px;
  border-radius: 10px;
  padding: 10px 10px 10px 10px;
}
.poster{
  width: 150px;
  height: 240px;
  text-align: center;
}
</style>
	<div class="container" style="background: rgba(255, 255, 255, .6); border: solid 4px; border-radius: 10px;">
		<div class="row row-margin">
				<div class="col-md-12">
					<h1>{{ $info['title'] }}</h1>
				</div>
		</div>
		<div class="row row-margin">
        <div class="row">
    			<div class="col-md-12">
    		      <ul style="list-style: none;">
              @if (count($genre) > 0)
    					@foreach ($genre as $g)
    					<li style="display: inline">{{ $g['name'] }},</li>
    					@endforeach
              @else
              <li style="display: inline">No genre listed</li>
              @endif
    				  <li style="display: inline">
    				  <span>|</span><span class="glyphicon glyphicon-star" style="color:gold"></span><span>{{ $info['vote_average'] }}/10</span>
              </li>
              </ul>
    			</div>
			</div>
		</div>
	  	<div class="row row-margin">
          <div class="col-md-4 ">
              @if ($info['poster_path'] != null)
  			  		<img class= "img-responsive center-block poster" src="http://image.tmdb.org/t/p/w500{{ $info['poster_path'] }}" style="margin-bottom: 10px; width: 150px; height: 240px; text-align: center;" class= "img-responsive center-block poster" alt= "Movie Poster">
              @else
              <img src="{{url('public/asset/not-found.jpeg')}}" style="margin-bottom: 10px; width: 150px; height: 240px; text-align: center;" class= "img-responsive center-block poster" alt= "Movie Poster">
              @endif
              <h5 class="text-center">{{ $info['title'] }}</h5>
  		  	</div>
			    <div class="col-md-8">
            @if (count($trailer) != 0)
			    	<div class="embed-responsive center-block"  style="width: 100%; height: 300px;">
				  		<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $trailer['key'] }}" alt = "Movie Video" allowfullscreen></iframe>
              </div>
            @else
            <p>No trailer available</p>
            @endif

			    </div>
		</div>
		<div class="row row-margin">
			  	<div class="col-md-4" >
			  		<div class="col-md-12" style="background: rgba(255,255,255, .8); border: solid 4px; border-radius: 10px; padding: 10px 10px 10px 10px;">
              @foreach ($cast['crew'] as $c)
                @if ($c['job'] == 'Director')
                <p>Director: {{$c['name']}}</p>
                @endif
              @endforeach
              <br>
              <p>Stars:</p>
              <ul>
                @if (count($cast['cast']) > 3)
                @for ($i=0; $i < 3; $i++)
                <li><p>{{$cast['cast'][$i]['name']}}</p></li>
                @endfor
                @else
                @for ($i=0; $i < count($cast['cast']); $i++)
                <li><p>{{$cast['cast'][$i]['name']}}</p></li>
                @endfor
                @endif
              </ul>
			  		</div>
			  	</div>
			    <div class="col-md-8">
			    	<div class="col-md-12 container-box">
			    		<p>{{ $info['overview'] }}</p>
			    	</div>
			    </div>
		</div>
		<div class="row row-margin">
			<div class = "col-md-8 col-md-offset-2">
			</div>
		</div>
	</div>

@endsection

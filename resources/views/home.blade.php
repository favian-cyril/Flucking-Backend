@extends('layouts.app')

@section('content')
<style type="text/css">
  .padding{
    padding: 10px 10px 10px 10px;
  }

  .margin{
    margin: 10em 10em 10em 10em;
  }
  .row-margin {
    margin-top: 10em;
    margin-bottom: 20em;
  }
  body{
    padding: 0 0 0 0;
  }
  p{
    display: inline;
    font-family: 'pixelar';
    text-align: center;
    font-size: 20px;
    font-weight: bold;
  }
  .comingsoon {
    background: url("public/img/comingsoon.png") no-repeat;
    background-size: 100%;
    min-width: 100%;
    min-height: 100%;
  }

  html,body,.container{
      height:100%;
  }

  .container{
      display:table;
      width: 100%;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      border: 1px solid black;
      padding: 0 0 0 0;
      margin: 0 0 0 0;
  }
  .row
  {
      height: 100%;
      min-height: 100% !important;
      display: table-row;
  }
  .col-md-6.no-float{
    display: table-cell;
      width: 50%;
      padding: 0 0 0 0;
      float: none; /* thanks baxabbit */
  }
  img.no-resize {
    min-height: 50px;
    min-width: 50px;
    max-height: 100px;
    max-width:100px;
  }
  .brown-box{
    padding: 10% 15px 15px 20px;
    background:  url('public/img/genresbackground.png');
  }
</style>
<!-- Body Container -->
<div class="container">
    <div class="row">
      <!-- Left Section -->
        <div class="col-md-6 no-float">
      <div class = "container text-center brown-box">
        <div class= "row">
          <div class = "col-md-12">
            <img src = "public/img/genres.png" class = "img-responsive center-block" alt = "genres">
          </div>
        </div>
        <div class= "row">
          <div class = "col-md-4">
            <a href="/genre?g=878&p=1"><img src = "public/img/scifi.png" class= "img-responsive img-genre center-block no-resize" alt= "futuristic"></a>
            <p> Futuristic </p>
          </div>
          <div class = "col-md-4">
            <a href="/genre?g=27&p=1"><img src = "public/img/thriller.png" class= "img-responsive img-genre center-block no-resize" alt= "paranoid"></a>
            <p> Paranoid </p>
          </div>
          <div class = "col-md-4">
            <a href="/genre?g=16&p=1"><img src = "public/img/day dreamer.png" class= "img-responsive img-genre center-block no-resize" alt= "chimeria"></a>
            <p> Chimeria </p>
          </div>
        </div>
        <div class= "row">
          <div class = "col-md-4">
            <a href="/genre?g=18&p=1"><img src = "public/img/lover.png" class= "img-responsive img-genre center-block no-resize" alt= "touchy-feely"></a>
            <p> Touchy Feely </p>
          </div>
          <div class = "col-md-4">
            <a href="/genre?g=35&p=1"><img src = "public/img/comedy.png" class= "img-responsive img-genre center-block no-resize" alt= "rib tickling"></a>
            <p> Rib Tickling </p>
          </div>
          <div class = "col-md-4">
            <a href="/genre?g=14&p=1"><img src = "public/img/fantasy siang.png" class= "img-responsive img-genre center-block no-resize" alt= "mythical"></a>
            <p> Mythical </p>
          </div>
        </div>
        <div class= "row">
          <div class = "col-md-4">
            <a href="/genre?g=28&p=1"><img src = "public/img/medal of honor.png" class= "img-responsive img-genre center-block no-resize" alt= "invincible"></a>
            <p> Invincible </p>
          </div>
          <div class = "col-md-4">
            <a href="/genre?g=10749&p=1"><img src = "public/img/hopeless romantic.png" class= "img-responsive img-genre center-block no-resize" alt= "something about us"></a>
            <p> Something About Us </p>
          </div>
          <div class = "col-md-4">
            <a href="/genre?g=9648&p=1"><img src = "public/img/mystery.png" class= "img-responsive img-genre center-block no-resize" alt= "mindfluck"></a>
            <p> Mindfluck </p>
          </div>
        </div>
        <div class= "row">
          <div class = "col-md-4 col-md-offset-4">
            <a href="/genre?g=53&p=1"><img src = "public/img/coldblooded.png" class= "img-responsive img-genre center-block no-resize" alt= "adrenaline rush"></a>
            <p> Adrenaline Rush </p>
          </div>
        </div>
      </div>
        </div>
        <!-- Right Section -->
        <div class="col-md-6 no-float">
          <div class="container text-center">
            <div class="comingsoon"></div>
          </div>
        </div>
    </div>
</div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
@endsection

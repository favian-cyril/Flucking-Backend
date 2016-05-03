@extends('layouts.app')

@section('content')

@if (Session::has('status'))
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('status')}}
</div>
@endif
<form method="POST" action="/apply/upload" accept-charset="UTF-8" enctype="multipart/form-data">
{!! csrf_field() !!}
<input name="fileToUpload" type="file">
<input class="send-btn" type="submit" value="Submit">
</form>

@endsection

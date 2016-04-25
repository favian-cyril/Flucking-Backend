@extends('layouts.app')

@section('content')

<form method="POST" action="http://localhost:8000/apply/upload" accept-charset="UTF-8" enctype="multipart/form-data">
{!! csrf_field() !!}
<input name="fileToUpload" type="file">
<input class="send-btn" type="submit" value="Submit">
</form>

@endsection

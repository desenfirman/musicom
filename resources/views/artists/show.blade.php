@extends('layouts.master')

@section('content')
<br><br><br>
<?php $albums = $artist->albums;?>
<h1>{{$artist->name}}</h1>

@foreach($albums as $album)
<h3>
	<a href="/albums/{{ $album->id}}" style="text-decoration: none">{{$album->title}}</a>
</h3>
@endforeach


@endsection


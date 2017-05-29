@extends('layouts.master')

@section('content')

<?php $albums = $artist->albums;?>
<br><br><br>
<section>
	<div class="container-playlist">
		<ul>
		<li ><a href="#">Albums by {{$artist->name}}</a></li>

		</ul>
	</div>
</section>

<div class="row">
	@foreach($albums as $album)
	<div class="col-sm-3" id="box" >
		<center>
			<div id="image" >
				<a href="/album/{{ $album->id}}"><img src="{{$album->album_image}}" style="max-height: 250px;" ></a>
			</div>
			<div id="name">
				<a style="text-decoration: none;" href="/album/{{$album->id}}">{{$album->title}}</a>
			</div>
			<br>
		</center>
	</div>
	@endforeach
</center>
</div>
</div>
<link href={{"/css/aralindex.css"}} rel="stylesheet">
@endsection

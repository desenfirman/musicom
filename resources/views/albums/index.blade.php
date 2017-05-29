@extends('layouts.master')


@section('content')

<br><br><br>


<section>
	<div class="container-playlist">
		<ul>
		<li ><a href="#">Albums</a></li>

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
			<div id="name"  style="text-decoration: none">
				<a href="/album/{{ $album->id}}">{{ $album->name}}</a>
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
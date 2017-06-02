@extends('layouts.master') @section('content')

<br><br>


<div class="row" >
	<div class="col-md-9 " >
		<div class="card" style="background-color: #f0f0f0;">
			<div class="container">
				@include('albums.albumlist')
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="card" style="background-color: #f0f0f0;">
			<div class="card-header danger-color-dark white-text">
				Featured
			</div>
				<img src="{{$albums[0]->album_image}}" alt="" class="img-fluid">
			<div class="card-block" style="padding-bottom: 3px;">
				<h4 class="card-title">{{$albums[0]->title}}</h4>
				<p class="card-text">Album by {{$albums[0]->artist->name}}</p>
        		<a href="/album/{{$albums[0]->id}}" class="btn btn-primary">Play now!</a>
				
			</div>
		</div>
	</div>
</div>


<link href={{"/css/aralindex.css"}} rel="stylesheet"> @endsection
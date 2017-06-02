@extends('layouts.master') @section('content')

<br><br>


<div class="row" >
	<div class="col-md-8 " >
		<div class="card" style="background-color: #f0f0f0;">
			<div class="container">
				@include('albums.albumlist')
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card" style="background-color: #f0f0f0;">
			<div class="container">
				<br>
				<h2>MUSICOM's Picks</h2>
				
			</div>
		</div>
	</div>
</div>


<link href={{"/css/aralindex.css"}} rel="stylesheet"> @endsection
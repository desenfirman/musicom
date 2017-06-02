@extends('layouts.master') @section('content')

<br><br><br>


<div class="container" >
	<div class="col-md-9 card" style="background-color: #f0f0f0;">
		<div class="container">@include('albums.albumlist')</div>
	</div>
	<div class="col-md-3 card" style="background-color: #f0f0f0;">
	
	</div>
</div>


<link href={{"/css/aralindex.css"}} rel="stylesheet"> @endsection
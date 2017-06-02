@extends('layouts.master') @section('content')

<?php $albums = $artist->albums;?>
<br>

<div class="row card" style="background-color: #f0f0f0;">
	<!--<div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view hm-black-light">
                <img src="{{$artist->artist_image}}" alt="First slide" width="1366px" height="100px">
            </div>
        </div>
    </div>-->

	<div style="
				width: auto;
				color: #f4f4f4;
				background: 
					linear-gradient(
						rgba(0, 0, 0, 0.70), 
						rgba(0, 0, 0, 0.70)
					),
					url('{{$artist->artist_image}}') ;
					background-size: cover;
					padding: 150px 0;
					background-attachment: fixed;
			">
		<h2 style=" text-align:center" ;>{{$artist->name}}</h2>
		<p style="text-align:center; width: 70%; margin: 0 auto;" ;>
			{{$artist->artist_description}}
		</p>

	</div>

	<div class="container">

		@include('albums.albumlist')
		
	</div>
</div>


@endsection
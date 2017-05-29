@extends('layouts.master')

@section('content')

<?php $songs = $album->songs; ?>




<div class="row" style="margin-left:2em">
	<h1>{{$album->title}}</h1>

</div>
<div class="row" style="margin-left:2em">
	<h6 style="color:grey;">By {{$album->artist->name}}</h6>
</div>
<div class="row" style="margin-left:2em" >

	<div class="container col" style="border:1px black">

		<div class="player">

			<div class="large-toggle-btn">
				<i class="large-play-btn"><span class="screen-reader-text">Large toggle button</span></i>
			</div>
			<!-- /.play-box -->

			<div class="info-box">
				<div class="track-info-box">
					<div class="track-title-text"></div>
					<div class="audio-time">
						<span class="current-time">00:00</span> /
						<span class="duration">00:00</span>
					</div>
				</div>
				<!-- /.info-box -->

				<div class="progress-box">
					<div class="progress-cell">
						<div class="progress">
							<div class="progress-buffer"></div>
							<div class="progress-indicator"></div>
						</div>
					</div>
				</div>

			</div>
			<!-- /.progress-box -->

			<div class="controls-box">
				<i class="previous-track-btn disabled"><span class="screen-reader-text">Previous track button</span></i>
				<i class="next-track-btn"><span class="screen-reader-text">Next track button</span></i>
			</div>
			<!-- /.controls-box -->

		</div>
		<!-- /.player -->

		<audio id="audio" preload="none" tabindex="0">
			@foreach($songs as $song)
			<source src="<?php echo asset("storage/".$song->link); ?>" data-track-number="{{$song->track_number}}"/>
				@endforeach
			</audio>	


			<div class="play-list">
				@foreach($songs as $song)
				
				<div class="play-list-row" data-track-row="{{$song->track_number}}">
					<div class="small-toggle-btn">
						<i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
					</div>
					<div class="track-number">
						{{$song->track_number}}.
					</div>
					<div class="track-title">
						<a class="playlist-track" href="<?php echo asset("storage/".$song->link); ?>" data-play-track="{{$song->track_number}}">{{$song->title}}</a>
					</div>
					<a style="display:inline" href="/add_to_playlist/{{$song->id}}" style="font-weight:bold">+</a>
				</div>
				@endforeach
			</div>

		</div>
		<div class="col" >
		<img src="{{$album->album_image}}" style="max-width:400px;max-weight:400px">
		{{-- 	<img src="http://placehold.it/400x400?text=Album+Image" > --}}
		</div>
		<div class="col" >
			<div>
			<img src="{{$album->artist->artist_image}}" style="max-width:200px;max-weight:200px">
	{{-- 			<img src="http://placehold.it/200x200?text=Artist+Image"> --}}
			</div>
			<span style="font-size:30px;padding-top:510em">&nbsp;{{$album->artist->name}}</span>
			<br>
			<p style="text-align:justify">Artist description Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. </p>
			</div>
		</div>
		<link href={{"/css/player.css"}} rel="stylesheet">

		<link href={{"/css/albumcard.css"}} rel="stylesheet">
		<script src={{"/js/player.js"}}></script>



	

		@endsection

@extends('layouts.master')

@section('content')




<div class="row" style="margin-left:2em">
	<h1>Album Title</h1>

</div>
<div class="row" style="margin-left:2em">
	<h6 style="color:grey;">By artistname</h6>
</div>
<div class="row" style="margin-left:2em" >

	<div class="container col" style="border:1px black">

		<audio id="audio" preload="none" tabindex="0">
			<source src="https://archive.org/download/calexico2006-12-02..flac16/calexico2006-12-02d1t02.mp3" data-track-number="1" />
			<source src="https://archive.org/download/ra2007-07-21/ra2007-07-21d1t05_64kb.mp3" data-track-number="2" />
			<source src="https://archive.org/download/slac2002-02-15/slac2002-02-15d1t07_64kb.mp3" data-track-number="3" />
			<source src="https://archive.org/download/blitzentrapper2009-02-24.flac16/blitzentrapper2009-02-24t02_64kb.mp3" data-track-number="4" />
			<source src="https://archive.org/download/samples2003-11-21.flac16/samples2003-11-21d2t04.mp3" data-track-number="5" />    
			<source src="https://archive.org/download/mikedoughty2004-06-16.flac16/d1t13.mp3" data-track-number="6" />
			<source src="https://archive.org/download/glove2004-03-18.shnf/glove2004-03-18d1t05.mp3" data-track-number="7" />
			<source src="https://archive.org/download/guster2005-11-12.flac16/guster2005-11-12d2t04.mp3" data-track-number="8" />
			<source src="https://archive.org/download/oar2004-11-12.flac/oar2004-11-12d1t01.mp3" data-track-number="9" />
			<source src="https://archive.org/download/mmj2003-09-26.shnf/mmj2003-09-26d2t08.mp3" data-track-number="10" />
			Your browser does not support HTML5 audio.
		</audio>

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

		<div class="play-list">

			<div class="play-list-row" data-track-row="1">
				<div class="small-toggle-btn">
					<i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
				</div>
				<div class="track-number">
					1.
				</div>
				<div class="track-title">
					<a class="playlist-track" href="#" data-play-track="1">AKMU - Galaxy</a>
				</div>
			</div>
			<div class="play-list-row" data-track-row="2">
				<div class="small-toggle-btn">
					<i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
				</div>
				<div class="track-number">
					2.
				</div>
				<div class="track-title">
					<a class="playlist-track" href="#" data-play-track="2">Ryan Adams &amp; The Cardinals - Cold Roses</a>
				</div>
			</div>
			<div class="play-list-row" data-track-row="3">
				<div class="small-toggle-btn">
					<i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
				</div>
				<div class="track-number">
					3.
				</div>
				<div class="track-title">
					<a class="playlist-track" href="#" data-play-track="3">The Slackers - Married Girl</a>
				</div>
			</div>
			<div class="play-list-row" data-track-row="4">
				<div class="small-toggle-btn">
					<i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
				</div>
				<div class="track-number">
					4.
				</div>
				<div class="track-title">
					<a class="playlist-track" href="#" data-play-track="4">Blitzen Trapper - Saturday Night</a>
				</div>
			</div>
			<div class="play-list-row" data-track-row="5">
				<div class="small-toggle-btn">
					<i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
				</div>
				<div class="track-number">
					5.
				</div>
				<div class="track-title">
					<a class="playlist-track" href="#" data-play-track="5">The Samples - Feel Us Shaking</a>
				</div>
			</div>
			<div class="play-list-row" data-track-row="6">
				<div class="small-toggle-btn">
					<i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
				</div>
				<div class="track-number">
					6.
				</div>
				<div class="track-title">
					<a class="playlist-track" href="#" data-play-track="6">Mike Doughty - American Car</a>
				</div>
			</div>
			<div class="play-list-row" data-track-row="7">
				<div class="small-toggle-btn">
					<i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
				</div>
				<div class="track-number">
					7.
				</div>
				<div class="track-title">
					<a class="playlist-track" href="#" data-play-track="7">G. Love &amp; Special Sauce - Dreamin'</a>
				</div>
			</div>
			<div class="play-list-row" data-track-row="8">
				<div class="small-toggle-btn">
					<i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
				</div>
				<div class="track-number">
					8.
				</div>
				<div class="track-title">
					<a class="playlist-track" href="#" data-play-track="8">Guster - Amsterdam</a>
				</div>
			</div>
			<div class="play-list-row" data-track-row="9">
				<div class="small-toggle-btn">
					<i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
				</div>
				<div class="track-number">
					9.
				</div>
				<div class="track-title">
					<a class="playlist-track" href="#" data-play-track="9">O.A.R. - About Mr. Brown</a>
				</div>
			</div>
			<div class="play-list-row" data-track-row="10">
				<div class="small-toggle-btn">
					<i class="small-play-btn"><span class="screen-reader-text">Small toggle button</span></i>
				</div>
				<div class="track-number">
					10.
				</div>
				<div class="track-title">
					<a class="playlist-track" href="#" data-play-track="10">My Morning Jacket - Phone Went West</a>
				</div>
			</div>

		</div>

	</div>
	<div class="col" >

		<img src="http://placehold.it/400x400?text=Album+Image" >
	</div>
	<div class="col" >
		<div  style="display:inline-block;vertical-align:bottom;">
			<img src="http://placehold.it/200x200?text=Artist+Image">
		</div>
		<span style="font-size:30px;padding-top:510em">&nbsp;Artist name</span>

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
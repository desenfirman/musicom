<section>
	<div class="divider-new">
		<h2 class="h3-responsive">Album list</h2>
	</div>
</section>

<div class="row">
	@foreach($albums as $album)
	<div class="col-sm-3" id="box" style="padding: 4% 0.5%;">
		<div class="card" style="height: 100%">
			<a href="/album/{{ $album->id}}" style="
				color: #f4f4f4;
				width: auto;
				height: auto;
				background: 
				linear-gradient(
					rgba(0, 0, 0, 0.30), 
					rgba(0, 0, 0, 0.30)
					),
				url('{{$album->album_image}}') ;
				background-position: center;
				background-size: cover;
				padding: 50% 50%;

				" class="mask waves-effect waves-light">
			</a>
            <!--<div id="image">
							<a href="/album/{{ $album->id}}"><img src="" style="max-height: 250px;" ></a>
						</div>-->
						<div class="card-block" style="padding: 8px; auto">
							<!--Title-->
							<p class="card-title" style="font-size: 12px; text-align:center;text-transform: uppercase; margin-bottom: 0px;">{{$album->title}}</p>
						</div>
					</div>

				</div>
				@endforeach
			</div>
			
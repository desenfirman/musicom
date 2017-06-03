@extends('layouts.master') @section('content')
<br>
<div class="row" style="background-color: white;" syle="padding-bottom: 50px">    

	<div class="col-lg-8">
      <div class="row">
        <div class="col-lg-12">
          <div class="imgslider" style="height: 450px; padding-top:+25px">
            <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" >
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
			  <?php $artist = $artists[0]?>
				<div   class="carousel-item active" style="width: auto;
				color: #f4f4f4;
				background: 
					linear-gradient(
						rgba(0, 0, 0, 0.70), 
						rgba(0, 0, 0, 0.70)
					),
					url('{{$artist->artist_image}}') ;
					background-size: cover;
					background-position: center;
					padding: 200px 0;
			">
                  <div class="carousel-caption">
                    <h3>{{$artist->name}}</h3>
					
                    <p>Latest artist who joined MUSICOM</p>
                  </div>
                </div>
            @for($i=1;$i<count($artists);$i++)
				<?php $artist = $artists[$i];?>
				<div   class="carousel-item" style="width: auto;
				color: #f4f4f4;
				background: 
					linear-gradient(
						rgba(0, 0, 0, 0.70), 
						rgba(0, 0, 0, 0.70)
					),
					url('{{$artist->artist_image}}') ;
					background-size: cover;
					background-position: center;
					padding: 200px 0;
			"> 
                  <div class="carousel-caption">
                    <h3>{{$artist->name}}</h3>
					
                    <p>Latest artist who joined MUSICOM</p>
                  </div>
                </div>

			<?php 
			if($i == 3) break;?>
			@endfor

              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
        <br>
        <div class="col-lg-12">
          <h2>NEW RELEASES</h2>
          <hr style="margin:5px">
		  <br>
          <div class="row">
			<?php $album;?>
            @for($i=0;$i<count($albums);$i++)
			<div class="col-lg-3">
				<?php $album = $albums[$i]?>
              <div class="card">
                <img class="card-img-top img-fluid" src="{{$album->album_image}}" alt="Card image cap" >
                <div class="card-block">
                  <h4 class="card-title">{{$album->title}}</h4>
                  <p class="card-text">{{$album->artist->name}}</p>
                </div>
              </div>
            </div>
			<?php 
			if($i == 3) break;?>
			@endfor
          </div>

        </div>

        <div class="col-lg-12">
          <h2>TOP ALBUM</h2>
          <hr style="margin:5px">
		  <br>
          <div class="row">
            <?php $album;?>
            @for($i=0;$i<count($albumLikes);$i++)
			<div class="col-lg-3">
				<?php $album = \App\Album::find($albumLikes[$i]->likable_id);?>
              <div class="card">
                <img class="card-img-top img-fluid" src="{{$album->album_image}}" alt="Card image cap" >
                <div class="card-block">
                  <h4 class="card-title">{{$album->title}}</h4>
                  <p class="card-text">{{$album->artist->name}}</p>
                </div>
              </div>
            </div>
			<?php 
			if($i == 4) break;?>
			@endfor

          </div>

        </div>


      </div>



    </div>
    <div class="col-3" style="margin-left: 50px;">
      <div class="row">
        <h3 style="text-align:center; margin-top:30px;"><b>TOP USER PLAYLIST</b></h3>
        <hr style="margin-bottom: 10px">

        @for($i=0;$i<count($playlistLikes);$i++)
        <div class="list-group-item" style="">

				<?php $playlist = \App\Playlist::find($playlistLikes[$i]->likable_id);
					$user = \App\User::find($playlist->user_id);
				?>
          <div class="col-lg-2">
            <h1 style="color:grey; font-size:40px; margin-top:5px;">{{$i+1}}</h1>
          </div>
          <div class="col-lg-10 bg" style="background-color:white">
            <div  class="row">
              <div class="col-lg-3" style="padding:0px">
                <img src="http://placehold.it/75" style="margin-right:20px; max-width:75px;max-height:75px">
              </div>
              <div class="col-lg-9" style="padding-left: 30px;">
                <a href="/playlist/{{$user->id}}" >Playlist</a>
                <h5 style="color:grey">By {{$user->name}}</h5>
              </div>
            </div>
          </div>
        <hr style="margin-bottom:5px;">
<?php 
			if($i == 7) break;?>
	  @endfor
      </div>

			
    </div>



  </div>
@endsection

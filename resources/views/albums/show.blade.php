@extends('layouts.master') @section('content')



<?php 
$songs = $album->songs;
?>
<br>

<script src="/js/player.js"></script>

<div class="row">

    <div class="col-md-8">
        <div class="large-centered medium-centered columns amplitude-player" id="">

            <div class="row">
                <div class="col-5 amplitude-left " id="">
                    <img src="<?php
                    echo asset("storage/".$album->album_image);
                    ?>" alt="">
                    <div id="player-left-bottom">
                        <div id="time-container">
                            <span class="current-time"><span class="amplitude-current-minutes" amplitude-main-current-minutes="true"></span>:
                            <span class="amplitude-current-seconds" amplitude-main-current-seconds="true"></span>
                        </span>
                        <input type="range" class="amplitude-song-slider" amplitude-main-song-slider="true" />
                        <span class="duration"><span class="amplitude-duration-minutes" amplitude-main-duration-minutes="true"></span>:
                        <span class="amplitude-duration-seconds" amplitude-main-duration-seconds="true"></span>
                    </span>
                </div>
                <div id="control-container">
                    <div id="repeat-container">
                        <div class="amplitude-repeat" id="repeat"></div>
                    </div>
                    <div id="central-control-container">
                        <div id="central-controls">
                            <div class="amplitude-prev" id="previous"></div>
                            <div class="amplitude-play-pause" amplitude-main-play-pause="true" id="play-pause"></div>
                            <div class="amplitude-next" id="next"></div>
                        </div>
                    </div>
                    <div id="shuffle-container">
                        <div class="amplitude-shuffle amplitude-shuffle-off" id="shuffle"></div>
                    </div>
                </div>
                <div id="meta-container">
                    <span amplitude-song-info="name" amplitude-main-song-info="true" class="song-name"></span>
                    <div class="song-artist-album">
                        <span amplitude-song-info="artist" amplitude-main-song-info="true"></span>
                        <span amplitude-song-info="album" amplitude-main-song-info="true"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-7 amplitude-right" id="">
            @foreach($songs as $song)
            <div class="song amplitude-song-container amplitude-play-pause" amplitude-song-index="<?php $index = $song->track_number - 1; echo $index;  ?>">
                <div class="song-now-playing-icon-container">
                    <div class="play-button-container">
                    </div>
                    <img class="now-playing" src="/img/open-source/amplitudejs/now-playing.svg" />
                </div>
                <div class="song-meta-data" >
                    <span class="song-title" >{{$song->title}}</span>
                    <span class="song-artist" >{{$song->artist->name}}</span>
                </div>
                <div>
                    <span class="song-duration">{{$song->track_number}}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
<div class="col-md-4">
  <div class="card" style="background-color: #f0f0f0;">
    <img class="img-fluid" src="<?php
                    echo asset("storage/".$album->artist->artist_image);
                    ?>" alt="">
    <div class="card-block">
        <!--Title-->
        <h4 class="card-title">{{$album->artist->name}}</h4>
        <!--Text-->
        <p class="card-text">{{$album->artist->artist_description}}</p>

    </div>

</div>
</div>
</div>

<script src="/js/jquery-3.1.1.min.js"></script>
<script src="/js/amplitude.js"></script>

<script type="text/javascript">
    Amplitude.init({

        "default_album_art": "{{$album->album_image}}",
        "songs": [
        @foreach($songs as $song) {
            "name": "{{$song->title}}",
            "artist": "{{$album->artist->name}}",
            "album": "{{$album->title}}",
            "url": "{{$song->link}}"
        },
        @endforeach

        ],
        "volume": 100
    });

    $(document).ready(function () {

        $(window).on('resize', function () {
            adjustPlayerHeights();
        });

        $('.bandcamp-link').on('click', function (e) {

            e.stopPropagation();
        });

        jQuery('.song').on('mouseover', function () {
            jQuery(this).css('background-color', '#00A0FF');
            jQuery(this).find('.song-meta-data .song-title').css('color', '#FFFFFF');
            jQuery(this).find('.song-meta-data .song-artist').css('color', '#FFFFFF');
            if (!jQuery(this).hasClass('amplitude-active-song-container')) {
                jQuery(this).find('.play-button-container').css('display', 'block');
            }
            jQuery(this).find('img.bandcamp-grey').css('display', 'none');
            jQuery(this).find('img.bandcamp-white').css('display', 'block');
            jQuery(this).find('.song-duration').css('color', '#FFFFFF');
        });

        jQuery('.song').on('mouseout', function () {
            jQuery(this).css('background-color', '#FFFFFF');
            jQuery(this).find('.song-meta-data .song-title').css('color', '#272726');
            jQuery(this).find('.song-meta-data .song-artist').css('color', '#607D8B');
            jQuery(this).find('.play-button-container').css('display', 'none');
            jQuery(this).find('img.bandcamp-grey').css('display', 'block');
            jQuery(this).find('img.bandcamp-white').css('display', 'none');
            jQuery(this).find('.song-duration').css('color', '#607D8B');
        });

        jQuery('.amplitude-play-pause').on('click', function () {
            $(this).find($(".fa")).removeClass('fa-play-circle').addClass('fa-pause-circle');
        });

    });
</script>




@endsection
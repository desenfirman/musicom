@extends('layouts.master')


@section('content')

<br><br><br>


<div class="row card" style="background-color: #f4f4f4;">
	<div class="container">
	<section>
		<div class="divider-new">
			<h2 class="h3-responsive">Artists list</h2>
		</div>
	</section>
		<div class="row">
			
			<input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Search for names..">

			<ul id="myUL" class="list-group" style="width:100%;">
			<?php $last = ''; ?>
			@foreach ($artists as $artist)
				<?php
				
				$current = strtolower($artist->name[0]);
				if ($last != $current) {
					echo   "<li><a href=\"#\" class=\"header\">" . strtoupper($current) . "</a></li>";
					$last = $current;
				}
				?>
				
				<li>
				<a class="list-group-item" style="
								max-height: 90px;
								width: 5%;
								background: 
									linear-gradient(
										rgba(0, 0, 0, 0.30), 
										rgba(0, 0, 0, 0.30)
									),
									url('{{$artist->artist_image}}') ;
								background-size: cover;
								padding: 5% 5%;
									
							" class="col-1 mask waves-effect waves-light"  href="/artist/{{$artist->id}}">
					
					<p style="margin: -10px auto auto 80px;width:500px">{{$artist->name}}</p>
				
				</a></li>
			
			@endforeach
			</ul>
			
		</div>	
		<br><br>
		</div>
		

</div>
		


{{-- 
	<div class="row">
		@foreach($artists as $artist)
		<div class="col-sm-3" id="box" >
		<center>
			<div id="image" >
				<a href="/artist/{{ $artist->id}}"><img src="{{$artist->artist_image}}" style="max-height: 250px;" ></a>
			</div>
						<div id="name"  style="text-decoration: none">
					<a href="/artist/{{ $artist->id}}">
						{{ $artist->name}}
					</a>
				</div>
				<br>
			</center>
		</div>
		@endforeach
	</center>
</div>
</div> --}}
{{-- 
<section>
	<div class="container-playlist">
		<ul>
			<li ><a href="playlist.html">My Playlist</a></li>
			<li><a href="new releases.html">New Release</a></li>
			<li><a href="">Trending Song</a></li>
			<li><a href="">Timeline</a></li>
		</ul>
	</div>
</section>

<div class="row">
	<div class="col-sm-3" id="box">
		<div id="image">
			<img src="https://i.scdn.co/image/6e1be3ceda70250c701caee5a16bef205e94bc98" style="max-height: 250px;">
		</div>
		<center>
			<div id="title" style="color:grey;">
				The Resistance
			</div>
			<div id="info">
				By Muse
			</div>
		</center>
	</div>
	<div class="col-lg-3" id="box" >
		<div id="image">
			<img src="https://i.scdn.co/image/4c23a82f33b034795a0fbc67af559420c8cb4928" style="max-height: 250px;">
		</div>
		<center>
			<div id="title" style="color:grey;">
				V (Deluxe)
			</div>
			<div id="info">
				By Maroon 5
			</div>
		</center>
	</div>
	<div class="col-lg-3" id="box">
		<div id="image">
			<img src="https://i.scdn.co/image/b68b39fdc2409d0f526ad48775ddcd93ff496cda" style="max-height: 250px;">
		</div>
		<center>
			<div id="title" style="color:grey;">
				x (Deluxe Edition)
			</div>
			<div id="info">
				By Ed Sheeran
			</div>
		</center>
	</div>
	<div class="col-lg-3" id="box">
		<div id="image">
			<img src="https://i.scdn.co/image/bf41f93f8c895eff007b88bd2e23e12dfe078792" style="max-height: 250px;">
		</div>
		<center>
			<div id="title" style="color:grey;">
				24K Magic
			</div>
			<div id="info">
				By Burno Mars
			</div>
		</center>
	</div>
</div> --}}

<link href={{"/css/aralindex.css"}} rel="stylesheet">
		<style type="text/css">
			#myInput {
		    background-image: url('/css/searchicon.png'); /* Add a search icon to input */
		    background-position: 10px 12px; /* Position the search icon */
		    background-repeat: no-repeat; /* Do not repeat the icon image */
		    width: 100%; /* Full-width */
		    font-size: 16px; /* Increase font-size */
		    padding: 12px 20px 12px 40px; /* Add some padding */
		    border: 1px solid #ddd; /* Add a grey border */
		    margin-bottom: 12px; /* Add some space below the input */
		}

		#myUL {
		    /* Remove default list styling */
		    list-style-type: none;
		    padding: 0;
		    margin: 0;
		}

		#myUL li a {
		    border: 1px solid #ddd; /* Add a border to all links */
		    margin-top: -1px; /* Prevent double borders */
		    background-color: #f6f6f6; /* Grey background color */
		    padding: 12px; /* Add some padding */
		    text-decoration: none; /* Remove default text underline */
		    font-size: 18px; /* Increase the font-size */
		    color: black; /* Add a black text color */
		    display: block; /* Make it into a block element to fill the whole list */
		}

		#myUL li a.header {
		    background-color: #e2e2e2; /* Add a darker background color for headers */
		    cursor: default; /* Change cursor style */
		}

		#myUL li a:hover:not(.header) {
		    background-color: #eee; /* Add a hover effect to all links, except for headers */
		}
</style>

<script type="text/javascript">
	function myFunction() {
	    // Declare variables
	    var input, filter, ul, li, a, i;
	    input = document.getElementById('myInput');
	    filter = input.value.toUpperCase();
	    ul = document.getElementById("myUL");
	    li = ul.getElementsByTagName('li');

	    // Loop through all list items, and hide those who don't match the search query
	    for (i = 0; i < li.length; i++) {
	        a = li[i].getElementsByTagName("a")[0];
	        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
	            li[i].style.display = "";
	        } else {
	            li[i].style.display = "none";
	        }
	    }
	}
</script>


@endsection
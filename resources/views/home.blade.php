@extends('layouts.master')

@section('content')
<h2>MUSICOM</h2>
<div class="col-lg-8">
	<div class="row">
		<div class="col-lg-12">
			<div class="imgslider" style="height: 450px;">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">

						<div class="item active">
							<img src="http://placehold.it/730x450" alt="Los Angeles">
							<div class="carousel-caption">
								<h3>Los Angeles</h3>
								<p>LA is always so much fun!</p>
							</div>
						</div>

						<div class="item">
						<img src="http://placehold.it/730x450" alt="Chicago">
							<div class="carousel-caption">
								<h3>Chicago</h3>
								<p>Thank you, Chicago!</p>
							</div>
						</div>

						<div class="item">
							<img src="http://placehold.it/730x450" alt="New York">
							<div class="carousel-caption">
								<h3>New York</h3>
								<p>We love the Big Apple!</p>
							</div>
						</div>

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
			<div class="row">
				<div class="col-lg-2">
					<div class="card">
						<img class="card-img-top" src="http://placehold.it/100" alt="Card image cap" style="max-width: 100px;max-height: 100px">
						<div class="card-block">
							<h4 class="card-title">The Resistance</h4>
							<p class="card-text">By Muse</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="card">
						<img class="card-img-top" src="http://placehold.it/100" alt="Card image cap" style="max-width: 100px;max-height: 100px">
						<div class="card-block">
							<h4 class="card-title">V (Deluxe)</h4>
							<p class="card-text">By Maroon 5</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="card">
						<img class="card-img-top" src="http://placehold.it/100" alt="Card image cap" style="max-width: 100px;max-height: 100px">
						<div class="card-block">
							<h4 class="card-title">X (Deluxe Edition)</h4>
							<p class="card-text">By Ed Sheeran</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="card">
						<img class="card-img-top" src="http://placehold.it/100" alt="Card image cap" style="max-width: 100px;max-height: 100px">
						<div class="card-block">
							<h4 class="card-title">24K Magic</h4>
							<p class="card-text">By Bruno Mars</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="card">
						<img class="card-img-top" src="http://placehold.it/100" alt="Card image cap" style="max-width: 100px;max-height: 100px">
						<div class="card-block">
							<h4 class="card-title">24K Magic</h4>
							<p class="card-text">By Bruno Mars</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="card">
						<img class="card-img-top" src="http://placehold.it/100" alt="Card image cap" style="max-width: 100px;max-height: 100px">
						<div class="card-block">
							<h4 class="card-title">24K Magic</h4>
							<p class="card-text">By Bruno Mars</p>
						</div>
					</div>
				</div>

			</div>

		</div>

		<div class="col-lg-12">
			<h2>TOP ALBUM</h2>
			<hr style="margin:5px">
			<div class="row">
				<div class="col-lg-2">
					<div class="card">
						<img class="card-img-top" src="http://placehold.it/100" alt="Card image cap" style="max-width: 100px;max-height: 100px">
						<div class="card-block">
							<h4 class="card-title">The Resistance</h4>
							<p class="card-text">By Muse</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="card">
						<img class="card-img-top" src="http://placehold.it/100" alt="Card image cap" style="max-width: 100px;max-height: 100px">
						<div class="card-block">
							<h4 class="card-title">V (Deluxe)</h4>
							<p class="card-text">By Maroon 5</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="card">
						<img class="card-img-top" src="http://placehold.it/100" alt="Card image cap" style="max-width: 100px;max-height: 100px">
						<div class="card-block">
							<h4 class="card-title">X (Deluxe Edition)</h4>
							<p class="card-text">By Ed Sheeran</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="card">
						<img class="card-img-top" src="http://placehold.it/100" alt="Card image cap" style="max-width: 100px;max-height: 100px">
						<div class="card-block">
							<h4 class="card-title">24K Magic</h4>
							<p class="card-text">By Bruno Mars</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="card">
						<img class="card-img-top" src="http://placehold.it/100" alt="Card image cap" style="max-width: 100px;max-height: 100px">
						<div class="card-block">
							<h4 class="card-title">24K Magic</h4>
							<p class="card-text">By Bruno Mars</p>
						</div>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="card">
						<img class="card-img-top" src="http://placehold.it/100" alt="Card image cap" style="max-width: 100px;max-height: 100px">
						<div class="card-block">
							<h4 class="card-title">24K Magic</h4>
							<p class="card-text">By Bruno Mars</p>
						</div>
					</div>
				</div>

			</div>

		</div>


	</div>



</div>
<div class="col-lg-3" style="margin-left: 50px;">
	<div class="row">
		<h3 style="text-align:center; margin-top:5px;"><b>TOP EIGHT PLAYLIST</b></h3>
		<hr style="margin-bottom: 10px">

		<div class="row" style="">
			<div class="col-lg-2">
				<h1 style="color:grey; font-size:40px; margin-top:5px;">1</h1>
			</div>
			<div class="col-lg-10 bg" style="background-color:white">
				<div class="row">
					<div class="col-lg-3" style="padding:0px">
						<img src="http://placehold.it/75" style="margin-right:20px; max-width:75px;max-height:75px">
					</div>
					<div class="col-lg-9">
						<h4>The Resistance</h4>
						<h5 style="color:grey">By Muse</h5>
					</div>
				</div>
			</div>
		</div>
		<hr style="margin-bottom:5px;">

		<div class="row" style="">
			<div class="col-lg-2">
				<h1 style="color:grey; font-size:40px; margin-top:5px;">2</h1>
			</div>
			<div class="col-lg-10 bg" style="background-color:white">
				<div class="row">
					<div class="col-lg-3" style="padding:0px">
						<img src="http://placehold.it/75" style="margin-right:20px; max-width:75px;max-height:75px">
					</div>
					<div class="col-lg-9">
						<h4>The Resistance</h4>
						<h5 style="color:grey">By Muse</h5>
					</div>
				</div>
			</div>
		</div>
		<hr style="margin-bottom:5px;">

		<div class="row" style="">
			<div class="col-lg-2">
				<h1 style="color:grey; font-size:40px; margin-top:5px;">3</h1>
			</div>
			<div class="col-lg-10 bg" style="background-color:white">
				<div class="row">
					<div class="col-lg-3" style="padding:0px">
						<img src="http://placehold.it/75" style="margin-right:20px; max-width:75px;max-height:75px">
					</div>
					<div class="col-lg-9">
						<h4>The Resistance</h4>
						<h5 style="color:grey">By Muse</h5>
					</div>
				</div>
			</div>
		</div>
		<hr style="margin-bottom:5px;">

		<div class="row" style="">
			<div class="col-lg-2">
				<h1 style="color:grey; font-size:40px; margin-top:5px;">4</h1>
			</div>
			<div class="col-lg-10 bg" style="background-color:white">
				<div class="row">
					<div class="col-lg-3" style="padding:0px">
						<img src="http://placehold.it/75" style="margin-right:20px; max-width:75px;max-height:75px">
					</div>
					<div class="col-lg-9">
						<h4>The Resistance</h4>
						<h5 style="color:grey">By Muse</h5>
					</div>
				</div>
			</div>
		</div>
		<hr style="margin-bottom:5px;">

		<div class="row" style="">
			<div class="col-lg-2">
				<h1 style="color:grey; font-size:40px; margin-top:5px;">5</h1>
			</div>
			<div class="col-lg-10 bg" style="background-color:white">
				<div class="row">
					<div class="col-lg-3" style="padding:0px">
						<img src="http://placehold.it/75" style="margin-right:20px; max-width:75px;max-height:75px">
					</div>
					<div class="col-lg-9">
						<h4>The Resistance</h4>
						<h5 style="color:grey">By Muse</h5>
					</div>
				</div>
			</div>
		</div>
		<hr style="margin-bottom:5px;">

		<div class="row" style="">
			<div class="col-lg-2">
				<h1 style="color:grey; font-size:40px; margin-top:5px;">6</h1>
			</div>
			<div class="col-lg-10 bg" style="background-color:white">
				<div class="row">
					<div class="col-lg-3" style="padding:0px">
						<img src="http://placehold.it/75" style="margin-right:20px; max-width:75px;max-height:75px">
					</div>
					<div class="col-lg-9">
						<h4>The Resistance</h4>
						<h5 style="color:grey">By Muse</h5>
					</div>
				</div>
			</div>
		</div>
		<hr style="margin-bottom:5px;">

		<div class="row" style="">
			<div class="col-lg-2">
				<h1 style="color:grey; font-size:40px; margin-top:5px;">7</h1>
			</div>
			<div class="col-lg-10 bg" style="background-color:white">
				<div class="row">
					<div class="col-lg-3" style="padding:0px">
						<img src="http://placehold.it/75" style="margin-right:20px; max-width:75px;max-height:75px">
					</div>
					<div class="col-lg-9">
						<h4>The Resistance</h4>
						<h5 style="color:grey">By Muse</h5>
					</div>
				</div>
			</div>
		</div>
		<hr style="margin-bottom:5px;">

		<div class="row" style="">
			<div class="col-lg-2">
				<h1 style="color:grey; font-size:40px; margin-top:5px;">8</h1>
			</div>
			<div class="col-lg-10 bg" style="background-color:white">
				<div class="row">
					<div class="col-lg-3" style="padding:0px">
						<img src="http://placehold.it/75" style="margin-right:20px; max-width:75px;max-height:75px">
					</div>
					<div class="col-lg-9">
						<h4>The Resistance</h4>
						<h5 style="color:grey">By Muse</h5>
					</div>
				</div>
			</div>
		</div>
		<hr style="margin-bottom:5px;">


	</div>
</div>

@endsection
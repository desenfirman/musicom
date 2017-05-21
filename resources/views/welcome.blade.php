<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MUSICOM</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="framework/css/ie/html5shiv.js"></script><![endif]-->
		@include('layouts.core-framework')
  </head>
  <body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html"><img src="framework/images/Hehev6.png"></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/register">Sign Up</a></li>
						<li><a href="/login">Login</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2><img src="framework/images/Hehev7.png"></h2>
				<p style="color:white;">Find your favorite song, build a playlist, and share your own song.</p>
				<ul class="actions">
					<li>
						<a href="/register" class="button big">Register Now</a>
						<a href="#one" class="button big">Learn More</a>
					</li>
				</ul>
			</section>

		<!-- Feature -->
			<section id="one" class="wrapper style1 align-center">
				<div class="container">
					<header>
						<h2 style="margin-bottom:0;"><b style="color:white;">Our Features</b></h2>
					</header>
					<div class="row" style="position:relative; top:-40px;">
						<section class="6u 12u$(small)">
							<h2>Playlist</h2>
							<i class="icon big rounded fa-play"></i>
							<p style="color:white;">You can create a playlist according to your mood.</p>
						</section>
						<section class="6u 12u$(small)">
							<h2>Trending Song</h2>
							<i class="icon big rounded fa-bar-chart"></i>
							<p style="color:white;">You can listen to the most popular song.</p>
						</section>
						<section class="6u 12u$(small)">
							<h2 style="margin-top: 30px;">New Releases</h2>
							<i class="icon big rounded fa-calendar"></i>
							<p style="color:white;">You can listen to newly released song.</p>
						</section>
						<section class="6u 12u$(small)">
							<h2 style="margin-top: 30px;">Upload</h2>
							<i class="icon big rounded fa-upload"></i>
							<p style="color:white;">You can upload and share your own music.</p>
						</section>

					</div>
				</div>
			</section>



		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 6u(medium) 12u$(small)">
							<h3 style="text-align: center;">About Us</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, cumque!</p>
						</section>
						<section class="4u 6u$(medium) 12u$(small)" style="text-align: center;">
							<h3 style="text-align: center;">Follow Us</h3>
							<ul class="icons">
								<li><a href="#" class="icon rounded fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon rounded fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon rounded fa-instagram"><span class="label">Instagram</span></a></li>
							</ul>
						</section>
						<section class="4u$ 12u$(medium) 12u$(small)">
							<h3 style="margin-bottom:5px; text-align: center;">Contact Us</h3>
							<ul class="tabular">
								<li>
									<h3>Address</h3>
									1234 Somewhere Road<br>
									Nashville, TN 00000
								</li>
								<li>
									<h3>Mail</h3>
									<a href="#">helpdesk@musicom.com</a>
								</li>
								<li>
									<h3>Phone</h3>
									(000) 000-0000
								</li>
							</ul>
						</section>
					</div>
				</div>
			</footer>
			<script>
				$('a[href*="#"]')
				  // Remove links that don't actually link to anything
				  .not('[href="#"]')
				  .click(function(event) {
				    // On-page links
				    if (
				      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
				      &&
				      location.hostname == this.hostname
				    ) {
				      // Figure out element to scroll to
				      var target = $(this.hash);
				      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				      // Does a scroll target exist?
				      if (target.length) {
				        // Only prevent default if animation is actually gonna happen
				        event.preventDefault();
				        $('html, body').animate({
				          scrollTop: target.offset().top
				        }, 1000, function() {
				          // Callback after animation
				          // Must change focus!
				          var $target = $(target);
				          $target.focus();
				          if ($target.is(":focus")) { // Checking if the target was focused
				            return false;
				          } else {
				            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
				            $target.focus(); // Set focus again
				          };
				        });
				      }
				    }
				  });
			</script>

	</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Musicom</title>

    <!-- Font Awesome -->
    <link href="/material/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="/material/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="/material/css/mdb.min.css" rel="stylesheet">

    <!-- Template styles -->
    <style>
        /* TEMPLATE STYLES */
        
        html,
        body,
        .view {
            height: 100%;
        }
        /* Navigation*/
        
        .navbar {
            background-color: transparent;
        }
        
        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        
        .top-nav-collapse {
            background-color: #039BE5;
        }
        
        footer.page-footer {
            background-color: #039BE5;
            margin-top: 2rem;
        }
        
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #039BE5;
            }
        }
        /*Call to action*/
        
        .flex-center {
            color: #fff;
        }
        
        .view {
            background: url("http://i.imgur.com/cHVlD6H.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        /*Contact section*/
        
        #socMed ul li {
            display: inline;
            font-size: 50px;
            padding: 1%;
        }
        
        #play,
        #trend,
        #releases {
            text-align: center;
            padding-top: 20px;
        }
        
        #play i,
        #trend i,
        #releases i {
            font-size: 100px;
        }
        
        .featureBox {
            height: 267px;
        }
    </style>

</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="http://i.imgur.com/G6LW42h.png" style="max-width:160px;">
            </a>
            <div class="collapse navbar-collapse " id="navbarNav1">
                <ul class="navbar-nav mr-auto" style="position: relative; left:87%">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><strong>Sign Up</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><strong>Login</strong></a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <!--/.Navbar-->

    <!--Mask-->
    <div class="view hm-black-light">
        <div class="full-bg-img flex-center">
            <ul>
                <li>
                    <h1 class="h1-responsive wow fadeInDown" data-wow-delay="0.2s"><img src="http://i.imgur.com/G6LW42h.png" style="max-width:450px;padding-left: 5%;"></h1>
                </li>
                <li>
                    <p class="wow fadeInDown">Find your favorite song, build a playlist, and share your favorite song.</p>
                </li>
                <li>
                    <a href="" class="btn btn-primary btn-lg wow fadeInLeft" data-wow-delay="0.2s" rel="nofollow">Sign up!</a>
                    <a href="#features" class="btn btn-default btn-lg wow fadeInRight" data-wow-delay="0.2s" rel="nofollow">Learn more</a>
                </li>
            </ul>
        </div>
    </div>
    <!--/.Mask-->

    <!-- Main container-->
    <div class="container" id="features">
        <!--Section: Best features-->
        <br>
        <section>
            <div class="divider-new">
                <h2 class="h2-responsive wow fadeIn">Our features</h2>
            </div>
            <div class="row">

                <!--First columnn-->
                <div class="col-lg-4">
                    <!--Card-->
                    <div class="card wow fadeIn featureBox">

                        <!--Card image-->
                        <div class=" overlay hm-white-slight">
                            <div id="play">
                                <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                            </div>
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block text-center">
                            <!--Title-->
                            <h4 class="card-title">Playlist</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">You can create a playlist according to your mood.</p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--First columnn-->

                <!--Second columnn-->
                <div class="col-lg-4">
                    <!--Card-->
                    <div class="card wow fadeIn featureBox" data-wow-delay="0.2s">

                        <!--Card image-->
                        <div class="overlay hm-white-slight">
                            <div id="trend">
                                <i class="fa fa-bar-chart" aria-hidden="true"></i>
                            </div>
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block text-center">
                            <!--Title-->
                            <h4 class="card-title">Trending Song</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">You can listen to the most popular song.</p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--Second columnn-->

                <!--Third columnn-->
                <div class="col-lg-4">
                    <!--Card-->
                    <div class="card wow fadeIn featureBox" data-wow-delay="0.4s">

                        <!--Card image-->
                        <div class=" overlay hm-white-slight">
                            <div id="releases">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                            </div>
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->

                        <!--Card content-->
                        <div class="card-block text-center">
                            <!--Title-->
                            <h4 class="card-title">New Releases</h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text">You can listen to newly released song.</p>
                        </div>
                        <!--/.Card content-->

                    </div>
                    <!--/.Card-->
                </div>
                <!--Third columnn-->

            </div>

        </section>
        <!--/Section: Best features-->
    </div>
    <!--/ Main container-->

    <br>

    <!--Footer-->
    <footer class="page-footer center-on-small-only">

        <!--Footer Links-->
        <div class="container-fluid">
            <div class="row">

                <!--Fourth column-->
                <div id="socMed" class="col-lg-12" style="text-align:center;">
                    <h5 class="title"><strong>Find us on</strong></h5>
                    <ul>
                        <li><a href="#!"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href="#!"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                        <li><a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2017 Copyright: <a href="">Musicom</a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script src="/material/js/jquery-3.1.1.min.js"></script>

    <script type="text/javascript" src="/material/js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/material/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="/material/js/mdb.min.js"></script>

    <!-- Animations init-->
    <script>
        new WOW().init();
    </script>

    <<script>
        $('a[href*="#"]') // Remove links that don't actually link to anything .not('[href="#"]') .click(function(event) { // On-page links if ( location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname ) {
        // Figure out element to scroll to var target = $(this.hash); target = target.length ? target : $('[name=' + this.hash.slice(1) + ']'); // Does a scroll target exist? if (target.length) { // Only prevent default if animation is actually gonna
        happen event.preventDefault(); $('html, body').animate({ scrollTop: target.offset().top }, 1000, function() { // Callback after animation // Must change focus! var $target = $(target); $target.focus(); if ($target.is(":focus")) { // Checking if
        the target was focused return false; } else { $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable $target.focus(); // Set focus again }; }); } } });
        </script>

</body>

</html>
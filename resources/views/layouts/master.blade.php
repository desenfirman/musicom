
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<title>Starter Template for Bootstrap</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href={{"/css/player.css"}} rel="stylesheet">

	<script src={{"/js/player.js"}}></script>



</head>





@include('layouts.nav')





<body>

	<div class="container-fluid" >

		@yield('content')


	</div>
	<script src="https://cdn.bootcss.com/aplayer/1.6.0/APlayer.min.js" ></script>
	<script src="https://unpkg.com/aplayer"></script>
</body>
</html>

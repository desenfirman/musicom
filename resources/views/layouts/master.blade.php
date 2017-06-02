
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<title>Starter Template for Bootstrap</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="/material/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="/material/css/player.css">
	<link rel="stylesheet" type="text/css" href="/material/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/material/css/mdb.min.css">

	<style>
		.container{
			width: 90%;
		}
	</style>
	
</head>

<body style="background-color:#37474F;">
	<div >
		@include('layouts.nav')
		<div class="container" >

			@yield('content')

		</div>
		
	</div>
	
	<!--<script src="/js/jquery-2.2.3.min.js"></script>-->
	<script src="/material/js/jquery-3.1.1.min.js"></script>
	<script src="/material/js/tether.min.js"></script>
	<script src="/material/js/bootstrap.min.js"></script>
	<script src="/material/js/mdb.min.js"></script>
	
</body>
</html>
s
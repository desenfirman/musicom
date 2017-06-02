{{-- <head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
	<div class="col-sm-4">
		<h1>Register</h1>

		<form method="POST" action="/register">
			{{csrf_field()}}
			<div class="form-group">
				<label for="username">Username:</label>
				<input class="form-control" id="username" name="username"  required>
			</div>

			<div class="form-group">
				<label for="name">Name:</label>
				<input class="form-control" id="name" name="name"  required>
			</div>

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email"></input required>
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" class="form-control" id="password" name="password" required>
			</div>

			<div class="form-group">
				<label for="password_confirmation">Password Confirmation:</label>
				<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Register</button>
			</div>
		</form>
	</div>
</body> --}}
@extends('layouts.master')

@section('content')
<br><br><br>

<div class="card">
	<div class="card-block">

		<!--Header-->
		<div class="form-header" style="background-color:#182b49">
			<h3><i class="fa fa-user"></i> Register:</h3>
		</div>

		<!--Body-->
		<form method="POST" action="/register">
			{{csrf_field()}}
			<div class="md-form">
				<i class="fa fa-user prefix"></i>
				<input name="username" type="text" id="form3" class="form-control" placeholder="Username" required>
		
			</div>

			<div class="md-form">
				<i class="fa fa-user-o prefix"></i>
				<input name="name" type="text" id="form3" class="form-control" placeholder="Name" required>

			</div>


			<div class="md-form">
				<i class="fa fa-envelope prefix"></i>
				<input name="email" type="text" id="form2" class="form-control" placeholder="Email" required>
				
			</div>

			<div class="md-form">
				<i class="fa fa-lock prefix"></i>
				<input name="password" type="password" id="form4" class="form-control" placeholder="Password" required>
				
			</div>

				<div class="md-form">
				<i class="fa fa-lock prefix"></i>
				<input name="password_confirmation" type="password" id="form4" class="form-control" placeholder="Password confirmation" required>
				
			</div>


			<div class="text-center">
				<input class="btn btn-indigo" type="submit" name="submit" value="Sign Up">
			</div>
		</div>
	</form>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.2/js/mdb.min.js"></script>
	@endsection

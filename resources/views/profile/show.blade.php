@extends('layouts.master')

@section('content')
<br><br><br>
<div class="row">
	<div class="col-2" style="border:1px solid black;margin-left:5%;border-right:none"> 
		<center>
			<img src="http://placehold.it/150" style="margin-top:35px;margin-bottom:35px">
			{{-- 	<img src="{{$user->user_image}}" style="margin-top:35px;margin-bottom:35px"> --}}
			
		</center>
	</div>
	<div class="col-9" style="border:1px solid black;margin-right:2%">
		<br>
		<h1>{{$user->username}}</h1>

	</div>
</div>

<br>

<div class="row">
	<div class="col-2"  style="border:1px solid black;margin-left:5%">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</div>



	<div class="col-6" style="border:1px solid black;border-left:none;border-right:none">

		<form method="POST" action="/profile/{{$user->id}}">
			{{csrf_field()}}
			<br>
			<div class="form-group">
				<label>Send {{$user->username}} a message</label>
				<textarea type="textarea" name="message" class="form-control" row="4" required></textarea>
				<br>
				<input type="submit" name="submit" class="btn btn-primary pull-right">
			</div>
		</form>
		<br><br>
		

		@foreach($received as $message)
		<div class="">
			{{-- 		<img src="{{User::find($message->user_id)->user_image}}" class="rounded-circle"  > --}}

			<img src="http://placehold.it/50" class="rounded-circle" style="float:left;margin-right:10px;margin-bottom:10px" >
			<br>
			<h6>{{\App\User::find($message->user_id)->username}}</h6>

			<p style="clear:both">{{$message->message}}</p>

			<hr>
		</div>

		@endforeach


	</div>
	<div class="col-3" style="border:1px solid black;margin-right:2%;">
		<br>
		<h3>Album liked</h3>
		<ul>
		<?php $length = count($albums);?>
			@for($i = 0; $i< $length; $i++)
			<li>{{$albums[$i]->title}}</li>

			@endfor
		</ul>
	</div>

</div>	



@endsection

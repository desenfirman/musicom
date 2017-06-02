@extends('layouts.master') @section('content')
<br><br><br>
<div class="row">
	<div class="col-2 offset-3">
		<center>
			<img src="http://placehold.it/150" style="margin-top:35px;margin-bottom:35px; border-radius:200px; max-width:150px;max-height:150px;">			{{-- <img src="{{$user->user_image}}" style="margin-top:35px;margin-bottom:35px"> --}}

		</center>
	</div>
	<div class="col-7">
		<br>
		<div class="row">
			<div class="col-2">
				<h2 style="margin-top:25px">{{$user->username}}</h2>
			</div>
			@if(Auth::check()) @if($user->id == Auth::user()->id)
			<div class="col-2 offset-2">
			</div>

			@else @if(! $user->liked(Auth::user()->id))
			<div class="col-2 offset-2">
				<a href="/follow/{{$user->id}}">
					<button type="button" class="btn btn-secondary right" style="border-radius:10px">Follow</button>
				</a>
			</div>

			@else
			<div class="col-2 offset-2">
				<a href="/unfollow/{{$user->id}}">
					<button type="button" class="btn btn-secondary right" style="border-radius:10px">Unfollow</button>
				</a>
			</div>
			@endif @endif @endif

		</div>
		<div class="row" style="margin-left:0.1em">
			<h6>{{$user->name}}</h6>
		</div>
		<br>
		<div class="row">
			<div class="col-2">
				<h5 style="color:grey">Followers</h5>
				<h5 style="color:rgb(47, 194, 239)">
					<a href="#" data-toggle="modal" data-target="#followers" style="text-decoration:none;">
						{{$user->likeCount}}
					</a>
				</h5>
			</div>
			<div class="col-2">
				<h5 style="color:grey">Following</h5>
				<h5 style="color:rgb(47, 194, 239)">
					<a href="#" data-toggle="modal" data-target="#following" style="text-decoration:none;">
						{{count($following)}}
					</a>
				</h5>
			</div>
			<div class="col-2">
				<h5 style="color:grey">Likes</h5>
				<h5 style="color:rgb(47, 194, 239)">{{count($albums)}}</h5>
			</div>
		</div>
	</div>
</div>


<div class="row" style="background-color: rgb(239, 239, 239)">
	<div class="col-7 offset-1" style="border-left:none;border-right:none">

		@if(Auth::check())
		<form method="POST" action="/profile/{{$user->id}}">
			{{csrf_field()}}
			<br>
			<div class="form-group">
				<label>Send {{$user->username}} a message</label>
				<textarea type="textarea" name="message" class="form-control md-textarea" {{-- row="47" --}} style="height:5em;margin-bottom:0;padding-right:1em"
				    required></textarea>
				<br>
				<input type="submit" name="submit" value="Send" class="btn btn-primary pull-right">
			</div>
		</form>
		@endif

		<br><br> @foreach($received as $message)
		<div class="message" style="background-color: white;">
			{{-- <img src="{{User::find($message->user_id)->user_image}}" class="rounded-circle"> --}}

			<img src="http://placehold.it/50" style="border-radius:200px; max-width:50px; max-height:50px; margin: 10px">
			<span class="fullname" style="margin:5px; font-size:15px;">
				{{\App\User::find($message->user_id)->username}}
				<span class="date">
					<i style="font-size:10px; color:grey;">{{$message->created_at}}</i>
				</span>
			</span>
			<br>
			<span class="msg" style="margin: 15px;">
				{{$message->message}}
			</span>

			<hr>
		</div>

		@endforeach
	</div>

	<div class="col-3">
		<br>
		<h3 style="text-align:center">Albums Liked</h3>
		<hr>
		<br>
		<?php $length = count($albums);?> @for($i = 0; $i
		< $length; $i++) <div class="row" style="margin-bottom: 30px;">
			<div class="col-1"></div>
			<div class="col-10 bg" style="background-color:white">
				<div class="row">
					<div class="col-3" style="padding:0px">
						{{-- <img src="http://placehold.it/75" style="margin-right:20px; max-width:150px;max-height:150px"> --}}
						<img src="{{$albums[$i]->album_image}}" style="margin-right:20px; max-width:75px;max-height:75px;">
					</div>
					<div class="col-9">
						<h5>{{$albums[$i]->title}}</h5>
						<h6 style="color:grey">By {{$albums[$i]->artist->name}}</h6>
						</p>
					</div>
				</div>
			</div>
	</div>

	@endfor

</div>


</div>

<!-- Modal Follower-->
<div class="modal fade bd-example-modal-lg" id="followers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
	<div class="modal-dialog" style="width: 1200px;" role="document">
		<div class="modal-content ">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Followers</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?php $length = count($followers); ?>
			<div class="modal-body">
				@for($i = 0; $i
				< $length; $i++) <div class=" row">
					<div class="col-8">
						<img src="{{\App\User::find($followers[$i]->user_id)->user_image}}" style="border-radius:200px; max-width:50px; max-height:50px; margin: 10px">{{\App\User::find($followers[$i]->user_id)->name}}</span>

					</div>

					@if(Auth::check()) @if($followers[$i]->user_id == Auth::user()->id) @else @if(! \App\User::find($followers[$i]->user_id)->liked(Auth::user()->id))
					<div class="col-4">
						<a href="/follow/{{$followers[$i]->user_id}}">
							<button type="button" class="btn btn-info" style=" border-radius:5px; ">Follow</button>
						</a>
					</div>
					@else
					<div class="col-4">
						<a href="/unfollow/{{$followers[$i]->user_id}}">
							<button type="button" class="btn btn-warning" style=" border-radius:5px; ">Unfollow</button>
						</a>
					</div>
					@endif @endif @endif
					<hr style="margin:0px;">
			</div>
			@endfor
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>
</div>


<!-- Modal Following-->
<div class="modal fade bd-example-modal-lg" id="following" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
	<div class="modal-dialog" style="width: 1200px;" role="document">
		<div class="modal-content ">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Following</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<div class="modal-body">
				@foreach($following as $u)
				<div class=" row">
					<div class="col-8">
						<img src="{{\App\User::find($u->id)->user_image}}" style="border-radius:200px; max-width:50px; max-height:50px; margin: 10px">{{\App\User::find($u->id)->name}}</span>

					</div>

					@if(Auth::check()) @if($u->id == Auth::user()->id) @else @if(! \App\User::find($u->id)->liked(Auth::user()->id))
					<div class="col-4">
						<a href="/follow/{{$u->id}}">
							<button type="button" class="btn btn-info" style=" border-radius:5px; ">Follow</button>
						</a>
					</div>
					@else
					<div class="col-4">
						<a href="/unfollow/{{$u->id}}">
							<button type="button" class="btn btn-warning" style=" border-radius:5px; ">Unfollow</button>
						</a>
					</div>
					@endif @endif @endif
					<hr style="margin:0px;">
				</div>
				@endforeach
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('#myModal').on('shown.bs.modal', function () {
		$('#myInput').focus()
	})
</script>

@endsection
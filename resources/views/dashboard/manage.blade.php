@extends('dashboard.master')

@section('content')


<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">User Management</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Registered User
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>UID</th>
							<th>Username</th>
							<th>Email</th>
							<th>Registered at</th>
							<th>Action</th>
							{{-- 	<th>Level</th> --}}
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th class="col-xs-1">UID</th>
							<th>Username</th>
							<th>Email</th>
							<th>Registered at</th>
							<th>Action</th>
						</tr>
					</tfoot>
					<tbody>
						@foreach($users as $user)
						<tr>
							<td >{{$user->id}}</td>
							<td>{{$user->username}}</td>
							<td>{{$user->email}}</td>
							<td>{{$user->created_at}}</td>
							<td>
								<div class="row">
								@if(Auth::id() != $user->id)											
									<div class="col-lg-4">
										<form class="form-inline" method="POST" action="/dashboard/users/{{$user->id}}/delete">
											{{csrf_field()}}
											<input type="hidden" name="user" value="{{$user->id}}">
											<input type="submit" class="btn btn-danger" value="Delete" >
										</form>
									</div>
									@endif
								</div>
							</td>
							{{-- 							<td>{{$user->level}}</td> --}}
						</tr>
						@endforeach


					</tbody>
				</table>

				<!-- /.panel-body -->
			</div>
			<!-- /.panel -->
		</div>
		<!-- /.col-lg-12 -->
	</div>
</div>


<script type="text/javascript"></script>



@endsection
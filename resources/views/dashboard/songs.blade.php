@extends('dashboard.master')

@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Site Data</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Albums
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>Song ID</th>
							<th>Title</th>
							<th>Artist Name</th>
							<th>Album Title</th>
							<th>Added at</th>

						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Song ID</th>
							<th>Title</th>
							<th>Artist Name</th>
							<th>Album Title</th>
							<th>Added at</th>
						</tr>
					</tfoot>
					<tbody>
						@foreach($songs as $song)
						<tr>
							<td>{{$song->id}}</td>
							<td>{{$song->title}}</td>
							<td>{{$song->artist->name}}</td>
							<td>{{$song->album->title}}</td>
							<td>{{$song->created_at}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>




<script type="text/javascript"></script>



@endsection
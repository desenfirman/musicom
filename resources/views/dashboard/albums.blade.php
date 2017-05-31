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
							<th>Album ID</th>
							<th>Title</th>
							<th>Artist Name</th>
							<th>Added at</th>

						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Album ID</th>
							<th>Title</th>
							<th>Artist Name</th>
							<th>Added at</th>
						</tr>
					</tfoot>
					<tbody>
						@foreach($albums as $album)
						<tr>
							<td>{{$album->id}}</td>
							<td>{{$album->title}}</td>
							<td>{{$album->artist->name}}</td>
							<td>{{$album->created_at}}</td>

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
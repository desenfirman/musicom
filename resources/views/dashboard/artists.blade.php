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
				Artists
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th>Artist ID</th>
							<th>Name</th>
							<th>Description</th>
							<th>Added at</th>

						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Artist ID</th>
							<th>Name</th>
							<th>Description</th>
							<th>Added at</th>
						</tr>
					</tfoot>
					<tbody>
						@foreach($artists as $artist)
						<tr>
							<td>{{$artist->id}}</td>
							<td>{{$artist->name}}</td>
							<td>{{$artist->artist_description}}</td>
							<td>{{$artist->created_at}}</td>

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
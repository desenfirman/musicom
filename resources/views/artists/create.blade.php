@extends('dashboard.master')

@section('content')

@extends('dashboard.master')

@section('content')


<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">New</h1>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Artist
			</div>
			<!-- /.panel-heading -->

			<div class="panel-body">

				<form method="POST" action="/dashboard/create/artist" enctype="multipart/form-data">
					{{csrf_field()}}

					<div class="form-group">
						<label>Artist Name</label>
						<input class="form-control" name="name" required>
					</div>

					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" rows="3" name="artist_description"></textarea>
					</div>

					<div class="form-group">
						<label>Artist Image / Logo</label>
						<input type="file" name="artist_image">
					</div>

					<input type="submit" name="submit" class="btn btn-primary">


				</form>
			</div>

		</div>
	</div>
</div>




<script type="text/javascript"></script>



@endsection
@endsection
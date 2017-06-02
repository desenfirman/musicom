@extends('dashboard.master')

@section('content')

<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">New</h1>
  </div>
  <!-- /.col-lg-12 -->
</div>
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Album and songs
      </div>
      <div class="panel-body">
        <div class="row">

          <form method="POST" action="/dashboard/create/album" enctype="multipart/form-data" >
            {{csrf_field()}}


            <div id="tes" class="col-lg-10 form-group">
              <label>Artist Name</label>
              <select name="artist_id" class="form-control">
                @foreach($artists as $artist)
                <option value="{{$artist->id}}">{{$artist->name}}</option>
                @endforeach
              </select>
              <br>
              <div class="form-group">
                <label>Album Title</label>
                <input type="text" class="form-control" name="album_title"></input>
              </div>

              <div class="form-group">
                <label>Album Image / Logo</label>
                <input type="file" name="album_image">
              </div>

              <h2>Number of songs </h2>
              <div class="form-group input-group">
                <input id="number" type="number" class="form-control" placeholder="Number of songs">
                <button onclick="myFunction()" type="button" class="form-control">OK</button>
              </div>


            </div>                   

            <input type="submit" name="submit" class="btn btn-primary">
          </form>



        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function myFunction(){
    var num = document.getElementById("number").value;
    $('.input').remove();
    for(var i =0; i< num; i++){
      $('#tes').append('<div class="input form-group input-group"><span class="input-group-addon"><i class="fa fa-hashtag"></i></span><input name="track_number[]" type="text" class="form-control" placeholder="Track Number"><span class="input-group-addon "><i class="fa fa-tag"></i></span><input name="title[]" type="text" class="form-control" placeholder="Title"><span class="input-group-addon"><i class="fa fa-external-link"></i></span><input name="link[]" type="text" class="form-control" placeholder="URL"></div>');
    }
  }        

</script>

@endsection
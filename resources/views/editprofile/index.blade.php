@extends('layouts.master')


@section('content')
<?php for ($i=0; $i < 10; $i++) {
  echo "<br>";
} ?>
<div class="container">
	<div class="row login_box">
	    <div class="col-md-12 col-xs-12" align="center">
            <div class="outter"><img src="" class="image-circle"/></div>
            <h1>Hi, {{Auth::user()->username}}</h1>
            <span>INDIAN</span>
	    </div>
        <div class="col-md-6 col-xs-6 follow line" align="center">
            <h4>
                 125651 <br/> <span>Music Uploaded</span>
            </h4>
        </div>
        <div class="col-md-6 col-xs-6 follow line" align="center">
            <h4>
                 125651 <br/> <span>Playlist Created</span>
            </h4>
        </div>

        

        <div class="col-md-12 col-xs-12 login_control">

                <div class="control">
                    <div class="label">Email Address</div>
                    <input type="text" class="form-control" value="admin@gmail.com"/>
                </div>

                <div class="control">
                     <div class="label">Password</div>
                    <input type="password" class="form-control" value="123456"/>
                </div>
                <div align="center">
                     <button class="btn btn-orange">LOGIN</button>
                </div>

        </div>



    </div>
</div>
@endsection

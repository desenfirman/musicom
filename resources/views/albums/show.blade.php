@extends('layouts.master')

@section('content')
<br><br><br>
<?php $songs = $album->songs; ?>
<h1>{{$album->title}}</h1>

@foreach($songs as $song)
<h3>{{$song->title}}</h3>
<audio controls>
   <source src="{{$song->link}}" type="audio/mpeg">
</audio>

@endforeach




@endsection

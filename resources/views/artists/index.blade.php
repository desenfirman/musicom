@extends('layouts.master')


@section('content')
<br><br><br><br><br>
@foreach($artists as $artist)
<a href="/artist/{{ $artist->id}}" style="text-decoration: none">
	{{ $artist->id}}<br>
	{{ $artist->name}}<br>
</a>
@endforeach
@endsection
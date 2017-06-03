<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
	public function home()
	{
		/*
		$albums = \App\Album::all()->latest();*/
		$albums = \App\Album::latest()->get();
		$artists = \App\Artist::latest()->get();
		$albumLikes = DB::table('likeable_like_counters')->where('likable_type','App\Album')->orderBy('count', 'desc')->get();
		$playlistLikes = DB::table('likeable_like_counters')->where('likable_type','App\Playlist')->orderBy('count', 'desc')->get();
		/*ntar munculin albumnya*/
		
		/*for($i=0;i<6;i++)
		{
			\App\Album::find($albumLikes[$i]->likable_id);
		}
		
		for($i=0;i<$8;i++)
		{
			\App\Album::find($playlistLikes[$i]->likable_id);
		}*/
		return view('home', compact('artists','albums', 'albumLikes', 'playlistLikes'));
	}
}
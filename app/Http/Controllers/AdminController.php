<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('admin');		
	}


	public function index()
	{
		$artists = \App\Artist::all();
 		$albums = \App\Artist::all();
 		$songs = \App\Song::all();
 		$users = \App\User::all();
 		return view('dashboard.index',compact('artists','albums','songs','users'));

	}

	public function users()
	{
		$users = \App\User::all();
		return view('dashboard.manage',compact('users'));
	}

	public function destroyUser($user) 
	{
		$del = \App\User::find($user);
		$messages = \App\Message::all()->where('user_id',$user);
		DB::table('likeable_likes')->where('user_id',$user)->delete();

		$length = count($messages);
		for($i = 0; $i< $length; $i++){
			$messages[$i]->delete();
		};


		$del->delete();
		return redirect()->back();
	}

	public function artistsData()
	{
		$artists = \App\Artist::all();
		return view('dashboard.artists',compact('artists'));
	}

	public function albumsData()
	{
		$albums = \App\Album::all();
		return view('dashboard.albums',compact('albums'));
	}

	public function songsData()
	{
		$songs = \App\Song::all();
		return view('dashboard.songs',compact('songs'));
	}

}

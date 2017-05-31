<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

	public function index()
	{
		return view('dashboard.index');

	}

	

	public function users()
	{
		$users = \App\User::all();
		return view('dashboard.manage',compact('users'));
	}

	public function destroyUser($user) 
	{
		$del = \App\User::find($user);
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

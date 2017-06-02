<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
class PlaylistController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth')->except('show'); 		
	}

	public function show($user)
	{

		$playlist = \App\User::find($user)->playlist;

		return view('profile.playlist', compact('playlist'));
	}

	public function delete($song)
 	{
 		$tbd = DB::table('playlist_song')->where([
				['playlist_id', Auth::user()->playlist->id],
				['song_id', $song]
		 ])->delete();
 		return redirect()->back();
 	}
 

	public function store($song)	{
		$s = \App\Song::find($song);
		$s = $s->album_id;
		$playlist = Auth::user()->playlist;
		$playlist->songs()->attach($song);
		$playlist->save();
		return redirect("/album/$s");
	}

	public function like($id)
	{
		$album = \App\Playlist::find($id);
		$album->like(Auth::id());
		$album->save();

		return redirect()->back();
	}

	public function unlike($id)
	{
		$album = \App\Playlist::find($id);
		$album->unlike(Auth::id());
		$album->save();

		return redirect()->back();
	}





}

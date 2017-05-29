<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class PlaylistController extends Controller
{

	public function store($song)	{
		$s = \App\Song::find($song);
		$s = $s->album_id;
		$playlist = Auth::user()->playlist;
		$playlist->songs()->attach($song);
		$playlist->save();

		return redirect("/albums/$s");

	}


}

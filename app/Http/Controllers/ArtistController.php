<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;

class ArtistController extends Controller
{
	public function index()
	{
		$artists = Artist::orderBy('name', 'asc')->get();

		return view('artists.index', compact('artists'));
	}

	public function show(Artist $artist)
	{
			return view('artists.show', compact('artist'));
	}


}

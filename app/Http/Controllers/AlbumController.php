<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
class AlbumController extends Controller
{

	public function index()
	{
		$albums = Album::all();

		return view('albums.index', compact('albums'));
	}

	public function show(Album $album)
	{
		return view('albums.show', compact('album'));
	}
}

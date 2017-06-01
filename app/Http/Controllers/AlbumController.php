<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use Illuminate\Support\Facades\DB;
class AlbumController extends Controller
{

	public function index()
	{
		$albums = Album::all();

		return view('albums.index', compact('albums'));
	}

	public function show(Album $album)
	{
		$likes = DB::table('likeable_likes')->where( ['likable_id' => $album->id, 'likable_type' => 'App\Album'])->get();
		
		return view('albums.show', compact('album','likes'));
	}
}

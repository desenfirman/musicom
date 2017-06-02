<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use Illuminate\Support\Facades\DB;
use Auth;

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

	public function create()
	{
		$artists = \App\Artist::all();

		return view('albums.create', compact('artists'));

	}

	public function store(Request $request)
	{
		$this->validate(request(),[
			'artist_id' => 'required',
			'title' => 'required',   
			]);
		
		$album = new Album;
		$album->title = request('album_title');
		$album->artist_id = request('artist_id');

		
		$extension = $request->album_image->extension();
		$path = request()->file('album_image')->storeAs('public/album_image', 'album_'. $album->title.'.'.$extension);
		$path = str_replace("public/","",$path);
		$album->album_image = $path;
		$album->save();


			$track_number = $request->track_number;
			$song_title = $request->title;
			$link = $request->link;
			$length = count($track_number);

			for ($i=0; $i < $length ; $i++) { 
				$song = new \App\Song;
				$song->artist_id = request('artist_id');
				$song->album_id = $album->id;
				$song->track_number = $track_number[$i];
				$song->title = $song_title[$i];
				$song->link = $link[$i];
				$song->save();
			}
			return redirect()->back();
		
		$album->save();//showing errors





		return redirect()->back();
	}

	public function like($id)
	{
		$album = \App\Album::find($id);
		$album->like(Auth::id());
		$album->save();

		return redirect("/album/$id");
	}

	public function unlike($id)
	{
		$album = \App\Album::find($id);
		$album->unlike(Auth::id());
		$album->save();

		return redirect("/album/$id");
	}

}

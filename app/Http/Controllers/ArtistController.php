<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;

class ArtistController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth')->except(['index','show']); 
		$this->middleware('admin')->except(['index','show']); 
	}

	public function index()
	{
		$artists = Artist::orderBy('name', 'asc')->get();

		return view('artists.index', compact('artists'));
	}

	public function show(Artist $artist)
	{
		return view('artists.show', compact('artist'));
	}

	public function create()
	{
		return view('artists.create');
	}


	public function store(Request $request)
	{
		$this->validate(request(),[
			'name' => 'required|min:2',
			'artist_description' => 'required',
			'artist_image' => 'required'			   
			]);


			$artist = new Artist;
			$artist->name = request('name');
			$artist->artist_description = request('artist_description');
			$extension = $request->artist_image->extension();
			$path = request()->file('artist_image')->storeAs('public/artist_image', 'artist_'. $artist->name.'.'.$extension);
			$path = str_replace("public/","",$path);
			$artist->artist_image = $path;
			$artist->save();
			return redirect()->back();
		
		return redirect()->back();
	}
	


}

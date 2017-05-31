<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
	public function show($id)
	{
		$user = \App\User::findOrFail($id);
		$received = \DB::table('messages')->where('recipient_id',$id)->get();
		$albums = \App\Album::whereLikedBy($id)->orderBy('title', 'asc')->get();

		return view('profile.show',compact('user','received','albums'));
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
class ProfileController extends Controller
{
	public function show($id)
	{
		$user = \App\User::findOrFail($id);
		$received = \DB::table('messages')->where('recipient_id',$id)->get();
		$albums = \App\Album::whereLikedBy($id)->orderBy('title', 'asc')->get();
		$following = \App\User::whereLikedBy($id)->orderBy('username', 'asc')->get();
		$followers = DB::table('likeable_likes')->where( ['likable_id' => $id, 'likable_type' => 'App\User'])->get();


		return view('profile.show',compact('user','received','albums','following','followers'));
	}

	public function follow($id)
	{
		$user = \App\User::find($id);
		$user->like(Auth::id());
		$user->save();

		return redirect("/profile/$id");
	}

	public function unfollow($id)
	{
		$user = \App\User::find($id);
		$user->unlike(Auth::id());
		$user->save();

		return redirect("/profile/$id");
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
	public function register()
	{
		return view('registration.create');
	}

	public function store(Request $request)
	{
		$this->validate(request(),[
			'username' => 'required',
			'email' => 'required|email',
			'password' => 'required|confirmed' 

			]);
		//create and save the user

		$user = User::create(request(['username','email','password']));
		$password = $request->input('password');
		$user->password = bcrypt($password);
		$user->save();
		$playlist = new \App\Playlist;
		$playlist->user_id = $user->id;
		$playlist->save();
		auth()->login($user);

		return redirect('/');

	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class RegistrationController extends Controller
{
	public function register()
	{
		if (Auth::check()) {
			return redirect('/');
		}
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
		//sign them in
		auth()->login($user);
		//redirect to home page
		return redirect('/');

	}
}

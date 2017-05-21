<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{
	public function create()
	{
		if (Auth::check()) {
			return redirect('/');
		}
		return view('sessions.create');
	}

	public function store()
	{
		if(! auth()->attempt(request(['email','password']))){
			return back();
		}
		return redirect('/');
	}

	public function destroy()
	{
		auth()->logout();
		return redirect('/');
	}

}

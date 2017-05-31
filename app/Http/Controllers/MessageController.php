<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MessageController extends Controller
{
	public function store($user, Request $request){

		$this->validate(request(),['message'=>'required|min:3']);
		/*$post->sendMessage(request('message'));*/

		$message = new \App\Message;
		$message->message = $request->message;
		$message->user_id = Auth::id();
		$message->recipient_id = $user;
		$message->save();


		return back();
	}
}

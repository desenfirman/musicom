<?php

namespace App\Http\Controllers;

use Storage;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class profile_controller extends Controller
{

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
	{
		$user = User::all();
    $userimgfilename = "s" . ".jpg";
    $userimg = Storage::get($userimgfilename);

    $compactData = array('userimg'=>$userimg, 'user'=>$user);



		return view('editprofile.index', compact($compactData));
	}


  public function processForm(Request $request)
  {

    if ($request->has) {
      # code...
    }

    if ($request->hasFile('profile_image')) {
      $img = $request->file('photo');
      $fileName = (Auth::user()->username) . $image->getClientOriginalExtension();

      $img = Image::make($image->getRealPath());
      $img->resize(500, 500, function ($constraint){
        $constraint->aspectRatio();
      });

      $img->stream();

      Storage::disk('local')->put('images'.'/'.$fileName, $img, 'public');
    }
  }


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use \Conner\Likeable\Likeable;
use Conner\Likeable\LikeableTrait;
class Playlist extends Model
{
	use LikeableTrait;

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function songs()
	{
		return $this->belongsToMany(Song::class);
	}


}

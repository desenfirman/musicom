<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Conner\Likeable\LikeableTrait;

class Album extends Model
{
	use LikeableTrait;
	public function songs()
	{
		return $this->hasMany(Song::class);
	}

	public function artist()
	{
		return $this->belongsTo(Artist::class);
	}
}

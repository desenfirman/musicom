<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
	public function artist()
	{
		return $this->belongsTo(Artist::class);
	}

	public function album()
	{
		return $this->belongsTo(Album::class);
	}

	public function playlists()
	{
		return $this->belongsToMany(Song::class);
	}
}

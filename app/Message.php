<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
  /*  public function sender()
    {
    	return $this->hasOne(User::class);
    }

    public function recipient()
    {
    	return $this->hasOne(User::class);
    }*/

    public function user()
    {
    	return $this->belongsTo(User::class);
    }



  }

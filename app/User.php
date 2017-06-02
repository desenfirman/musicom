<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Conner\Likeable\LikeableTrait;
class User extends Authenticatable
{
    use Notifiable;
    use LikeableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'username','name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'password', 'remember_token',
    ];

    public function playlist()
    {
        return $this->hasOne(Playlist::class);
    }

 

   public function messages()
   {
    return $this->hasMany(Message::class);
}
/*
public function sendMessage($message){
        // Comment::create([
        //  'body' => $body,
        //  'post_id' => $this->id
        //  ]);

    $this->messages()->create(compact('message'));
}*/

}

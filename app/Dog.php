<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    public function user(){
        return $this->belongsTo('\App\User');
    }

    public function photos(){
        return $this->hasMany('\App\Photo');
    }

    public function likes(){
        return $this->belongsToMany('App\Dog','likes','liker_id','liked_id');
    }

    public function likesMe(){
        return $this->belongsToMany('App\Dog','likes','liked_id','liker_id');
    }

    public function messagesByMe(){
        return $this->hasMany('App\Message','sender_id');
    }

    public function messagesForMe(){
        return $this->hasMany('App\Message', 'recipient_id');
    }
}

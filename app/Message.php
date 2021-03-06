<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function sender(){
        return $this->belongsTo('App\Dog','sender_id');
    }

    public function recipient(){
        return $this->belongsTo('App\Dog', 'recipient_id'); 
    }

}

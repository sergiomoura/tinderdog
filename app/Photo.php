<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function dog(){
        return $this->belongTo('\App\Dog');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\comments;
use App\post;

class post extends Model
{
    public function comments(){
        return $this->hasMany(comment::class);

    }


    public function category(){
        return $this->belongsTo("App/category");


    }

    public function user(){
        return $this->belongsTo("App/User");

    }
    public $timestamps=false;

 
}


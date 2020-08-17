<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stor;


use APP\comments;

class comment extends Controller
{
 public function stor(post $post){
 comment::create([
   'body'=>request('body'),
   'post_id'=>$post->id
  
 ]);
/*
 $post =new comment;
$post ->body =request('body');
$post->post_id=$post->id;
$post->save();*/
 return back();
 
 }


}
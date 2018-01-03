<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentController extends Controller
{

    public function store($showPost){

   	$this->validate(request(),[
   		'body' => "required"
   	]);

   Comment::create(['body'=> request('body'),
   					'post_id'=>$showPost,
   					 'user_id' => auth()->id()]);

   return back();
   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostController extends Controller
{
   public function index() {
   	$posts = Post::all();
     	return view('layout',compact('posts'));

   }
   
    public function create() {

   	return view('createPost');

   }

   public function store() {

   	$this->validate(request(),[
   		'title' => "required" ,
   		'body' => "required"
   	]);
      Post::create(request(['title','body']));
      return redirect('/');
   }

   public function show($id) {
   	$showPost = Post::find($id);
	   return view('showPost',compact('showPost'));

   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostController extends Controller
{

  public function __construct()
  {
    $this->middleware('auth')->except(['index','show']);
  }

   public function index() {
   	$posts = Post::all();
     	return view('contents.layout',compact('posts'));

   }
   
    public function create() {

   	return view('contents.createPost');

   }

   public function store() {

   	$this->validate(request(),[
   		'title' => "required" ,
   		'body' => "required",

   	]);
      Post::create(['title' => request('title'),
                    'body' => request('body'),
                    'user_id' => auth()->id()]);
      return redirect('/');
   }

   public function show($id) {
   	$showPost = Post::find($id);
	   return view('contents.showPost',compact('showPost'));

   }
}

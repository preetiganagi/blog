<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
   public function index(){

   	return view('layout');

   }
   
    public function create(){

   	return view('createPost');

   }
   public function store(){

   Post::create(request(['title','body']));
   return redirect('/');
   }

}

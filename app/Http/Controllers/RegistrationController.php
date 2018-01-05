<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create() {
      //dd("hii");
   	return view('contents.register');

   }

   public function store() {

   	$this->validate(request(),[
   		'name' => 'required',
         'email' => 'required|email',
         'password' => 'required'

   	]);
    $input=(request(['name','email','password']));
    $user = new User();
    $authUser = $user->store($input);
      auth()->login($authUser);
      return redirect('/');
      
   }
}

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PostController@index');

Route::get('/post/create', 'PostController@create');

Route::post('/post', 'PostController@store');

Route::get('/post/{post}', 'PostController@show');

Route::post('/comment/{comment}', 'CommentController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register/create', 'RegistrationController@store');

Route::get('/login', 'SessionController@login');
Route::post('/logout', 'SessionController@destroy');

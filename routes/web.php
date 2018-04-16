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

use Illuminate\Support\Facades\Route;

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
//Route::get('/posts/{post}', 'PostsController@show');

//Posts
//
//GET /posts
//GET /posts/create
//POST /posts
//GET /posts/{id}/edit
//GET /posts/{id}
//PATCH /posts/{id}
//DELETE /posts/{id}
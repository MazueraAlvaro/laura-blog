<?php

use Illuminate\Support\Facades\Route;

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
// Route::get("/", "HomeController@index")->name("home");
Route::get("/", "PostController@index")->name("home");
Route::get("posts", "PostController@create")->name("posts.create");
Route::post("posts", "PostController@store")->name("posts.store");
Route::get("posts/{id}", "PostController@show")->name("post.show");
Route::post("comments", "CommentController@store")->name("comments.store");
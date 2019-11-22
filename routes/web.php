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

Route::get('/', 'IndexController@welcome')->name('home');
Route::get('/post/{alias}/{id}', 'PostController@show')->name('post.show');
Route::get('/clip/{alias}/{id}', 'ClipController@show')->name('clip.show');
Route::get('/page/{alias}', 'PageController@show')->name('page.show');

# Comments
Route::post('/comment/create', 'CommentController@create');
Route::post('/comments', 'CommentController@index');

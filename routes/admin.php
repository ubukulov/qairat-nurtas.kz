<?php

Route::get('/admin/login', 'Admin\AuthController@login')->name('admin.login');
Route::post('/admin/login', 'Admin\AuthController@authenticate')->name('admin.authenticate');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['web', 'admin']], function(){
    Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');

    # Posts
    Route::get('/posts', 'PostController@index')->name('admin.post.index');
    Route::get('/post/create', 'PostController@create')->name('admin.post.create');
    Route::get('/post/id/edit', 'PostController@edit')->name('admin.post.edit');
    Route::post('/post/store', 'PostController@store')->name('admin.post.store');
});
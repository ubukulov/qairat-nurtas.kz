<?php

Route::get('/admin/login', 'Admin\AuthController@login')->name('admin.login');
Route::post('/admin/login', 'Admin\AuthController@authenticate')->name('admin.authenticate');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['web', 'admin']], function(){
    Route::get('/', 'AdminController@dashboard')->name('admin.dashboard');

    # Posts
    Route::get('/posts', 'PostController@index')->name('admin.post.index');
    Route::get('/post/create', 'PostController@create')->name('admin.post.create');
    Route::get('/post/{id}/edit', 'PostController@edit')->name('admin.post.edit');
    Route::post('/post/store', 'PostController@store')->name('admin.post.store');
    Route::post('/post/{id}/update', 'PostController@update')->name('admin.post.update');

    # Clips
    Route::get('/clips', 'ClipController@index')->name('admin.clip.index');
    Route::get('/clip/create', 'ClipController@create')->name('admin.clip.create');
    Route::get('/clip/{id}/edit', 'ClipController@edit')->name('admin.clip.edit');
    Route::post('/clip/store', 'ClipController@store')->name('admin.clip.store');
    Route::post('/clip/{id}/update', 'ClipController@update')->name('admin.clip.update');

    # Pages
    Route::get('/pages', 'PageController@index')->name('admin.page.index');
    Route::get('/page/create', 'PageController@create')->name('admin.page.create');
    Route::get('/page/{id}/edit', 'PageController@edit')->name('admin.page.edit');
    Route::post('/page/store', 'PageController@store')->name('admin.page.store');
    Route::post('/page/{id}/update', 'PageController@update')->name('admin.page.update');

    # Comments
    Route::get('/comments', 'CommentController@index')->name('admin.comment.index');
    Route::get('/comment/{id}/active', 'CommentController@active')->name('admin.comment.active');
    Route::get('/comment/{id}/noactive', 'CommentController@noActive')->name('admin.comment.noactive');
});

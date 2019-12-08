<?php

Route::get('/posts','HomeController@index');
Route::get('/post','PostController@show');
Route::get('/admin-panel','HomeController@dashboard')->name('dashboard');
Route::get('/admin-panel/posts','PostController@index')->name('posts');
Route::get('/admin-panel/posts/create','PostController@create');
Route::post('/admin-panel/posts/store','PostController@store');
Route::get('/admin-panel/posts/{id}','PostController@show')->name('post.show');

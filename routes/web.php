<?php

Auth::routes();

Route::get('/', 'HomeController@home')->name('front_home');
Route::get('/post/{id}', 'PostController@index')->name('front_categories');
Route::get('/categories', 'PostController@index')->name('front_categories');
Route::get('/categories/blagues', 'PostController@jokes')->name('front_jokes');
Route::get('/categories/images', 'PostController@images')->name('front_images');
Route::get('/categories/videos', 'PostController@videos')->name('front_videos');
Route::post('/post/publier', 'PostController@create')->name('front_categories_publish');
Route::get('/profil', 'UserController@profile')->name('front_profile');
Route::get('/profil/{id}', 'UserController@profile')->name('front_profile');
Route::post('/profil/publier', 'PostController@create')->name('front_profile_publish');
Route::get('/profil/parametres', 'UserController@profile')->name('front_profile');

//Route::get('/profil/{id}/message', 'HomeController@index')->name('amis');
//Route::post('/profil/{id}/message', 'HomeController@index')->name('amis');
//Route::get('/profil/{id}/amis', 'UserController@profile')->name('front_profile');

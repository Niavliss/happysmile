<?php

Auth::routes();

Route::get('/', 'HomeController@home')->name('front_home');

Route::get('/post/{id}', 'PostController@show')->name('front_post');

Route::get('/categories', 'PostController@index')->name('front_categories');
Route::get('/categories/blagues', 'PostController@jokes')->name('front_jokes');
Route::get('/categories/images', 'PostController@images')->name('front_images');
Route::get('/categories/videos', 'PostController@videos')->name('front_videos');

Route::get('/categories/publier', 'PostController@create')->name('front_categories_publish');
Route::post('/categories/publier', 'PostController@store')->name('front_categories_store');
Route::get('/mon-profil', 'UserController@myprofile')->name('front_profile');
Route::get('/profil/{id}', 'UserController@profile')->name('front_profile_show');
Route::get('/profil/publier', 'PostController@create')->name('front_profile_publish');
Route::post('/profil/publier', 'PostController@store')->name('front_profile_store');
Route::get('/parametres', 'UserController@settings')->name('front_settings');
Route::post('/profil', 'UserController@uploadImg')->name('upload_image');
Route::get('/membres', 'UserController@members')->name('front_members');
Route::get('/publier', 'UserController@publish')->name('front_profile_publish');

// Route::get('/profil/{id}/message', 'HomeController@index')->name('amis');
// Route::post('/profil/{id}/message', 'HomeController@index')->name('amis');
// Route::get('/profil/{id}/amis', 'UserController@profile')->name('front_profile');

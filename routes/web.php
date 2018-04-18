<?php

Auth::routes();

Route::get('/', 'HomeController@home')->name('front_home');
Route::get('/categories', 'PostController@index')->name('front_categories');
Route::get('/categories/blagues', 'PostController@index')->name('front_jokes');
Route::get('/categories/images', 'PostController@index')->name('front_images');
Route::get('/categories/videos', 'PostController@index')->name('front_videos');
Route::post('/categories/publier', 'PostController@create')->name('front_categories_publish');

Route::get('/categories/post/{id}', 'PostController@index')->name('front_categories');
Route::get('/categories/blagues/post/{id}', 'PostController@index')->name('front_jokes');
Route::get('/categories/images/post/{id}', 'PostController@index')->name('front_images');
Route::get('/categories/videos/post/{id}', 'PostController@index')->name('front_videos');



Route::get('/profil', 'ProfileController@profile')->name('front_profile');
Route::post('/profil/publier', 'PostController@create')->name('front_profile_publish');
Route::get('/profil/parametres', 'ProfileController@profile')->name('front_profile');
//Route::get('/profil/amis', 'ProfileController@index')->name('amis');
//Route::get('/profil/messages', 'ProfileController@index')->name('amis');
Route::get('/profil/{id}', 'ProfileController@profile')->name('front_profile');
//Route::get('/profil/{id}/message', 'HomeController@index')->name('amis');
//Route::post('/profil/{id}/message', 'HomeController@index')->name('amis');
//Route::get('/profil/{id}/amis', 'ProfileController@profile')->name('front_profile');

/*
Route::get('/members', 'MembersController@members')->name('front_membres');
Route::get('/messageries/{id}', 'HomeController@index')->name('messageries');

Route::get('/amis/{id}', 'HomeController@index')->name('amis');

Route::get('/spacelemons', 'HomeController@index')->name('spacelemons');

Route::get('/post/{id}', 'HomeController@index')->name('post');
*/

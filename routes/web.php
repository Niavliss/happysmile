<?php

Auth::routes();

Route::get('/', 'HomeController@home')->name('front_accueil');
Route::get('categories', 'CatController@categories')->name('front_categories');
Route::get('settings', 'SettingsController@settings')->name('front_settings');
Route::get('profile', 'ProfileController@profile')->name('front_profile');
Route::get('home', 'HomeController@home')->name('front_accueil');
Route::get('members', 'MembersController@members')->name('front_membres');

/*

Route::get('/messageries/{id}', 'HomeController@index')->name('messageries');

Route::get('/amis/{id}', 'HomeController@index')->name('amis');

Route::get('/spacelemons', 'HomeController@index')->name('spacelemons');

Route::get('/post/{id}', 'HomeController@index')->name('post');
*/

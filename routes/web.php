<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('front_index');
Route::get('categories', 'HomeController@categories')->name('front_categories');

/*Route::get('/profil/{id}', 'HomeController@index')->name('profil');

Route::get('/parametres/{id}', 'HomeController@index')->name('parametres');

Route::get('/messageries/{id}', 'HomeController@index')->name('messageries');

Route::get('/amis/{id}', 'HomeController@index')->name('amis');

Route::get('/spacelemons', 'HomeController@index')->name('spacelemons');

Route::get('/post/{id}', 'HomeController@index')->name('post');
*/

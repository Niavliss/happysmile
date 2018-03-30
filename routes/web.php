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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/categories', 'HomeController@index')->name('categories');

Route::get('/profil/{id}', 'HomeController@index')->name('profil');

Route::get('/parametres/{id}', 'HomeController@index')->name('parametres');

Route::get('/messageries/{id}', 'HomeController@index')->name('messageries');

Route::get('/amis/{id}', 'HomeController@index')->name('amis');

Route::get('/spacelemons', 'HomeController@index')->name('spacelemons');

Route::get('/post/{id}', 'HomeController@index')->name('post');


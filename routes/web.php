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
Route::get('/publier', 'PostController@create')->name('front_profile_publish');
Route::post('/publier', 'PostController@store')->name('front_profile_store');
Route::get('/parametres', 'UserController@settings')->name('front_settings');
Route::post('/modification-photo', 'UserController@uploadImg')->name('upload_image');
Route::post('/modification-mot-de-passe', 'UserController@uploadPassword')->name('upload_password');
Route::post('/modification-email', 'UserController@uploadEmail')->name('upload_email');
Route::get('/membres', 'UserController@members')->name('front_members');

Route::get('/cgu', 'OurCompany@cgu')->name('cgu');
Route::get('/politique-de-confidentialite', 'OurCompany@privacypolicy')->name('privacypolicy');
Route::get('/a-propos', 'OurCompany@about')->name('about');

Route::get('/faq', 'Support@faq')->name('faq');
Route::get('/signaler-un-probleme', 'Support@reportanissue')->name('reportanissue');


//TEST SETTINGS :
Route::post('/modifier-mot-de-passe', 'UserController@uploadPassword')->name('upload_password');
Route::post('/modifier-adresse-email', 'UserController@uploadEmail')->name('upload_email');

//Route::get('/publier', 'UserController@publish')->name('front_profile_publish');

// Route::get('/profil/{id}/message', 'HomeController@index')->name('amis');
// Route::post('/profil/{id}/message', 'HomeController@index')->name('amis');
// Route::get('/profil/{id}/amis', 'UserController@profile')->name('front_profile');

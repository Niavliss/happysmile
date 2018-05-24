<?php

Auth::routes();

Route::get('/', 'HomeController@home')->name('front_home');

Route::get('/post/{id}', 'PostController@show')->name('front_post');

Route::get('/categories', 'PostController@index')->name('front_categories');

Route::get('/categories/publier', 'PostController@create')->name('front_categories_publish');
Route::post('/categories/publier', 'PostController@store')->name('front_categories_store');

Route::get('/categories/{typemedia}', 'PostController@sortByTypeMedia')->name('front_typemedia');




Route::get('/post/{post}/editer','PostController@edit')->name('front_post_edit');
Route::get('/post/{id}/supprimer','PostController@softDelete')->name('front_post_delete');
Route::put('/post/{post}','PostController@update')->name('front_post_update');

Route::get('/categories/commenter', 'CommentController@create')->name('front_comment_publish');
Route::get('/categories/commenter','CommentController@edit')->name('front_comment_edit');

Route::get('/mon-profil', 'UserController@myprofile')->name('front_profile');

Route::get('/profil/{id}', 'UserController@profile')->name('front_profile_show');
Route::post('/profil/{id}', 'UserController@askfriend')->name('front_profile_friend');

Route::post('/mon-profil', 'UserController@friendmanager')->name('front_profile_response');

Route::get('/publier', 'PostController@create')->name('front_profile_publish');
Route::post('/publier', 'PostController@store')->name('front_profile_store');
Route::get('/parametres', 'UserController@settings')->name('front_settings');
Route::post('/modification-photo', 'UserController@uploadImg')->name('upload_image');
Route::post('/modification-mot-de-passe', 'UserController@uploadPassword')->name('upload_password');
Route::post('/modification-email', 'UserController@uploadEmail')->name('upload_email');
Route::get('/membres', 'UserController@members')->name('front_members');

Route::get('/cgu', 'OurCompanyController@cgu')->name('cgu');
Route::get('/politique-de-confidentialite', 'OurCompanyController@privacypolicy')->name('privacypolicy');
Route::get('/a-propos', 'OurCompanyController@about')->name('about');

Route::get('/faq', 'SupportController@faq')->name('faq');
Route::get('/signaler-un-probleme', 'SupportController@reportanissue')->name('reportanissue');

Route::get('/admin', 'Admin\AdminController@adminAccess')->name('admin_page');
Route::get('/admin/users', 'Admin\AdminController@showUsers')->name('users_admin_page');
Route::get('/admin/posts', 'Admin\AdminController@showPosts')->name('posts_admin_page');
Route::get('/admin/commentaries', 'Admin\AdminController@showCommentaries')->name('commentaries_admin_page');
Route::get('/admin/feedbacks', 'Admin\AdminController@showFeebacks')->name('feedbacks_admin_page');

//TEST SETTINGS :
Route::post('/modifier-mot-de-passe', 'UserController@uploadPassword')->name('upload_password');
Route::post('/modifier-adresse-email', 'UserController@uploadEmail')->name('upload_email');

//MESSAGERIE PRIVEE :
Route::get('/messagerie', 'MessageController@index')->name('messenger');
Route::get('/messagerie/{user}', 'MessageController@show')->name('messenger_show');

//Route::get('/publier', 'UserController@publish')->name('front_profile_publish');

// Route::get('/profil/{id}/message', 'HomeController@index')->name('amis');
// Route::post('/profil/{id}/message', 'HomeController@index')->name('amis');
// Route::get('/profil/{id}/amis', 'UserController@profile')->name('front_profile');

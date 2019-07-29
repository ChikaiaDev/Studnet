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

Route::get('/home', 'HomeController@index')->name('home');


//admin Routes
Route::get('/admin/home','AdminController@index');
Route::get('/admin','AdminController@index');


Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@Login');
Route::post('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset','Admin\ForgotPasswordController@showLinkResetForm')->name('admin.password.request');
Route::post('admin-password/email','Admin\ResetPasswordController@reset');
Route::get('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

// Admin categories
Route::get('/admin/category','CategoryController@index');
Route::post('/admin/category','CategoryController@store');

//admin post
Route::get('/post', 'PostController@index')->middleware('auth');
Route::get('/create', 'PostController@create')->middleware('auth');
Route::post('/create', 'PostController@store')->middleware('auth');
Route::post('/post', 'PostController@store')->middleware('auth');
Route::get('post/{id}', 'PostController@show')->name('post.show');
Route::get('post/{id}/edit', 'PostController@edit')->name('post.edit')->middleware('auth');
Route::put('post/{id}/edit', 'PostController@update')->name('post.update')->middleware('auth');
Route::delete('post/{id}/delete', 'PostController@destroy')->name('post.delete')->middleware('auth');
//Admin Categories


Route::get('/post', 'PostController@index')->middleware('auth');
Route::get('/create', 'PostController@create')->middleware('auth');
Route::post('/create', 'PostController@store')->middleware('auth');
Route::post('/post', 'PostController@store')->middleware('auth');
Route::get('post/{id}', 'PostController@show')->name('post.show');
Route::get('post/{id}/edit', 'PostController@edit')->name('post.edit')->middleware('auth');
Route::put('post/{id}/edit', 'PostController@update')->name('post.update')->middleware('auth');
Route::delete('post/{id}/delete', 'PostController@destroy')->name('post.delete')->middleware('auth');

//news feed categories
Route::get('/news', 'NFeedsController@index');
Route::get('/news/create', 'NFeedsController@create')->middleware('auth');
Route::post('/news/create', 'NFeedsController@store');
Route::post('/news', 'NFeedsController@store');
Route::get('news/{id}', 'NFeedsController@show');
Route::get('news/{id}/edit', 'NFeedsController@edit');
Route::put('news/{id}/edit', 'NFeedsController@update')->middleware('auth');
Route::delete('news/{id}/delete', 'NFeedsController@destroy')->middleware('auth');





Route::post('/like', 'LikeController@index')->middleware('auth');

Route::post('/comment', 'CommentController@index')->middleware('auth');
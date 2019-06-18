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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PostsController@index');

// auth
Auth::routes();
// 以下が自動でルーティングされる
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/thanks', 'Auth\RegisterController@thanks');


// posts
Route::get('/posts', 'PostsController@index');
Route::post('/posts/create', 'PostsController@create');
Route::get('/posts/{id}', 'PostsController@show');

Route::get('/posts/res/{id}', 'PostsController@res');
Route::post('/posts/res/create', 'PostsController@res_create');

Route::get('/posts/delete/{id}', 'PostsController@delete');

// user
Route::get('/users/{id}', 'UserController@show');
Route::get('/users/{id}/edit', 'UserController@edit');
Route::post('/users/{id}/update', 'UserController@update');





// join 今回は使わない。元々のAuthを使う
// Route::get('join', 'JoinController@index');
// // Route::post('join/check', 'JoinController@check');
// Route::post('join/signup', 'JoinController@signup');
// Route::get('join/thanks', 'JoinController@thanks');
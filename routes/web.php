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

Route::get('/', 'PostController@index');

Route::get('/about', 'PostController@showAbout');

Route::get('/blog', 'PostController@showBlog');
Route::get('/blog/create', "PostController@create");
Route::post('/blog', 'PostController@store');
Route::get('/blog/{id}', 'PostController@showPost');
Route::get('/contact', 'PostController@showContact');

/*Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');
Route::get('/login', 'SessionController@create');
Route::post('/login', 'SessionController@store');
Route::get('/logout', 'SessionController@destroy');*/

Auth::routes();




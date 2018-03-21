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
Route::get('/home', 'PostController@index');

Route::get('/about', 'PostController@showAbout');

Route::get('/blog', 'PostController@showBlog');
Route::get('/blog/create', "PostController@create");
Route::post('/blog', 'PostController@store');
Route::get('/blog/{id}', 'PostController@showPost');
Route::get('/contact', 'PostController@showContact');

Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store')->name('register');
Route::get('/login', 'SessionController@create');
Route::post('/login', 'SessionController@store')->name('login');
Route::get('/logout', 'SessionController@destroy');


/**
 * Ovo ti je kao da si pisao svaku rutu posebno za GET,POST,DELETE itd
 * Ali ako u jednom Controlleru imas rute koje su auth i koje nisu onda moras odvojeno da pises i
 * dodas ovo middleware na kraju svake rute ako su auth
 * I trebalo bi da im stavis i ono name
 */
/*Route::resource('image','ImagesController')->middleware('auth');*/




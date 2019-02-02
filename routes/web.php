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


Auth::routes();

Route::get('/', 'UserController@index')->name('root');

Route::get('/details/{slug}', 'UserController@details')->name('details');

Route::get('/horoscope', ['as' => 'horoscope', 'uses' => 'HoroscopeController@index']);

Route::get('/myrasi/{slug}', 'HoroscopeController@now')->name('myrasi');

Route::get('/lang', 'UserController@lang')->name('lang');


/*
|--------------------------------------------------------------------------
| Blogs Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/postitems', 'HomeController@postitems')->name('postItems');

Route::post('/ideaposted', 'HomeController@ideaposted')->name('ideaposted');

Route::post('/updateidea', 'HomeController@updateidea')->name('updateidea');

Route::get('/edititems/{id}', 'HomeController@edititems')->name('edititems');

Route::get('/myprofile', 'HomeController@myprofile')->name('myprofile');

Route::get('/publishme/{id}', 'HomeController@publishme')->name('publishme');

Route::get('/unpublishme/{id}', 'HomeController@unpublishme')->name('unpublishme');

Route::get('/archives', ['as' => 'archives', 'uses' => 'UserController@archives']);
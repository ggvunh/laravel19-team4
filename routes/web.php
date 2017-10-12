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
    return view('hotels.index');
});

Route::get('/admin', 'PageController@getAdmin')->name('admin');

Route::get('/booking', function(){
	return view('hotels.booking');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

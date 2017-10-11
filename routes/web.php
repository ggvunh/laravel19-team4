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

Route::get('/login', function () {
    return view('hotels.login');
});

Route::get('/admin', function(){
	return view('admin.index');
});

Route::get('/booking', function(){
	return view('hotels.booking');
});

Route::get('/search', function(){
	return view('hotels.search');
});

Route::get('/allrooms', 'RoomController@getRooms');
Route::get('/rooms/{room}', 'RoomController@showRoom');
Route::get('/searchresult','RoomController@searchRooms');
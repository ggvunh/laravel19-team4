<?php
use Illuminate\Support\Facades\Input;
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
//Route Promotion
Route::get('admin/promotion', 'PromotionController@home');
Route::get('admin/promotion/index', 'PromotionController@getpromotion')->name('admin.promotion.index');
Route::post('admin/promotion/index', 'PromotionController@view');
Route::get('admin/promotion/create', 'PromotionController@create');
Route::get('admin/promotion/{id}', 'PromotionController@show')->name('admin.promotion.show');
Route::get('admin/promotion/{id}/delete', 'PromotionController@delete')->name('admin.promotion.delete');
Route::post('admin/promotion', 'PromotionController@save')->name('admin.promotion');
Route::get('admin/promotion/{promotion}/edit', 'PromotionController@edit')->name('admin.promotion.edit');
Route::put('admin/promotion/{promotion}', 'PromotionController@update')->name('admin.promotion.update');

Route::get('/search', function(){
	return view('hotels.search');
});

Route::get('/allrooms', 'RoomController@getRooms');
Route::get('/rooms/{room}', 'RoomController@showRoom');
Route::get('/searchresult','RoomController@searchRooms');

//Route Service
Route::get('admin/services', 'ServiceController@home');
Route::get('admin/services/index', 'ServiceController@getservices')->name('admin.services.index');
Route::post('admin/services/index', 'ServiceController@view');
Route::get('admin/services/create', 'ServiceController@create');
Route::get('admin/services/{id}', 'ServiceController@show')->name('admin.services.show');
Route::get('admin/services/{id}/delete', 'ServiceController@delete')->name('admin.services.delete');
Route::post('admin/service', 'ServiceController@save')->name('admin.service');
Route::get('admin/services/{service}/edit', 'ServiceController@edit')->name('admin.services.edit');
Route::put('admin/services/{service}', 'ServiceController@update')->name('admin.services.update');

//Route ManagerBooking
Route::get('admin/managerbooking', 'BookingmanagerController@home');
Route::get('admin/managerbooking/index', 'BookingmanagerController@getBooking')->name('admin.managerbooking.index');
Route::get('admin/managerbooking/{id}', 'BookingmanagerController@show')->name('admin.managerbooking.show');
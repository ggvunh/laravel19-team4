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
Route::get('/', 'PromotionController@home');
Route::get('admin/promotion/index', 'PromotionController@getpromotion');
Route::post('admin/promotion/index', 'PromotionController@view');
Route::get('admin/promotion/create', 'PromotionController@create');
Route::get('admin/promotion/{promotion}', 'PromotionController@show');
Route::get('admin/promotion/{promotion}/delete', 'PromotionController@delete');
Route::post('admin/promotion', 'PromotionController@save');
Route::get('admin/promotion/{id}/edit', 'PromotionController@edit');
Route::put('admin/promotion/{id}', 'PromotionController@update');

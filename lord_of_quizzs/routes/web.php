<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinhVucController;
use App\Http\Controllers\BoCauHoiController;
use App\Http\Controllers\ChiTietBoCauHoiController;
use App\Http\Controllers\CauHoiController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::resource('/chitietbocauhois',ChiTietBoCauHoiController::class);
		Route::resource('/linhvucs',LinhVucController::class);
		Route::resource('/bocauhois',BoCauHoiController::class);
		Route::resource('/cauhois',CauHoiController::class);

});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('/chitietbocauhois',ChiTietBoCauHoiController::class);
	Route::resource('/linhvucs',LinhVucController::class);
	Route::resource('/bocauhois',BoCauHoiController::class);
	Route::resource('/cauhois',CauHoiController::class);
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});



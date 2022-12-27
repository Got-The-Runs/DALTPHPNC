<?php
use App\Http\Controllers\Api\CauHoiController;
use App\Http\Controllers\Api\BoCauHoiController;
use App\Http\Controllers\Api\LinhVucController;
use App\Http\Controllers\Api\ChiTietBoCauHoiController;
use App\Http\Controllers\Api\UserController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Câu hỏi
Route::get('/cauhoi', [CauHoiController::class, 'index']);
Route::post('/cauhoi', [CauHoiController::class, 'store']);
Route::put('/cauhoi', [CauHoiController::class, 'update']);
Route::delete('/cauhoi/{id}', [CauHoiController::class, 'destroy']);

//Bộ câu hỏi
Route::get('/bocauhoi', [BoCauHoiController::class, 'index']);
Route::post('/bocauhoi', [BoCauHoiController::class, 'store']);
Route::put('/bocauhoi', [BoCauHoiController::class, 'update']);
Route::delete('/bocauhoi/{id}', [BoCauHoiController::class, 'destroy']);

//Lĩnh vực
Route::get('/linhvuc', [LinhVucController::class, 'index']);
Route::post('/linhvuc', [LinhVucController::class, 'store']);
Route::put('/linhvuc', [LinhVucController::class, 'update']);
Route::delete('/linhvuc/{id}', [LinhVucController::class, 'destroy']);

//Chi tiết bộ câu hỏi
Route::get('/chitietbocauhoi', [ChiTietBoCauHoiController::class, 'index']);
Route::post('/chitietbocauhoi', [ChiTietBoCauHoiController::class, 'store']);
Route::put('/chitietbocauhoi', [ChiTietBoCauHoiController::class, 'update']);
Route::delete('/chitietbocauhoi/{id}', [ChiTietBoCauHoiController::class, 'destroy']);

//User
Route::get('/user', [UserController::class, 'index']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);



<?php

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
use App\Http\Controllers\API\SanphamController;
use App\Http\Controllers\API\KhachhangController;
use App\Http\Controllers\API\NhanvienController;
use App\Http\Controllers\API\LoaispController;
use App\Http\Controllers\API\NhacungcapController;
use App\Http\Controllers\API\KhoController;
use App\Http\Controllers\API\TintucController;
use App\Http\Controllers\API\SlideController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('sanphams', SanphamController::class);
Route::resource('sanphamhome', SanphamController::class);
Route::resource('khachhangs', KhachhangController::class);
Route::resource('nhanviens', NhanvienController::class);
Route::resource('loaisps', LoaispController::class);
Route::resource('nhacungcaps', NhacungcapController::class);
Route::resource('khos', KhoController::class);
Route::resource('tintucs', TintucController::class);
Route::resource('slides', SlideController::class);
<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\API\SanphamController;
use App\Http\Controllers\KhachhangController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\LoaispController;
use App\Http\Controllers\NhacungcapController;
use App\Http\Controllers\TintucController;
use App\Http\Controllers\SlideController;



Route::get('/login', function () {
    return view('admin/login');
});
Route::get('/sanpham', function () {
    return view('admin/sanpham');
});
//
Route::get('/khachhang', function () {
    return view('admin/khachhang');
});

//
Route::get('/nhanvien', function () {
    return view('admin/nhanvien');
});

//
//
Route::get('/loaisp', function () {
    return view('admin/loaisp');
});

//
Route::get('/nhacungcap', function () {
    return view('admin/nhacungcap');
});

Route::get('/tintuc', function () {
    return view('admin/tintuc');
});

Route::get('/slide', function () {
    return view('admin/slide');
});
Route::get('/product-single/{id}', function () {
    return view('nguoidung/product-single');
});
Route::get('/shop', function () {
    return view('nguoidung/shop');
});
Route::get('/gao', function () {
    return view('nguoidung/gao');
});
Route::get('/cuongphong', function () {
    return view('nguoidung/cuongphong');
});
Route::get('/cart', function () {
    return view('nguoidung/cart');
});
Route::get('/', function () {
    return view('nguoidung/index');
});
Route::get('/about', function () {
    return view('nguoidung/about');
});
Route::get('/contact', function () {
    return view('nguoidung/contact');
});
Route::get('/checkout', function () {
    return view('nguoidung/checkout');
});
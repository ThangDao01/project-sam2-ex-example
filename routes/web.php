<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\MainController;
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

Route::get('/admin/index', function () {
    return view('admin.index');
});
Route::get('/admin/data-support', function () {
    return view('admin.data.list');
});

Route::get('/admin/data-support/create', [DataController::class,'createView']);
Route::post('/admin/data-support/create', [DataController::class,'create']);
Route::get('/admin/data-support/result', [DataController::class,'testSeed']);
Route::get('/admin/data-support/list', [DataController::class,'index']);

Route::get('/chuong-trinh-hoc', function (){
    return view('user.chuongtringhoc');
});
Route::get('/phuong-phap', function (){
    return view('user.phuongphap');
});
Route::get('/ho-tro-khach-hang', function (){
    return view('user.hotrokhachhang');
});
Route::get('/loi-ich', function (){
    return view('user.loiich');
});
Route::get('/bang-gia', function (){
    return view('user.banggia');
});
Route::get('/huong-dan-hoc', function (){
    return view('user.huongdanhoc');
});

Route::get('/home', function (){
    return view('user.home');
});

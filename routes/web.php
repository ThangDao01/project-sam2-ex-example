<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\courseController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\lessonController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\trackingController;
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
//Route::get('/voice-xyz/{id}',[DataController::class,'voice']);
Route::get('/cr={idCr}',[courseController::class,'index']);
Route::get('/cr={idCr}/ls={idLs}',[lessonController::class,'index']);
Route::get('/cr={idCr}/ls={idLs}/mt={idMt}',[MaterialController::class,'index']);


Route::get('/con',function (){return view('user.congratulations');});




Route::get('/voice-xyz/id={id}',[MaterialController::class,'whereIsThe']);

Route::get('/', function (){
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/data-support', function () {
    return view('admin.data.list');
});
Route::get('/', function (){
    return view('welcome');
});
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

Route::get('/admin/data-support/create', [DataController::class,'createView']);
Route::post('/admin/data-support/create', [DataController::class,'create']);
Route::get('/admin/data-support/result', [DataController::class,'testSeed']);
Route::get('/admin/data-support/list', [DataController::class,'index']);

//tracking
Route::get('/admin/tracking/create', [trackingController::class,'createView']);
Route::post('/admin/tracking/create', [trackingController::class,'create']);
Route::get('/admin/tracking/list', [trackingController::class,'index']);

//Course
Route::get('/admin/course/create', [courseController::class,'createView']);
Route::post('/admin/course/create', [courseController::class,'create']);
Route::get('/admin/course/list', [courseController::class,'index']);

//account
Route::get('/admin/account/create', [AccountController::class,'createView']);
Route::post('/admin/account/create', [AccountController::class,'create']);
Route::get('/admin/account/list', [AccountController::class,'index']);

//Article
Route::get('/admin/article/create', [ArticleController::class,'createView']);
Route::post('/admin/article/create', [ArticleController::class,'create']);
Route::get('/admin/article/list', [ArticleController::class,'index']);

//lesson
Route::get('/admin/lesson/create', [lessonController::class,'createView']);
Route::post('/admin/lesson/create', [lessonController::class,'create']);
Route::get('/admin/lesson/list', [lessonController::class,'index']);

//feedback
Route::get('/admin/feedback/create', [feedbackController::class,'createView']);
Route::post('/admin/feedback/create', [feedbackController::class,'create']);
Route::get('/admin/feedback/list', [feedbackController::class,'index']);

//material
Route::get('/admin/material/create', [MaterialController::class,'createView']);
Route::post('/admin/material/create', [MaterialController::class,'create']);
Route::get('/admin/material/list', [MaterialController::class,'index']);





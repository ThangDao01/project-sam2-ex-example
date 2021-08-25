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
//data
Route::get('/admin/data-support/create', [DataController::class,'createView']);
Route::post('/admin/data-support/create', [DataController::class,'create']);
Route::get('/admin/data-support/result', [DataController::class,'testSeed']);
Route::get('/admin/data-support/list', [DataController::class,'index']);
Route::get('/admin/data-support/edit/id={id}', [DataController::class, 'edit']);
Route::put('/admin/data-support/{id}', [DataController::class, 'update']);
Route::get('/admin/data-support/delete/id={id}', [DataController::class, 'destroy']);


//tracking
Route::get('/admin/tracking/create', [\App\Http\Controllers\trackingController::class,'createView']);
Route::post('/admin/tracking/create', [\App\Http\Controllers\trackingController::class,'create']);
Route::get('/admin/tracking/list', [\App\Http\Controllers\trackingController::class,'index']);
Route::get('/admin/tracking/edit/id={id}', [\App\Http\Controllers\trackingController::class, 'edit']);
Route::put('/admin/tracking/{id}', [\App\Http\Controllers\trackingController::class, 'update']);
Route::get('/admin/tracking/delete/id={id}', [\App\Http\Controllers\trackingController::class, 'destroy']);

//Course
Route::get('/admin/course/create', [\App\Http\Controllers\courseController::class,'createView']);
Route::post('/admin/course/create', [\App\Http\Controllers\courseController::class,'create']);
Route::get('/admin/course/list', [\App\Http\Controllers\courseController::class,'index']);
Route::get('/admin/course/edit/id={id}', [\App\Http\Controllers\courseController::class, 'edit']);
Route::put('/admin/course/{id}', [\App\Http\Controllers\courseController::class, 'update']);
Route::get('/admin/course/delete/id={id}', [\App\Http\Controllers\courseController::class, 'destroy']);

//account
Route::get('/admin/account/create', [\App\Http\Controllers\AccountController::class,'createView']);
Route::post('/admin/account/create', [\App\Http\Controllers\AccountController::class,'create']);
Route::get('/admin/account/list', [\App\Http\Controllers\AccountController::class,'index']);
Route::get('/admin/account/edit/id={id}', [\App\Http\Controllers\AccountController::class, 'edit']);
Route::put('/admin/account/{id}', [\App\Http\Controllers\AccountController::class, 'update']);
Route::get('/admin/account/delete/id={id}', [\App\Http\Controllers\AccountController::class, 'destroy']);

//Article

Route::get('/admin/article/create', [\App\Http\Controllers\ArticleController::class,'createView']);
Route::post('/admin/article/create', [\App\Http\Controllers\ArticleController::class,'create']);
Route::get('/admin/article/list', [\App\Http\Controllers\ArticleController::class,'index']);
Route::get('/admin/article/edit/id={id}', [\App\Http\Controllers\ArticleController::class, 'edit']);
Route::put('/admin/article/{id}', [\App\Http\Controllers\ArticleController::class, 'update']);
Route::get('/admin/article/delete/id={id}', [\App\Http\Controllers\ArticleController::class, 'destroy']);
//lesson

Route::get('/admin/lesson/create', [\App\Http\Controllers\lessonController::class,'createView']);
Route::post('/admin/lesson/create', [\App\Http\Controllers\lessonController::class,'create']);
Route::get('/admin/lesson/list', [\App\Http\Controllers\lessonController::class,'index']);
Route::get('/admin/lesson/edit/id={id}', [\App\Http\Controllers\lessonController::class, 'edit']);
Route::put('/admin/lesson/{id}', [\App\Http\Controllers\lessonController::class, 'update']);
Route::get('/admin/lesson/delete/id={id}', [\App\Http\Controllers\lessonController::class, 'destroy']);

//feedback

Route::get('/admin/feedback/create', [\App\Http\Controllers\feedbackController::class,'createView']);
Route::post('/admin/feedback/create', [\App\Http\Controllers\feedbackController::class,'create']);
Route::get('/admin/feedback/list', [\App\Http\Controllers\feedbackController::class,'index']);
Route::get('/admin/feedback/edit/id={id}', [\App\Http\Controllers\feedbackController::class, 'edit']);
Route::put('/admin/feedback/{id}', [\App\Http\Controllers\feedbackController::class, 'update']);
Route::get('/admin/feedback/delete/id={id}', [\App\Http\Controllers\feedbackController::class, 'destroy']);

//material
Route::get('/admin/material/create', [\App\Http\Controllers\MaterialController::class,'createView']);
Route::post('/admin/material/create', [\App\Http\Controllers\MaterialController::class,'create']);
Route::get('/admin/material/list', [\App\Http\Controllers\MaterialController::class,'index']);
Route::get('/admin/material/edit/id={id}', [\App\Http\Controllers\MaterialController::class, 'edit']);
Route::put('/admin/material/{id}', [\App\Http\Controllers\MaterialController::class, 'update']);
Route::get('/admin/material/delete/id={id}', [\App\Http\Controllers\MaterialController::class, 'destroy']);

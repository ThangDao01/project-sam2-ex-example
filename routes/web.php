<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\courseController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\MainUserController;
use App\Http\Controllers\trackingController;
use App\Http\Controllers\lessonController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\UserController;
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


Route::get('/bang-gia', function () {
    return view('user.banggia');
});


Route::get('/', function () {
    return view('user.home');
});
Route::get('/login', [UserController::class, 'userLoginForm']);
Route::post('/login', [UserController::class, 'UserLogin']);
Route::get('/register', [UserController::class, 'userRegisterForm']);
Route::post('/register', [UserController::class, 'UserRegister']);

Route::get('/chuong-trinh-hoc', function () {
    return view('user.chuongtringhoc');
});
Route::get('/phuong-phap', function () {
    return view('user.phuongphap');
});
Route::get('/phuong-phap/test', function () {
    return view('user.article');
});
Route::get('/phuong-phap/tt={url}', [MainUserController::class, 'articleDetail']);

Route::get('/ho-tro-khach-hang', function () {
    return view('user.hotrokhachhang');
});
Route::get('/loi-ich', function () {
    return view('user.loiich');
});
Route::get('/bang-gia', function () {
    return view('user.banggia');
});
Route::get('/lisson-view', function () {
    return view('user.lessonView');
});


Route::get('/course', [MainUserController::class, 'getCourse']);
Route::get('/huong-dan-hoc', function () {
    return view('user.huongdanhoc');
});

Route::get('/lesson-detail', function () {
    return view('material.lesson-detail');
});

/*
 * error
 */

Route::get('/coming-soon', function () {
    return view('error.coming-soon');
});


/*
 * Course
 */
Route::get('/account/seed', [MainUserController::class, 'getSeed']);
Route::get('/test/game',[MainUserController::class,'memoryGame']);

Route::get('/voice-xyz/id={id}', [MainUserController::class, 'whereIsThe']);

Route::get('/cr={id}', [MainUserController::class, 'getLessonByCourse']);
Route::get('/ls={id}/mt', [MainUserController::class, 'checkMaterial']);
//Route::get('/ls={id}/mt={lc}',[MainUserController::class,'createMaterial']);
Route::get('/ls={id}/mt={lc}', [MainUserController::class, 'getMaterialView']);


Route::get('/auto={id}/key={key}', [lessonController::class, 'autoCreateLesson']);

/*
-----  tool -----
*/
//ảnh video => url
Route::get('/cloudinary', function () {
    return view('tool.cloudinary');
});

Route::get('/mail/{salt}/{email}/{name}', [EmailController::class, 'CheckingMail']);


// paint
Route::get('/paint', function () {
    return view('tool.paint');
});

/*
-----  admin -----
*/
Route::get('/contact-us', [ConfigController::class, 'Contactus']);
Route::get('/about-us', [ConfigController::class, 'AboutUs']);
Route::get('/policy', [ConfigController::class, 'Policy']);

Route::get('/admin', [AccountController::class, 'index']);
Route::get('/admin/login', function () {
    return view('admin.Account.login');
});
Route::get('/admin/register', function () {
    return view('admin.Account.register');
});
Route::get('/admin/config', [ConfigController::class, 'index']);
Route::post('/admin/config/update', [ConfigController::class, 'update']);


//config
Route::get('/admin/config/create', [DataController::class, 'createView']);
Route::post('/admin/config/create', [DataController::class, 'create']);
Route::get('/admin/config/result', [DataController::class, 'seedProMax']);
Route::get('/admin/config/list', [DataController::class, 'index']);
Route::get('/admin/config/edit/id={id}', [DataController::class, 'edit']);
Route::post('/admin/config/{id}', [DataController::class, 'update']);
Route::get('/admin/config/delete/id={id}', [DataController::class, 'destroy']);


//data
Route::get('/admin/data-support/create', [DataController::class, 'createView']);
Route::post('/admin/data-support/create', [DataController::class, 'create']);
Route::get('/admin/data-support/result', [DataController::class, 'seedProMax']);
Route::get('/admin/data-support/list', [DataController::class, 'index']);
Route::get('/admin/data-support/edit/id={id}', [DataController::class, 'edit']);
Route::post('/admin/data-support/{id}', [DataController::class, 'update']);
Route::get('/admin/data-support/delete/id={id}', [DataController::class, 'destroy']);


//tracking
Route::get('/admin/tracking/create', [trackingController::class, 'createView']);
Route::post('/admin/tracking/create', [trackingController::class, 'create']);
Route::get('/admin/tracking/list', [trackingController::class, 'index']);
Route::get('/admin/tracking/edit/id={id}', [trackingController::class, 'edit']);
Route::put('/admin/tracking/{id}', [trackingController::class, 'update']);
Route::get('/admin/tracking/delete/id={id}', [trackingController::class, 'destroy']);

//Course
Route::get('/admin/course/create', [courseController::class, 'createView']);
Route::post('/admin/course/create', [courseController::class, 'create']);
Route::get('/admin/course/list', [courseController::class, 'index']);
Route::get('/admin/course/edit/id={id}', [courseController::class, 'edit']);
Route::put('/admin/course/{id}', [courseController::class, 'update']);
Route::get('/admin/course/delete/id={id}', [courseController::class, 'destroy']);

//account

Route::get('/admin/register', [AccountController::class,'registerView']);
Route::post('/admin/register', [AccountController::class,'AdminRegister']);
Route::get('/admin/login', [AccountController::class,'loginView']);
Route::post('/admin/login', [AccountController::class,'AdminLogin']);
Route::get('/logout-auth', [AccountController::class, 'logout_auth']);
Route::post('/assign-roles', [AdminUserController::class, 'assign_roles']);
Route::get('/delete-user-roles/{admin_id}', [AdminUserController::class, 'delete_user_roles']);
Route::get('/impersonate/{admin_id}', [AdminUserController::class, 'impersonate']);
Route::get('/impersonate-destroy', [AdminUserController::class, 'impersonate_destroy']);
Route::get('/admin/account/list', [AdminUserController::class,'index']);
Route::get('/admin/account/delete/id={id}', [AccountController::class, 'destroy']);


//Article

Route::get('/admin/article/create', [ArticleController::class, 'createView']);
Route::post('/admin/article/create', [ArticleController::class, 'create']);
Route::get('/admin/article/list', [ArticleController::class, 'index']);
Route::get('/admin/article/edit/id={id}', [ArticleController::class, 'edit']);
Route::put('/admin/article/{id}', [ArticleController::class, 'update']);
Route::get('/admin/article/delete/id={id}', [ArticleController::class, 'destroy']);
//lesson

Route::get('/admin/lesson/create', [lessonController::class, 'createView']);
Route::post('/admin/lesson/create', [lessonController::class, 'create']);
Route::get('/admin/lesson/list', [lessonController::class, 'index']);
Route::get('/admin/lesson/edit/id={id}', [lessonController::class, 'edit']);
Route::put('/admin/lesson/{id}', [lessonController::class, 'update']);
Route::get('/admin/lesson/delete/id={id}', [lessonController::class, 'destroy']);

//feedback

Route::get('/admin/feedback/create', [feedbackController::class,'createView']);
Route::post('/admin/feedback/create', [feedbackController::class,'create']);
Route::get('/admin/feedback', [feedbackController::class,'index']);
Route::get('/admin/feedback/edit/id={id}', [feedbackController::class, 'edit']);
Route::put('/admin/feedback/{id}', [feedbackController::class, 'update']);
Route::get('/admin/feedback/delete/id={id}', [feedbackController::class, 'destroy']);

//material
Route::get('/admin/material/create', [MaterialController::class, 'createView']);
Route::post('/admin/material/create', [MaterialController::class, 'create']);
Route::get('/admin/material/list', [MaterialController::class, 'index']);
Route::get('/admin/material/edit/id={id}', [MaterialController::class, 'edit']);
Route::post('/admin/material/{id}', [MaterialController::class, 'update']);
Route::get('/admin/material/delete/id={id}', [MaterialController::class, 'destroy']);

//
//Route::get('/auth-register', [\App\Http\Controllers\AuthController::class, 'AuthIndex']);
//Route::get('/login-auth', [\App\Http\Controllers\AuthController::class, 'login_auth']);

//Route::post('/register', [\App\Http\Controllers\AuthController::class, 'Register']);
//Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);


//




<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChurchController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\SermonController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/






Route::group(['middleware' => 'auth'], function(){

Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');

// CHURCH SERMONS
Route::get('/admin/sermon', [SermonController::class, 'sermon'])->name('admin.sermon');
Route::get('/admin/sermon_create', [SermonController::class, 'sermons_create'])->name('admin.sermon_create');
Route::post('/admin/sermon', [SermonController::class, 'handle_sermon'])->name('admin.sermon');
Route::delete('/admin/{id}', [SermonController::class, 'destroy_sermon'])->name('admin.destroy_sermon');
Route::delete('/admin/{id}/sermon', [SermonController::class, 'destroy_sermon'])->name('admin.destroy_sermon');

// CHURCH DEPARTMENT
Route::get('/admin/department', [DepartmentController::class, 'department'])->name('admin.department');
Route::get('/admin/department_create', [DepartmentController::class, 'department_show'])->name('admin.department_create');
Route::post('/admin/department_create', [DepartmentController::class, 'create_department'])->name('admin.department_create');
Route::delete('/admin/{id}/depart', [DepartmentController::class, 'destroy_depart'])->name('admin.destroy_depart');

// CHURCH ACTIVITY
Route::get('/admin/activity', [ActivityController::class, 'activity'])->name('admin.activity');
Route::get('/admin/activity_create', [ActivityController::class, 'activity_show'])->name('admin.activity_create');
Route::post('/admin/activity_create', [ActivityController::class, 'create_activity'])->name('admin.activity_create');
Route::delete('/admin/{id}', [ActivityController::class, 'destroy_activity'])->name('admin.destroy_activity');

// CHURCH EVENTS
Route::get('/admin/event', [AdminController::class, 'event'])->name('admin.event');
Route::post('/admin/event', [AdminController::class, 'handle_event'])->name('admin.event');
Route::delete('/admin/{id}/event', [AdminController::class, 'destroy_event'])->name('admin.destroy_event');


// CHURCH LOCATION
Route::get('/admin/location', [AdminController::class, 'location'])->name('admin.location');
Route::post('/admin/location', [AdminController::class, 'handle_location'])->name('admin.location');


// CHURCH INTRODUCTION
Route::get('/admin/intro', [AdminController::class, 'intro'])->name('admin.intro');
Route::post('/admin/intro', [AdminController::class, 'handle_intro'])->name('admin.intro');
Route::delete('/admin/{id}/intro', [AdminController::class, 'destroy_intro'])->name('admin.destroy_intro');


// CHURCH BIBLE VERSES
Route::get('/admin/bible_verse', [AdminController::class, 'bible_verse'])->name('admin.bible_verse');
Route::post('/admin/bible_verse', [AdminController::class, 'handle_bible_verse'])->name('admin.bible_verse');
Route::delete('/admin/{id}/bible', [ActivityController::class, 'destroy_verse'])->name('admin.destroy_verse');


Route::post('admin/logout', [AuthController::class, 'logout'])->name('logout');
// Route::get('/admin/contact', [AdminController::class, 'contact'])->name('admin.contact');
});


Route::get('/', [ChurchController::class, 'index'])->name('church.index');
Route::get('/church/about', [ChurchController::class, 'about'])->name('church.about');
Route::get('/church/contact', [ChurchController::class, 'contact'])->name('church.contact');
Route::get('/church/department', [ChurchController::class, 'department'])->name('church.department');
Route::get('/church/give', [ChurchController::class, 'give'])->name('church.give');
Route::get('/church/privacy-policy', [ChurchController::class, 'privacy_policy'])->name('church.privacy-policy');
Route::get('/church/history', [ChurchController::class, 'history'])->name('church.history');
Route::get('/church/mission', [ChurchController::class, 'mission'])->name('church.mission');
Route::get('/church/belief', [ChurchController::class, 'belief'])->name('church.belief');



Route::get('admin/login', [AuthController::class, 'login'])->name('login');
Route::post('admin/login', [AuthController::class, 'valid'])->name('login');

Route::get('admin/register', [AuthController::class, 'register'])->name('register');
Route::post('admin/register', [AuthController::class, 'store'])->name('register');
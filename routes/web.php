<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/admin/login', function () {
    return view('admin.login');
});

//route buat doctor
Route::get('/doctor/login', function () {
    return view('doctor.login');
});
Route::get('/doctor/register', function () {
    return view('doctor.register');
});
Route::post('/doctor/register', [DoctorController::class, 'register' ])
    ->middleware(['guest']);

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/reserve', function () {
    return view('reserve');
});

Route::get('/waiting', function () {
    return view('waiting');
});

Route::get('/examination', function () {
    return view('examination');
});

Route::get('/history', function () {
    return view('history');
});

Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function() {
    Route::view('/dashboard', "dashboard")->name('dashboard');

    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');
	
});

Route::get('/test', function () {
	return view('this');
});
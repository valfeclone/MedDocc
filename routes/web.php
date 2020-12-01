<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReportController;
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

//buat register user
Route::view('/register', "auth.register")->name("register");
Route::post('/register', [UserController::class, 'register'])
    ->middleware(['guest']);

//buat login user
Route::view('/login', "auth.login")->name("login");

//buat user punya yarda
Route::post('/user/register', [UserController::class, 'register'])
    ->middleware(['guest']);
Route::get('/user/register', function () {
    return view('register');
});

//route buat admin
Route::post('/admin/login', [AdminController::class, 'login'])
    ->middleware(['guest']);
Route::view('/admin/login', "admin.login")->name('admin.login');

//route buat doctor
Route::view('/doctor/login', "doctor.login")->name('doctor.login');
Route::post('/doctor/login', [DoctorController::class, 'login' ])
    ->middleware(['guest']);

Route::get('/doctor/register', function () {
    return view('doctor.register');
});
Route::post('/doctor/register', [DoctorController::class, 'register' ])
    ->middleware(['guest']);
    
//route dasboard user
Route::get('/user/dashboard', function () {
    return view('user-dashboard');
});
    
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
    return view('invoice');
});

Route::get('/history', function () {
    return view('history');
});

Route::group([ "middleware" => ['auth:sanctum', 'verified'] ], function() {
    Route::view('/dashboard', "dashboard")->name('dashboard');
    
    Route::get('/user', [ UserController::class, "index_view" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');
    Route::get('/user/dashboard', function () {
        return view('user-dashboard');
    })->name('user.dashboard');
    
    //route buat buat report
    // Route::get('/user/reserve', function () {
    //     return view('user.makereport');
    // });
    Route::view('/user/reserve', "user.makereport");
    Route::post('/user/reserve', [ReportController::class, 'makeReport' ]);
});
    
Route::get('/about-us', function () {
    return view('about-us');
});


//dashboard doctor-admin
Route::get('/admin/doctor', [ AdminController::class, 'indexDoctor'])->name('admin.doctor');
Route::get('/admin/doctor/verified', [ AdminController::class, 'indexDoctorVerif']);
Route::get('/admin/doctor/unverified', [ AdminController::class, 'indexDoctorUnverif']);
Route::post('/admin/doctor/alter/{id}', [ AdminController::class, 'alterDocPermi']);

//dashboard doctor-admin
Route::get('/doctor/invoice', [ DoctorController::class, 'indexInvoice'])->name('doctor.invoice');
Route::get('/doctor/invoice/untaken', [ DoctorController::class, 'indexInvoiceNotTaken']);
Route::get('/doctor/invoice/taken', [ DoctorController::class, 'indexInvoiceAccepted']);
Route::get('/doctor/invoice/done', [ DoctorController::class, 'indexInvoiceCompleted']);
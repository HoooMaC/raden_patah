<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\login_Controller;
use App\Http\Controllers\pengumuman_Controller;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\PTQController;

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

Route::get('/', [UserController::class, 'home']);
Route::get('/public/httpdocs', [UserController::class, 'home']);

Route::get('/program', [UserController::class, 'program']);
Route::get('/event', [UserController::class, 'event']);
Route::get('/unit', [UserController::class, 'unit']);
Route::get('/layanan', [UserController::class, 'layanan'])->name('pages.layanan');

Route::get('/article', [UserController::class, 'article']);

// ?TEMPORARY inactive for now
// Route::get('/pengumuman', [UserController::class, 'pengumuman'])->name('pages.pengumuman');

// TODO : FIXME
Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/admin', [UserController::class, 'admin'])->name('admin.dashboard');

// TODO : add authentication depends on the role
// program for Admin
Route::get('/programharian', [AdminController::class, 'program_harian']);
Route::get('/programmingguan', [AdminController::class, 'program_mingguan']);
Route::get('/programlainnya', [AdminController::class, 'program_lainnya']);
Route::get('/programtriwulan', [AdminController::class, 'program_triwulan']);
Route::get('/programinsidental', [AdminController::class, 'program_insidental']);

Route::resource('/pengumuman', pengumuman_Controller::class);
Route::get('/pengumuman', [pengumuman_Controller::class, 'index']);
Route::post('/pengumuman', [pengumuman_Controller::class, 'store']); // Menggunakan metode POST untuk menyimpan data
Route::put('/pengumuman/update/{id_pengumuman}', [pengumuman_Controller::class, 'update']);
Route::post('/pengumuman/delete/{id_pengumuman}', [pengumuman_Controller::class, 'destroy']);


// ARTIKEL
Route::resource('artikel', ArtikelController::class);

// LOGIN & LOGOUT START

// Route::post('/login', 'login_Controller@login')->name('login')->middleware('auth');;

Route::get('/login', [login_Controller::class, 'index']);
Route::post('/login', [login_Controller::class, 'login'])->name('login');
Route::post('/', [login_Controller::class, 'logout']);
Route::post('/logout', [login_Controller::class, 'logout'])->name('logout');

Route::get('auth/google',[GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

// REGISTER START

Route::get('/register', [login_Controller::class, 'index1']);
Route::post('/signin/register', [login_Controller::class, 'register']);
Route::post('/signin/create', [login_Controller::class, 'create']);


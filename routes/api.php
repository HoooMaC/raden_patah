<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\PTQController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', [APIController::class, 'index']);
Route::get('/users', [APIController::class, 'index']);
Route::post('/test', [APIController::class, 'test']);
Route::post('/register', [APIController::class, 'register']);
Route::post('/login', [APIController::class, 'login']);

Route::get('/user/{id}', [APIController::class, 'getUserById']);
Route::get('/user/email/{email}', [APIController::class, 'getUserByEmail']);


// PTQ START
Route::get('/ptq/Ziyaadah/AllRecords', [PTQController::class, 'GetAllZiyaadah']);
Route::get('/ptq/Ziyaadah/AllReviewers', [PTQController::class, 'GetAllReviewer']);
Route::get('/ptq/Ziyaadah/AllHafizs', [PTQController::class, 'GetAllHafiz']);

Route::post('/ptq/new/ziyaadah', [PTQController::class, 'NewZiyaadah']);
Route::post('/ptq/new/tilawah', [PTQController::class, 'NewTilawah']);
Route::post('/ptq/new/murajaah', [PTQController::class, 'NewMurajaah']);

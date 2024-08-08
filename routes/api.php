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



Route::middleware(['check.ptq.api.key'])->group(function () {
    Route::get('/users', [APIController::class, 'getAllUsers']);

    Route::get('/user/{id}', [APIController::class, 'getUserById']);
    Route::get('/user/email/{email}', [APIController::class, 'getUserByEmail']);

    // PTQ START
    Route::post('/login', [PTQController::class, 'login']);

    Route::get('/ptq/Ziyaadah/AllRecords', [PTQController::class, 'GetAllZiyaadah']);
    Route::get('/ptq/Ziyaadah/AllReviewers', [PTQController::class, 'GetAllReviewer']);
    Route::get('/ptq/Ziyaadah/AllHafizs', [PTQController::class, 'GetAllHafiz']);

    Route::post('/ptq/RecordQuran', [PTQController::class, 'RecordQuran']);

    // get specific user record
    Route::post('/ptq/UserRecord', [PTQController::class, 'UserRecord']);
});

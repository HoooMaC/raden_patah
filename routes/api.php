<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

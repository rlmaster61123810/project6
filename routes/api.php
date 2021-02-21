<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\PostController;
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
Route::post('/login', [AuthController::class, 'apiLogin']);
Route::post('/register', [AuthController::class, 'apiRegister']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'apiLogout']);
Route::middleware('auth:sanctum')->get('/me', [AuthController::class, 'me']);

Route::get('/post', [PostController::class, 'apiIndex']);
Route::middleware('auth:sanctum')->get('/post/{id}', [PostController::class, 'apiPost']);
Route::middleware('auth:sanctum')->post('/post/store', [PostController::class, 'apiStore']);
Route::middleware('auth:sanctum')->post('/post/update/{id}', [PostController::class, 'apiUpdate']);
Route::middleware('auth:sanctum')->post('/post/delete/{id}', [PostController::class, 'apiDestroy']);

Route::middleware('auth:api')->get('/user', function (Request $request) {

Route::get('/banners', [BannerController::class, 'apiIndex']);
Route::middleware('auth:sanctum')->get('/banners/{id}', [BannerController::class, 'apiPost']);
Route::middleware('auth:sanctum')->post('/banners/store', [BannerController::class, 'apiStore']);
Route::middleware('auth:sanctum')->post('/banners/update/{id}', [BannerController::class, 'apiUpdate']);
Route::middleware('auth:sanctum')->post('/banners/delete/{id}', [BannerController::class, 'apiDestroy']);


    return $request->user();
});

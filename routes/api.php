<?php

use App\Models\Post;
use App\Http\Controllers\PostApiController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/articles', [PostApiController::class, 'index']);
Route::get('/articles/{post}', [PostApiController::class, 'post']);
Route::post('/articles', [PostApiController::class, 'store']);
Route::put('/articles/{post}', [PostApiController::class, 'update']);
Route::delete('/articles/{post}', [PostApiController::class, 'destroy']);
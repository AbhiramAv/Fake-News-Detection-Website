<?php

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
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth', 'verified')->name('home');
Route::view('/home', 'home')->middleware('auth', 'verified');
Route::view('/profile/edit', 'profile.edit')->middleware('auth');
Route::view('/profile/password', 'profile.password')->middleware('auth');
Route::view('/two-factor', 'auth.two-factor')->middleware('auth');
Route::view('/two-factor-challenge', 'two-factor-challenge')->middleware('auth');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

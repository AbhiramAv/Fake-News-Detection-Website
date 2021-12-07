<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ElasticSearchController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\SurveyController;
use Illuminate\Http\Request;

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
    return view('dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function (Request $request) {
    $role = Auth::user()->is_verified;
    Log::info('User failed to login.', ['id' => $role->id]);
    if ($role == '0') {
        echo '<script type="text/javascript">alert("In order to login. You need to get access from admin!");</script>';
        return back();
    } else {
        return view('search.serp');
    }
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', \App\Http\Controllers\AdminController::class);
});


Route::get('recaptchacreate', 'RecaptchaController@create');
Route::post('store', 'RecaptchaController@store');

Route::get('/fakearticle', [ElasticSearchController::class, 'index'])->name('search');

Route::get('/fakearticles', [CountController::class, 'index']);

Route::get('/article/{id}', [PaperController::class, 'index']);

Route::get('/article/{id}/dashboard', [PaperController::class, 'dashboard']);
 
Route::get('/article/{id}/snopes', [PaperController::class, 'dashboard']);

Route::get('/article/{id}/survey', [PaperController::class, 'dashboard']);

Route::get('/article/{id}/SurveyCreate', [SurveyController::class, 'SurveyCreate']);

Route::post("surveydata", [SurveyController::class, 'getData']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

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
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home',[App\Http\Controllers\HomeController::class, 'profileUpdate'])->name('profileUpdate');
Route::get('/perfil', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

Auth::routes();

Route::get('/home2', [App\Http\Controllers\HomeController::class, 'recluadmin']);
Route::get('/home2',[UserController::class, 'index']);

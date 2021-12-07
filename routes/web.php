<?php

use App\Http\Controllers\inicialController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RegController;

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

Route::get('/laravel', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login',[App\Http\Controllers\AuthController::class, 'dashboard'])->name('login');

Route::post('/login/posted',[App\Http\Controllers\AuthController::class, 'log'])->name('login.post');

// Route::get('/register',[App\Http\Controllers\Auth\RegisterController::class, 'index'])->name('register');

Route::get('/register', [App\Http\Controllers\RegController::class, 'index'])->name('register');

Route::post('/register/posted', [App\Http\Controllers\RegController::class, 'registro'])->name('register.post');


// Route::get('/admin1',[App\Http\Controllers\AuthController::class, 'dashboard'])->name('admin');
// Route::get ('/produtos1', [App\Http\Controllers\inicialController::class, 'inicial'])->name ('inicial');
// Route::get('/admin',[App\Http\Controllers\inicialController::class, 'index'])->name('admin');

Route::resource('/',MenuController::class);

Route::get('/menu',[App\Http\Controllers\MenuController::class, 'index'])->name('menu');

Route::resource('/produtos',inicialController::class);

Route::get('/produtos',[App\Http\Controllers\inicialController::class, 'index'])->name('produtos');




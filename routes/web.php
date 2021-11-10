<?php

use App\Http\Controllers\inicialController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin',[App\Http\Controllers\AuthController::class, 'dashboard'])->name('admin');

/* Route::get ('/produtos1', [App\Http\Controllers\inicialController::class, 'inicial'])->name ('inicial'); */

Route::resource ('/produtos', inicialController::class);




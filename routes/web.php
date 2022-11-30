<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionsController;

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

//index route
Route::get('/', function () {
    return view('login');
})->middleware('guest');

//End user landing page
Route::get('landing', function(){
    return view('landing');
})->middleware('auth');

//Sign up Routes
Route::resource('users', UserController::class);
Route::get('signup', [UserController::class, 'create'])->middleware('guest');
Route::post('signup', [UserController::class, 'store'])->middleware('guest');

//Login & Logout Routes
Route::resource('sessions', SessionsController::class);
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
Route::get('login', function () {
    return view('login');
})->name('login')->middleware('guest');

//Edit User Routes
// Route::get('update', [UserController::class, 'edit'])->middleware('auth');
// Route::post('update', [UserController::class, 'update'])->middleware('auth');

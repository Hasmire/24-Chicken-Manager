<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\EmployeeController;

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
    return view('end-user.landing');
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
Route::get('edit', [UserController::class, 'edit'])->middleware('auth');

// Menu Routes
Route::get('menu', [FoodController::class, 'menu']);
Route::get('menu/{food:id}', [FoodController::class, 'show']);

// End-User Checkout
Route::get('checkout', [CheckoutController::class, 'show']);
Route::post('add', [CheckoutController::class, 'add']);
Route::post('remove-order', [CheckoutController::class, 'remove']);
Route::post('place-order', [CheckoutController::class, 'place']);

// Employee Order
Route::get('employee', [EmployeeController::class, 'show']);
Route::get('employee/new-order', [EmployeeController::class, 'showNew']);
Route::post('employee/remove-order', [EmployeeController::class, 'remove']);
Route::post('employee/add-order', [EmployeeController::class, 'addOrder']);
Route::post('employee/place-order', [EmployeeController::class, 'place']);
Route::post('employee/new-order', [EmployeeController::class, 'newOrder']);
Route::post('employee/confirm-order', [EmployeeController::class, 'confirm']);

//Admin Dashboard Route
Route::get('admin', function () {
    return view('admin');
});

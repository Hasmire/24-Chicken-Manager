<?php

use App\Http\Controllers\AdminController;
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
Route::get('menu', [FoodController::class, 'menu'])->middleware('auth');
Route::get('menu/{food:id}', [FoodController::class, 'show'])->middleware('auth');

// End-User Checkout
Route::get('checkout', [CheckoutController::class, 'show'])->middleware('auth');
Route::post('add', [CheckoutController::class, 'add'])->middleware('auth');
Route::post('remove-order', [CheckoutController::class, 'remove'])->middleware('auth');
Route::post('place-order', [CheckoutController::class, 'place'])->middleware('auth');

//Employee Dashboard Route
Route::get('employee', [EmployeeController::class, 'show'])->middleware('employee');
Route::get('employee/new-order', [EmployeeController::class, 'showNew'])->middleware('employee');
Route::post('employee/remove-order', [EmployeeController::class, 'remove'])->middleware('employee');
Route::post('employee/add-order', [EmployeeController::class, 'addOrder'])->middleware('employee');
Route::post('employee/place-order', [EmployeeController::class, 'place'])->middleware('employee');
Route::post('employee/new-order', [EmployeeController::class, 'newOrder'])->middleware('employee');
Route::post('employee/confirm-order', [EmployeeController::class, 'confirm'])->middleware('employee');
Route::post('employee/edit-order', [EmployeeController::class, 'getEdit'])->middleware('employee');
Route::get('employee/show-edit-order/{order:id}', [EmployeeController::class, 'showEdit'])->middleware('employee');
Route::post('employee/save-edit-order', [EmployeeController::class, 'save'])->middleware('employee');

//Admin Dashboard Route
Route::resource('adminpage', AdminController::class)->middleware('admin');
Route::get('admin', [AdminController::class, 'index'])->middleware('admin');
Route::get('admin-menu/{food:id}', [AdminController::class, 'editorView'])->middleware('admin');

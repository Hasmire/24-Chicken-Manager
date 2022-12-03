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

// User Routes
Route::resource('users', UserController::class);

Route::middleware('guest')->group(function () {
    // Index Route
    Route::get('/', function () {
        return view('login');
    })->middleware('guest');

    // Sign-up Routes
    Route::get('signup', [UserController::class, 'create']);
    Route::post('signup', [UserController::class, 'store']);

    // Login Routes
    Route::resource('sessions', SessionsController::class);
    Route::post('login', [SessionsController::class, 'store']);
    Route::get('login', function () {
        return view('login');
    })->name('login');
});

// Authenticated Dashboard Route
Route::middleware('auth')->group(function () {
    // Logout
    Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

    // Landing page
    Route::get('landing', function () {
        return view('end-user.landing');
    });

    // Edit User Route
    Route::get('edit', [UserController::class, 'edit']);

    // Menu Routes
    Route::get('menu', [FoodController::class, 'menu']);
    Route::get('menu/{food:id}', [FoodController::class, 'show']);

    // Checkout Routes
    Route::resource('checkout', CheckoutController::class, [
        'except' => ['show', 'edit', 'update']
    ]);
});

// Employee Dashboard Route
// REFACTOR
Route::middleware('employee')->group(function () {
    Route::resource('employee', EmployeeController::class, [
        'except' => ['destroy']
    ]);
    Route::get('employee/new-order', [EmployeeController::class, 'indexNew'])->name('employee.indexNew'); //indexNew
    Route::post('employee/save-edit-order', [EmployeeController::class, 'save'])->name('employee.saveEdit'); //save
});

// Route::middleware('employee')->group(function () {
//     Route::get('employee', [EmployeeController::class, 'show']); //index
//     Route::get('employee/new-order', [EmployeeController::class, 'showNew']); //indexNew
//     Route::post('employee/remove-order', [EmployeeController::class, 'remove']); //destroy
//     Route::post('employee/add-order', [EmployeeController::class, 'addOrder']); //store
//     Route::post('employee/place-order', [EmployeeController::class, 'place']); //create
//     Route::post('employee/confirm-order', [EmployeeController::class, 'confirm']); //update
//     Route::post('employee/edit-order', [EmployeeController::class, 'getEdit']); //edit
//     Route::get('employee/show-edit-order/{order:id}', [EmployeeController::class, 'showEdit']); //show
//     Route::post('employee/save-edit-order', [EmployeeController::class, 'save']); //save
// });

// Admin Dashboard Route
Route::middleware('admin')->group(function () {
    Route::resource('adminpage', AdminController::class);
    Route::get('admin', [AdminController::class, 'index']);
    Route::get('admin-menu/{food:id}', [AdminController::class, 'editorView']);
});

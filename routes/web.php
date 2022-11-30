<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

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

Route::get('landing', function () {
    return view('end-user.landing');
});

Route::get('/menu', [FoodController::class, 'menu']);
Route::get('/menu/{food:id}', [FoodController::class, 'item']);

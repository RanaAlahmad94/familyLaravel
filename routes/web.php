<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\areaController;
use App\Http\Controllers\familyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/families',familyController::class);
Route::resource('/areas',areaController::class);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customController;

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

Route::get('/home',[customController::class,'index']);
Route::get('/about',[customController::class,'about']);
Route::get('/contact',[customController::class,'contact']);
Route::get('/services',[customController::class,'services']);
Route::get('/gallery',[customController::class,'gallery']);
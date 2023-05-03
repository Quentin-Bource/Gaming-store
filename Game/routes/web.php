<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\allControllers@home');
Route::get('/Game/{id}', 'App\Http\Controllers\allControllers@Game');
Route::get('/Game', 'App\Http\Controllers\allControllers@allGame');

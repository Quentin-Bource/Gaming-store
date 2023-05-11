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

Route::get('/', 'App\Http\Controllers\allController@home' )->name('home');
Route::get('/Game/Create', 'App\Http\Controllers\allController@create' )->name('game.create');
Route::get('/Game/{id}', 'App\Http\Controllers\allController@game' )->name('game');
Route::get('/Game', 'App\Http\Controllers\allController@allGame' )->name('games');
Route::get('/Sub', 'App\Http\Controllers\allController@sub' )->name('sub');
Route::get('/Login', 'App\Http\Controllers\allController@login' )->name('login');
Route::get('/About', 'App\Http\Controllers\allController@about' )->name('about');


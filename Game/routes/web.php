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

Route::get('/', 'App\Http\Controllers\allController@home')->name('home');
Route::get('/Game/Create', 'App\Http\Controllers\allController@create')->name('game.create');
Route::post('/Game/Create', 'App\Http\Controllers\allController@post')->name('game.post');
Route::post('/Game/Create/Tag', 'App\Http\Controllers\allController@postTag')->name('game.postTag');
Route::delete('/Game/Create/Tag/{id}', 'App\Http\Controllers\allController@removeTag')->name('game.removeTag');
Route::post('/Game/Create/Console', 'App\Http\Controllers\allController@postConsole')->name('game.postConsole');
Route::delete('/Game/Create/Console/{id}', 'App\Http\Controllers\allController@removeConsole')->name('game.removeConsole');
Route::post('/Panier', 'App\Http\Controllers\allController@addPanier')->name('cart.add');
Route::delete('/Panier/{id}', 'App\Http\Controllers\allController@removePanier')->name('cart.remove');
Route::get('/Game/{id}', 'App\Http\Controllers\allController@game')->name('game');
Route::get('/Game/edit/{id}', 'App\Http\Controllers\allController@editGame')->name('edit');
Route::patch('/Game/edit/{id}', 'App\Http\Controllers\allController@update')->name('game.update');
Route::delete('/Game/delete/{id}', 'App\Http\Controllers\allController@removeGame')->name('game.remove');
Route::get('/Game', 'App\Http\Controllers\allController@allGame')->name('games');
Route::get('/About', 'App\Http\Controllers\allController@about')->name('about');
Route::get('/Panier', 'App\Http\Controllers\allController@panier')->name('panier');

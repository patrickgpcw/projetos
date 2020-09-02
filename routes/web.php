<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'master');
Route::get('/games', 'GameController@index')->name('games.index');
Route::post('/games', 'GameController@store')->name('games.store');
Route::delete('/games/{game}', 'GameController@destroy')->name('games.destroy');
Route::get('/games/{game}/edit', 'GameController@edit')->name('games.edit');
Route::put('/games/{game}', 'GameController@update')->name('games.update');


Route::get('/home', 'HomeController@index')->name('home');

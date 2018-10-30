<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games/index', 'GamelistController@index')->name('index');
Route::get('/games/show', 'GamelistController@show')->name('show');
Route::get('/games/create', 'GamelistController@create')->name('create');
Route::post('/games/store', 'GamelistController@store')->name('game.store');
Route::get('/games/{id}', 'GamelistController@show')->name('game');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
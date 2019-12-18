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

Route::get('/', 'StudiesController@index');
Route::resource('studies','StudiesController');
Route::resource('maths','MathsController');
Route::resource('englishes','EnglishesController');
Route::resource('kokugos','KokugosController');
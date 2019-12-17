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
Route::get('/maths/','MathsController@index');
Route::get('/englishes/','EnglishesController@index');
Route::get('/kokugos/','KokugosController@index');

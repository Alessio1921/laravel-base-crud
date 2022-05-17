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
Route::resource('comics', 'ComicsController');
Route::get('/',"HomeController@index")->name("home");
Route::get('/comics',"ComicsController@index")->name("comics");
Route::get('/comics/{id}',"ComicsController@show")->name("comics.show");


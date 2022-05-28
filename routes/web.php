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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',"App\Http\Controllers\BookController@index");
Route::get('/edit/{$id}',"App\Http\Controllers\BookController@edit");
Route::get('/show/{$id}',"App\Http\Controllers\BookController@show");
Route::get('/create',"App\Http\Controllers\BookController@create");
Route::get('/store',"App\Http\Controllers\BookController@store");
Route::get('/update/{$id}',"App\Http\Controllers\BookController@update");
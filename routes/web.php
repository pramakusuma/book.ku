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



Route::get('/login', function () {
    return view('login');
});


Route::get('/',"App\Http\Controllers\BookController@index");
Route::get('/booklist/edit/{$id}',"App\Http\Controllers\BookController@edit");
Route::get('/booklist',"App\Http\Controllers\BookController@showAll");
Route::get('/show/{$id}',"App\Http\Controllers\BookController@show");
Route::get('/create',"App\Http\Controllers\BookController@create");
Route::post('/store',"App\Http\Controllers\BookController@store");
Route::post('/update/{$id}',"App\Http\Controllers\BookController@update");
Route::post('/booklist/delete/{$id}',"App\Http\Controllers\BookController@destroy");
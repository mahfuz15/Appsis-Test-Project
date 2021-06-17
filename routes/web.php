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

Route::get('/', 'ItemController@index')->name('index');
Route::get('/create', 'ItemController@create')->name('create');
Route::get('/edit/{item}', 'ItemController@edit')->name('edit');
Route::post('/store', 'ItemController@store')->name('store');
Route::get('/show/{item}', 'ItemController@show')->name('show');
Route::put('/update/{item}', 'ItemController@update')->name('update');
Route::delete('/delete/{item}', 'ItemController@destroy')->name('delete');

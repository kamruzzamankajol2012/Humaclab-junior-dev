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
Route::get('/','RodController@index')->name('index');
Route::get('/create','RodController@create')->name('create');
Route::get('/create1','RodController@create1')->name('create1');

Route::post('/store','RodController@store')->name('store');
Route::post('/store1','RodController@store1')->name('store1');
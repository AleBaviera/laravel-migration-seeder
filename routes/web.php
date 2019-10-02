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

Route::get('/place', 'PlaceController@index')-> name('placeIndex');
Route::get('/create', 'PlaceController@create')-> name('placeCreate');
Route::post('/store', 'PlaceController@store')-> name('placeStore');

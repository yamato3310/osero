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


Route::get ('/', 'IndexController@index');

Route::get ('/room', 'RoomController@index');

Route::get ('/roomDetails', 'websocketController@index');

Route::get ('/room/create', 'RoomController@create');
Route::post ('/room/create', 'RoomController@createRoom');

Route::get('/waitingRoom', "websocketController@index");


<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/players', 'Player\PlayerController@getPlayers');
Route::get('/player/{id}', 'Player\PlayerController@getPlayer');
Route::get('/import', 'Player\PlayerController@importData');

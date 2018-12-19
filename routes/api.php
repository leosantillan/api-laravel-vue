<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
	return $request->user();
});

Route::get ('teams',					'TeamController@index');
Route::get ('teams/{id}',				'TeamController@show');
Route::post('teams',					'TeamController@store');
Route::put ('teams/{id}',				'TeamController@update');

Route::get ('players/{id}',				'PlayerController@show');

Route::post('teams/{id}/player',		'PlayerController@store');
Route::put ('teams/{id}/player/{pid}',	'PlayerController@update');

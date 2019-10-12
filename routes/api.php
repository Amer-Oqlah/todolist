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

Route::get('tasks','TaskController@getAll');
Route::get('tasks/{id}','TaskController@getOne');
Route::post('tasks','TaskController@addTask');
Route::put('tasks/{id}','TaskController@update');
Route::delete('tasks/{id}','TaskController@delete');







    

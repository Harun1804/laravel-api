<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get('/user','ApiUserController@index')->name('user.index');
Route::get('/user/{id}','ApiUserController@show')->name('user.show');
Route::post('/user','ApiUserController@store')->name('user.store');
Route::put('/user/edit','ApiUserController@update')->name('user.update');
Route::delete('/user/{id}', 'ApiUserController@destroy')->name('user.delete');

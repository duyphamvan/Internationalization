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
Route::get('index', 'ApiBlogController@index')->name('index');
Route::get('show/{id}', 'ApiBlogController@show')->name('show');
Route::post('store', 'ApiBlogController@store')->name('store');
//Route::put('update/{id}', 'ApiBlogController@update')->name('update');
//Route::delete('delete/{id}', 'ApiBlogController@destroy')->name('delete');


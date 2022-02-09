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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', 'App\Http\Controllers\BookController@index');

Route::post('/create', 'App\Http\Controllers\BookController@create');

Route::delete('/delete/{id}', 'App\Http\Controllers\BookController@destroy');

Route::put('/update/{id}', 'App\Http\Controllers\BookController@update');

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::get('/invoice-mrz/{mrz}','PassportController@getdatabymrz');
//TO DO middleware
//Route::post('/invoice-mrz/{mrz}','PassportController@checkCitizen');
//Route::post('/invoice-status/{status}','PassportController@chec');
Route::post('/passport/check', 'App\Http\Controllers\PassportController@checkPassport');
Route::get('/passport/image/{name}','App\Http\Controllers\PassportController@getPassport');

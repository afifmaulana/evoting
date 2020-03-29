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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::group(['prefix' => 'siswa'], function (){
   Route::post('login', 'v1\siswa\Auth\LoginController@login');
   Route::get('calon', 'v1\siswa\CalonController@index')->middleware('auth:api-siswa');

});


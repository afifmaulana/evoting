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
   Route::get('profile', 'v1\siswa\SiswaController@profile');
   Route::post('update/password', 'v1\siswa\UpdatePasswordController@updatePassword');
});

Route::get('pemilihan', 'v1\siswa\VotingController@pemilihan');
Route::post('voting', 'v1\siswa\VotingController@voting');
Route::get('calon', 'v1\siswa\CalonController@index');
Route::get('hasil', 'v1\siswa\HasilController@hasil');


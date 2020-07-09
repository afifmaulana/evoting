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

Route::get('/', function () {
    return view('templates.adminhome');
});


//Auth SuperAdmin
Route::get('/superadmin-login', 'superadmin\Auth\LoginController@showLoginForm')->name('superadmin.login');
Route::post('/superadmin-login', 'superadmin\Auth\LoginController@login')->name('superadmin.login.submit');
Route::get('/superadmin-register', 'superadmin\Auth\RegisterController@showRegisterForm')->name('superadmin.register');
Route::post('/superadmin-register', 'superadmin\Auth\RegisterController@store')->name('superadmin.register.submit');
Route::get('/superadmin-logout', 'superadmin\Auth\LoginController@logout')->name('superadmin.logout');



//Auth AdminSekolah
Route::get('/adminsekolah-login', 'adminsekolah\Auth\LoginController@showLoginForm')->name('adminsekolah.login');
Route::post('/adminsekolah-login', 'adminsekolah\Auth\LoginController@login')->name('adminsekolah.login.submit');
Route::get('/adminsekolah-register', 'adminsekolah\Auth\RegisterController@showRegisterForm')->name('adminsekolah.register');
Route::post('/adminsekolah-register', 'adminsekolah\Auth\RegisterController@store')->name('adminsekolah.register.submit');
Route::get('/adminsekolah-logout', 'adminsekolah\Auth\LoginController@logout')->name('adminsekolah.logout');
Route::get('/activate', 'adminsekolah\Auth\ActivationController@activate')->name('adminsekolah.activate');



Route::group(['prefix' => 'superadmin'], function (){
    Route::resource('dashboard1', 'superadmin\DashboardController');
    Route::resource('users', 'superadmin\UsersController')->only('index');
    Route::resource('users_verified', 'superadmin\UsersVerifiedController')->only('index');
    Route::get('users/{id}/update', 'superadmin\UsersController@update')->name('users.update');
    Route::get('users/{id}/destroy', 'superadmin\UsersController@destroy')->name('users.destroy');
    Route::resource('profiladmin', 'superadmin\ProfilController');
    Route::resource('sekolah', 'superadmin\SekolahController')->except(['show', 'destroy']);
    Route::get('sekolah/{id}', 'superadmin\SekolahController@destroy')->name('sekolah.destroy');
});

/*Route::post('import/create', 'adminsekolah\DataSiswaController@import')->name('import.store');*/

Route::group(['prefix' => 'adminsekolah'], function (){
    Route::resource('dashboard2', 'adminsekolah\DashboardController');
    Route::resource('datacalon', 'adminsekolah\DataCalonController')->except(['destroy']);
    Route::get('datacalon/{id}/destroy', 'adminsekolah\DataCalonController@destroy')->name('datacalon.destroy');
    Route::resource('datasiswa', 'adminsekolah\DataSiswaController');

    Route::resource('pemilihan', 'adminsekolah\PemilihanController')->except(['destroy']);
    Route::get('pemilihan/{id}/destroy', 'adminsekolah\PemilihanController@destroy')->name('pemilihan.destroy');
    Route::resource('profilsekolah', 'adminsekolah\ProfilController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

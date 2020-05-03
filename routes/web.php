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

//Route::get('/adminhome', function (){
//    return view('templates.adminhome');
//});
//
//Route::get('/adminsekolah', function (){
//   return view('templates.adminsekolah');
//});


//Auth SuperAdmin
Route::get('/superadmin-login', 'superusers\Auth\LoginController@showLoginForm')->name('superadmin.login');
Route::post('/superadmin-login', 'superusers\Auth\LoginController@login')->name('superadmin.login.submit');
Route::get('/superadmin-register', 'superusers\Auth\RegisterController@showRegisterForm')->name('superadmin.register');
Route::post('/superadmin-register', 'superusers\Auth\RegisterController@store')->name('superadmin.register.submit');
Route::get('/superadmin-logout', 'superusers\Auth\LoginController@logout')->name('superadmin.logout');



//Auth AdminSekolah
Route::get('/adminsekolah-login', 'adminsekolah\Auth\LoginController@showLoginForm')->name('adminsekolah.login');
Route::post('/adminsekolah-login', 'adminsekolah\Auth\LoginController@login')->name('adminsekolah.login.submit');
Route::get('/adminsekolah-register', 'adminsekolah\Auth\RegisterController@showRegisterForm')->name('adminsekolah.register');
Route::post('/adminsekolah-register', 'adminsekolah\Auth\RegisterController@store')->name('adminsekolah.register.submit');
Route::get('/adminsekolah-logout', 'adminsekolah\Auth\LoginController@logout')->name('adminsekolah.logout');
Route::get('/activate', 'adminsekolah\Auth\ActivationController@activate')->name('adminsekolah.activate');



Route::group(['prefix' => 'superusers'], function (){
    Route::resource('dashboard1', 'superusers\DashboardController');
    Route::resource('users', 'superusers\UsersController');
    Route::resource('profiladmin', 'superusers\ProfilController');
    Route::resource('sekolah', 'superusers\SekolahController')->except(['show', 'destroy']);
    Route::get('sekolah/{id}', 'superusers\SekolahController@destroy')->name('sekolah.destroy');
});

/*Route::post('import/create', 'adminsekolah\DataSiswaController@import')->name('import.store');*/

Route::group(['prefix' => 'adminsekolah'], function (){
    Route::resource('dashboard2', 'adminsekolah\DashboardController');
    Route::resource('datacalon', 'adminsekolah\DataCalonController')->except(['destroy']);
    Route::get('datacalon/{id}/destroy', 'adminsekolah\DataCalonController@destroy')->name('datacalon.destroy');
    Route::resource('datasiswa', 'adminsekolah\DataSiswaController');

    Route::resource('pemilihan', 'adminsekolah\PemilihanController');
    Route::resource('profilsekolah', 'adminsekolah\ProfilController');

});




/*Route::get('/users', 'SuperAdminController@users')->name('users');
Route::get('/profil', 'SuperAdminController@profil')->name('profil');*/

//Route::get('/sekolah', 'SuperAdminController@sekolah')->name('sekolah');
//Route::get('/sekolah/create', 'SuperAdminController@smpcreate')->name('sekolah.create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

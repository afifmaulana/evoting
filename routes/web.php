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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('templates.adminhome');
});
Route::get('/about', function () {
    return view('templates.about');
});
Route::get('/help', function () {
    return view('templates.help');
});

// Route::get('/test', function () {
//     event(new \App\Events\AdminNotification("okeh"));
//     return "success";
// });

Route::get('superadmin/notification', 'superadmin\DashboardController@notification');


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
    Route::get('users_verified/{id}/destroy', 'superadmin\UsersVerifiedController@destroy')->name('users_verified.destroy');
    Route::resource('profiladmin', 'superadmin\ProfilController');
    Route::resource('sekolah', 'superadmin\SekolahController')->except(['show', 'destroy']);
    Route::get('sekolah/{id}', 'superadmin\SekolahController@destroy')->name('sekolah.destroy');
});


Route::group(['prefix' => 'adminsekolah'], function (){
    Route::resource('dashboard2', 'adminsekolah\DashboardController');
    Route::resource('datacalon', 'adminsekolah\DataCalonController')->except(['destroy']);
    Route::get('datacalon/{id}/destroy', 'adminsekolah\DataCalonController@destroy')->name('datacalon.destroy');
    Route::resource('datasiswa', 'adminsekolah\DataSiswaController');
    Route::get('datasiswa/{id}/destroy', 'adminsekolah\DataSiswaController@destroy')->name('datasiswa.destroy');
    Route::get('tambahsiswa', 'adminsekolah\DataSiswaController@formtambah')->name('form.siswa');
    Route::post('tambahsiswa/tambah', 'adminsekolah\DataSiswaController@tambahsiswa')->name('tambah.siswa');
    Route::resource('pemilihan', 'adminsekolah\PemilihanController')->except(['destroy']);
    Route::get('pemilihan/{id}/destroy', 'adminsekolah\PemilihanController@destroy')->name('pemilihan.destroy');
    Route::resource('profilsekolah', 'adminsekolah\ProfilController');
    Route::get('history', 'adminsekolah\HistoryController@index')->name('history.index');
    Route::get('exportexcel', 'adminsekolah\HistoryController@exportexcel')->name('exportexcel.history');
    Route::get('exportpdf', 'adminsekolah\HistoryController@exportpdf')->name('exportpdf.history');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::get('/register', [LoginController::class, 'registerIndex'])->name('register')->middleware('guest');
Route::post('/register', [LoginController::class, 'register']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/', '\App\Http\Controllers\DashboardController@get', function () {
    return view('welcome');
})->middleware('auth');

//Muzaki
Route::get('/muzaki', '\App\Http\Controllers\MuzakiController@get')->middleware('auth');
Route::get('/muzaki/create', '\App\Http\Controllers\MuzakiController@create')->middleware('auth');
Route::post('/muzaki/store', '\App\Http\Controllers\MuzakiController@store')->middleware('auth');
Route::get('/muzaki/delete/{id}', '\App\Http\Controllers\MuzakiController@delete')->middleware('auth');
Route::get('/muzaki/update/{id}', '\App\Http\Controllers\MuzakiController@update')->middleware('auth');
Route::post('/muzaki/update', '\App\Http\Controllers\MuzakiController@updateMuzaki')->middleware('auth');

//Ref Jenis Donasi
Route::get('/jenis-donasi', '\App\Http\Controllers\JenisDonasiController@get')->middleware('auth');
Route::get('/jenis-donasi/create', '\App\Http\Controllers\JenisDonasiController@create')->middleware('auth');
Route::post('/jenis-donasi/store', '\App\Http\Controllers\JenisDonasiController@store')->middleware('auth');
Route::get('/jenis-donasi/delete/{id}', '\App\Http\Controllers\JenisDonasiController@delete')->middleware('auth');
Route::get('/jenis-donasi/update/{id}', '\App\Http\Controllers\JenisDonasiController@update')->middleware('auth');
Route::post('/jenis-donasi/update', '\App\Http\Controllers\JenisDonasiController@updateJenisDonasi')->middleware('auth');

//Ref Asnaf
Route::get('/asnaf', '\App\Http\Controllers\AsnafController@get')->middleware('auth');
Route::get('/asnaf/create', '\App\Http\Controllers\AsnafController@create')->middleware('auth');
Route::post('/asnaf/store', '\App\Http\Controllers\AsnafController@store')->middleware('auth');
Route::get('/asnaf/delete/{id}', '\App\Http\Controllers\AsnafController@delete')->middleware('auth');
Route::get('/asnaf/update/{id}', '\App\Http\Controllers\AsnafController@update')->middleware('auth');
Route::post('/asnaf/update', '\App\Http\Controllers\AsnafController@updateAsnaf')->middleware('auth');

//Donasi Masuk
Route::get('/donasi-masuk', '\App\Http\Controllers\DonasiMasukController@get')->middleware('auth');
Route::get('/donasi-masuk/create', '\App\Http\Controllers\DonasiMasukController@create')->middleware('auth');
Route::post('/donasi-masuk/store', '\App\Http\Controllers\DonasiMasukController@store')->middleware('auth');
Route::get('/donasi-masuk/delete/{id}', '\App\Http\Controllers\DonasiMasukController@delete')->middleware('auth');
Route::get('/donasi-masuk/update/{id}', '\App\Http\Controllers\DonasiMasukController@update')->middleware('auth');
Route::post('/donasi-masuk/update', '\App\Http\Controllers\DonasiMasukController@updateDonasiMasuk')->middleware('auth');

//Donasi Keluar
Route::get('/donasi-keluar', '\App\Http\Controllers\DonasiKeluarController@get')->middleware('auth');
Route::get('/donasi-keluar/create', '\App\Http\Controllers\DonasiKeluarController@create')->middleware('auth');
Route::post('/donasi-keluar/store', '\App\Http\Controllers\DonasiKeluarController@store')->middleware('auth');
Route::get('/donasi-keluar/delete/{id}', '\App\Http\Controllers\DonasiKeluarController@delete')->middleware('auth');
Route::get('/donasi-keluar/update/{id}', '\App\Http\Controllers\DonasiKeluarController@update')->middleware('auth');
Route::post('/donasi-keluar/update', '\App\Http\Controllers\DonasiKeluarController@updateDonasiKeluar')->middleware('auth');

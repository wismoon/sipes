<?php

use App\Http\Controllers\Auth\LoginController;
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

Route::get('/', function () {
    return view('sipes.index');
})->name('homeland');

Route::get('/admin', 'HomeController@adminHome')->name('admin');

//Route Table
Route::resource('/table', 'TableSuratController');
Route::get('/arsip', 'TableSuratController@showArsip');
Route::get('/export_excel', 'TableSuratController@export_excel')->name('excel');

Route::get('/cetak/{surat?}' , 'CetakController@index')->name('cetak');

//Route::resource('surat', 'SuratController');
Route::prefix('surat')->name('surat.')->group(function(){
    Route::get('daftarsurat', 'SuratController@index')->name('index');
    Route::get('pemohon', 'SuratController@createPemohon')->name('createSKU');
    Route::get('pemohonU', 'SuratController@createPemohonU')->name('createSKUH');
    Route::post('store', 'SuratController@storePemohon')->name('store');
    Route::post('storeU', 'SuratController@storePemohonU')->name('storeU');
});

// Route::resource('pemohon', );

//Route Surat
Route::resource('/SuratKeterangan', 'SuratKeteranganController');
Route::resource('/SuratKeteranganUsaha', 'SuratKeteranganUsahaController');

//Route Login
Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@login')->name('users');
Route::get('/logout', 'LoginController@logout')->name('logout');

//Route Register
// Route::get('/register', 'RegisterController@create')->name('regis');
// Route::post('register', 'RegisterController@store');



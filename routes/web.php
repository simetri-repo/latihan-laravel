<?php

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
    return view('welcome');
});

Route::get('halo', function () {
    return "Hallo, Selamat(?)";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('unit', '\App\Http\Controllers\UnitController@index');

Route::get('/pegawai/{nama}', '\App\Http\Controllers\PegawaiController@index');

Route::get('/formulir', "\App\Http\Controllers\PegawaiController@formulir");
Route::post('/formulir/proses', '\App\Http\Controllers\PegawaiController@proses');

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
    return view('auth.login');
});

Route::get('/test', function () {
    return view('halaman.halaman');
});
Route::get('/daftar', function () {
    return view('halaman.daftar_pasien');
});
Route::get('/list', function () {
    return view('halaman.list');
});

Route::post('/prosesp', function () {
    return view('halaman.proses-pendaftaran');
});

Route::get('/edit', function () {
    return view('halaman.edit');
});

Route::get('/edithalaman', function () {
    return view('halaman.edit_halaman');
});
Route::get('/hapus', function () {
    return view('halaman.hapus');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('home');
});

Route::get('/daftar', [App\Http\Controllers\HomeController::class, 'daftar'])->name('daftar');

Route::get('/list', [App\Http\Controllers\HomeController::class, 'list'])->name('list');

Route::get('/prosesp', [App\Http\Controllers\HomeController::class, 'prosesp'])->name('prosesp');

Route::get('/page', [App\Http\Controllers\HomeController::class, 'page'])->name('page');

Route::get('/edithalaman', [App\Http\Controllers\HomeController::class, 'edithalaman'])->name('edithalaman');

Route::get('/hapus', [App\Http\Controllers\HomeController::class, 'hapus'])->name('hapus');

Route::get('/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');



// Route::get('/daftar', function () {
//     return view('halaman.daftar_pasien');
// });

Route::get('/list', function () {
    return view('halaman.list');
});

Route::post('/prosesp', function () {
    return view('halaman.proses-pendaftaran');
});

Route::get('/page', function () {
    return view('halaman.halaman');
});

Route::get('/edithalaman', function () {
    return view('halaman.edit_halaman');
});

Route::get('/hapus', function () {
    return view('halaman.hapus');
});

// Route::get('/edit', function () {
//     return view('halaman.edit');
// });

Route::post('/editpros', function () {
    return view('halaman.proses-edit');
});

<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanSuratController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LaporanViewController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/laporan-surat/pdf', [LaporanSuratController::class, 'cetakSemua'])
    ->name('laporan-surat.pdf');
Route::resource('kategoris', KategoriController::class);
Route::resource('suratkeluars', SuratKeluarController::class);
Route::resource('suratmasuks', SuratMasukController::class);
Route::resource('laporanviews', LaporanViewController::class);

// Download Surat masuk
Route::get('/suratmasuk/download/{file}', function ($file) {

    $path = storage_path('app/public/' . $file);

    abort_if(!file_exists($path), 404);

    return response()->download($path);

})->where('file', '.*')
  ->name('suratmasuk.download');

// Download Surat Keluar
Route::get('/suratkeluar/download/{file}', function ($file) {

    $path = storage_path('app/public/' . $file);

    abort_if(!file_exists($path), 404);

    return response()->download($path);

})->where('file', '.*')
  ->name('suratkeluar.download');

<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanSuratController;
use App\Http\Controllers\SuratKeluarController;

Route::get('/', function () {
    return view('home.index');
});
Route::get('/laporan-surat/pdf', [LaporanSuratController::class, 'cetakSemua'])
    ->name('laporan-surat.pdf');
Route::resource('kategoris', KategoriController::class);
Route::resource('suratkeluars', SuratKeluarController::class);

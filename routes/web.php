<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanSuratController;


Route::get('/', function () {
    return view('home.index');
});
Route::get('/laporan-surat/pdf', [LaporanSuratController::class, 'cetakSemua'])
    ->name('laporan-surat.pdf');
Route::resource('kategoris', KategoriController::class);

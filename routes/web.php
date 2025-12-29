<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanSuratController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/laporan-surat/pdf', [LaporanSuratController::class, 'cetakSemua'])
    ->name('laporan-surat.pdf');
Route::resource('kategoris', KategoriController::class);
Route::resource('suratkeluars', SuratKeluarController::class);
Route::resource('suratmasuks', SuratMasukController::class);



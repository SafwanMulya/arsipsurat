<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use App\Models\SuratKeluar;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanSuratController extends Controller
{
    public function cetakSemua()
    {
        $suratMasuk = SuratMasuk::all(); 
        $suratKeluar = SuratKeluar::all();

        $pdf = Pdf::loadView('laporan.semua-surat', compact('suratMasuk', 'suratKeluar'))
            ->setPaper('a4', 'portrait');

        return $pdf->stream('laporan-semua-surat.pdf'); 
    }
}

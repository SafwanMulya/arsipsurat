<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeluar;
use App\Models\Kategori;

class SuratKeluarController extends Controller
{
    public function index()
    {
        $query = SuratKeluar::query();

        // FILTER TANGGAL
        if (request('tanggal_surat')) {
            $query->whereDate('tanggal_surat', request('tanggal_surat'));
        }

        // FILTER KATEGORI
        if (request('kategori_id')) {
            $query->where('kategori_id', request('kategori_id'));
        }

        $suratkeluars = $query->latest()->paginate(5)->withQueryString();
        $kategoris   = Kategori::latest()->get();

        return view('suratkeluar.index', compact('suratkeluars', 'kategoris'));
    }


}

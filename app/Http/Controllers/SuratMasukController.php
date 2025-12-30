<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use App\Models\Kategori;

class SuratMasukController extends Controller
{
    public function index()
    {
        $query = SuratMasuk::query();

        // FILTER TANGGAL
        if (request('tanggal_surat')) {
            $query->whereDate('tanggal_surat', request('tanggal_surat'));
        }

        // FILTER KATEGORI
        if (request('kategori_id')) {
            $query->where('kategori_id', request('kategori_id'));
        }

        $suratmasuks = $query->latest()->paginate(5)->withQueryString();
        $kategoris   = Kategori::latest()->get(); // tidak perlu paginate untuk dropdown

        return view('suratmasuk.index', compact('suratmasuks', 'kategoris'));
    }


    public function view($id)
    {
        $suratmasuks = SuratMasuk::findOrFail($id);
        $filePath = storage_path('app/public/surat-masuk/' . $suratmasuks->file_surat);

        if (!file_exists($filePath)) {
            abort(404, 'File tidak ditemukan');
        }

        return response()->file($filePath); // <-- LIHAT
    }

    public function download($id)
    {
        $suratmasuks = SuratMasuk::findOrFail($id);
        $filePath = storage_path('app/public/surat-masuk/' . $suratmasuks->file);

        if (!file_exists($filePath)) {
            abort(404, 'File tidak ditemukan');
        }

        return response()->download($filePath); // <-- DOWNLOAD
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeluar;
use App\Models\SuratMasuk;


class LaporanViewController extends Controller
{
    public function index(){
        $suratmasuks = Suratmasuk::latest()->paginate(5);
        $suratkeluars = Suratkeluar::latest()->paginate(5);
        return view('laporanview.index', compact('suratmasuks','suratkeluars'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use App\Models\SuratKeluar;

class HomeController extends Controller
{
    public function index()
    {
        $suratmasuks = SuratMasuk::latest()->paginate(5);
        $suratkeluars = SuratKeluar::latest()->paginate(5);
        return view('Home.index', compact('suratmasuks', 'suratkeluars'));
    }
}

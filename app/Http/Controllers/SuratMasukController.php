<?php

namespace App\Http\Controllers;
use App\Models\SuratMasuk;
use App\Models\Kategori;

class SuratMasukController extends Controller
{
    public function index(){
        $suratmasuks = Suratmasuk::latest()->paginate(5);
        $kategoris = Kategori::latest()->paginate(5);
        return view('suratmasuk.index', compact('suratmasuks','kategoris'));

    }

}

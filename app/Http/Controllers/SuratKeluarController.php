<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratKeluar;
class SuratKeluarController extends Controller
{
    public function index(){
     $suratkeluars = SuratKeluar::latest()->paginate(5);
    return view('suratkeluar.index', compact('suratkeluars'));
   }
}

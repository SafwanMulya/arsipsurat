<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
class KategoriController extends Controller
{
   public function index(){
     $kategoris = Kategori::latest()->paginate(5);
    return view('kategori.index', compact('kategoris'));
   }
}

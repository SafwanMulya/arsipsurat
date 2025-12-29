<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class HomeController extends Controller
{
    public function index(){
    $kategoris = Kategori::latest()->paginate(5);
    return view('home.index', compact('kategoris'));
   }
}

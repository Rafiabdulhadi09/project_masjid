<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index ()
    {
        return view('admin.berita');
    }

    public function tambah ()
    {
        return view('admin.createBerita');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use App\Models\VisiMisi;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        $visi = VisiMisi::first();
        $pengurus = Pengurus::all();
        return view('user.tentang', compact('visi','pengurus'));
    }
}

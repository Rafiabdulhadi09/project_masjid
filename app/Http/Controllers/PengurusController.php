<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    public function index()
    {
        $pengurus = Pengurus::all();
        return view('admin.crud_pengurus', compact('pengurus'));
    }
    public function edit()
    {
        $pengurus = Pengurus::all();
        return view('admin.edit_pengurus', compact('pengurus'));
    }
        public function create(Request $request)
    {
       
        $request->validate([
            'nama' => 'required', 
            'jabatan' => 'required', 
            'poto' => 'required|image|mimes:jpg,png,jpeg', 
        ],[
            'nama.required' => 'Nama Harus Diisi',
            'jabatan.required' => 'Jabatan Harus Diisi',
            'poto.image' => 'File harus berupa gambar.',
            'poto.mimes' => 'Format gambar harus JPG, PNG, atau JPEG.',
        ]
    );
        $profile = new Pengurus();
        $profile->nama = $request->nama;
        $profile->jabatan = $request->jabatan;

         if ($request->hasFile('poto')) {
            $file = $request->file('poto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/profile', $filename); 
            $profile->poto = $filename;
        }
        $profile->save();
        if ($profile) {
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
}

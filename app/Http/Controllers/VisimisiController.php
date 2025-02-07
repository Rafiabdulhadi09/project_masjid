<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    public function index()
    {
        $visimisi = VisiMisi::first();
        return view('admin.crud_Visimisi', compact('visimisi'));
    }
    public function create(Request $request)
    {
       
        $validated = $request->validate([
            'visi' => 'required', 
            'misi' => 'required', 
        ]);
        $visimisi = VisiMisi::create([
            'visi' => $validated['visi'],
            'misi' => $validated['misi'],
        ]);
        if ($visimisi) {
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $visimisi = VisiMisi::findOrFail($id);

        $visimisi->update([
            'visi' => $request->visi,
            'misi' => $request->misi,
        ]);

        return redirect()->back()->with('success', 'Data Visi & Misi Berhasil Diperbarui!');
    }
}

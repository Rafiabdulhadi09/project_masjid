<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengurusController extends Controller
{
    public function index()
    {
        $pengurus = Pengurus::all();
        return view('admin.crud_pengurus', compact('pengurus'));
    }
    public function edit($id)
    {
        $pengurus = Pengurus::findOrFail($id);
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

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'poto' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $data = Pengurus::findOrFail($id);
        $data->jabatan = $request->jabatan;
        $data->nama = $request->nama;

        if ($request->hasFile('poto')) {
            if ($data->poto) {
                Storage::delete('public/profile/' . $data->poto);
            }

            $image = $request->file('poto');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/profile', $imageName);
            $data->poto = $imageName;
        }

        $data->save();

        return redirect()->route('crud.pengurus')->with('success', 'Data berhasil diperbarui!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pemasukan;
use Illuminate\Http\Request;

class PemasukanController extends Controller
{
    public function index ()
    {
        $pemasukan = Pemasukan::all();
        return view('admin.pemasukan', compact('pemasukan'));
    }

    public function create(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'pemasukan' => 'required', 
            'jumlah' => 'required', 
            'nama_donatur' => 'required', 
            'jenis_pembayaran' => 'required', 
            'bukti_pembayaran' => 'required|image|mimes:jpg,png,jpeg', 
        ],[
            'pemasukan.required' => 'Nama Harus Diisi',
            'jumlah.required' => 'Jumlah Harus Diisi',
            'nama_donatur.required' => 'Nama Harus Diisi',
            'jenis_pembayaran.required' => 'Jenis_Pembayaran Harus Diisi',
            'bukti_pembayaran.image' => 'File harus berupa gambar.',
            'bukti_pembayaran.mimes' => 'Format gambar harus JPG, PNG, atau JPEG.',
        ]
    );
        $pemasukan = new Pemasukan();
        $pemasukan->keterangan = $request->pemasukan;
        $pemasukan->jumlah = $request->jumlah;
        $pemasukan->donatur  = $request->nama_donatur;
        $pemasukan->jns_pembayaran = $request->jenis_pembayaran;

         if ($request->hasFile('bukti_pembayaran')) {
            $file = $request->file('bukti_pembayaran');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/pemasukan', $filename); 
            $pemasukan->bukti_pembayaran = $filename;
        }
        $pemasukan->save();
        if ($pemasukan) {
            return redirect()->back()->with('success', 'Berita berhasil ditambahkan!');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan, berita gagal disimpan.');
        }
    }
}

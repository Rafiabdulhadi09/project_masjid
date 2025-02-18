<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function index()
    {
        $pengeluaran = Pengeluaran::all();
        return view('admin.pengeluaran', compact('pengeluaran'));
    }

    public function create(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'keterangan' => 'required', 
            'jumlah' => 'required', 
            'jenis_pembayaran' => 'required', 
            'bukti_pembayaran' => 'required|image|mimes:jpg,png,jpeg', 
        ],[
            'pemasukan.required' => 'Nama Harus Diisi',
            'jumlah.required' => 'Jumlah Harus Diisi',
            'jenis_pembayaran.required' => 'Jenis_Pembayaran Harus Diisi',
            'bukti_pembayaran.image' => 'File harus berupa gambar.',
            'bukti_pembayaran.mimes' => 'Format gambar harus JPG, PNG, atau JPEG.',
        ]
    );
        $pengeluaran = new Pengeluaran();
        $pengeluaran->keterangan = $request->keterangan;
        $pengeluaran->jumlah = $request->jumlah;
        $pengeluaran->jns_pembayaran = $request->jenis_pembayaran;

         if ($request->hasFile('bukti_pembayaran')) {
            $file = $request->file('bukti_pembayaran');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/pengeluaran', $filename); 
            $pengeluaran->bukti_pembayaran = $filename;
        }
        $pengeluaran->save();
        if ($pengeluaran) {
            return redirect()->back()->with('success', 'Berita berhasil ditambahkan!');
        } else {
            return redirect()->back()->with('error', 'Terjadi kesalahan, berita gagal disimpan.');
        }
    }
}

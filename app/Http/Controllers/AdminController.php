<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $latitude = -7.134713057464746;  
        $longitude = 108.26889792725136; 

        $client = new Client();
        
        $response = $client->get("http://api.aladhan.com/v1/timings?latitude=$latitude&longitude=$longitude&method=2");
        
        $data = json_decode($response->getBody()->getContents(), true);
        
        $jadwalAzan = $data['data']['timings'];

        $totalPemasukan = Pemasukan::sum('jumlah');
        $totalPengeluaran = Pengeluaran::sum('jumlah');
        $sisa = $totalPemasukan - $totalPengeluaran;
        $jamSekarang = Carbon::now();
        $Pemasukan = Pemasukan::take(3)->get();
        $Pengeluaran = Pengeluaran::take(3)->get();
        return view('admin.index', compact('Pengeluaran','Pemasukan','totalPemasukan','totalPengeluaran','sisa','jadwalAzan','jamSekarang'));
    }
}

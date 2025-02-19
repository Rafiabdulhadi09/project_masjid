<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $latitude = -7.134713057464746;  
        $longitude = 108.26889792725136; 

        $client = new Client();
        
        $response = $client->get("http://api.aladhan.com/v1/timings?latitude=$latitude&longitude=$longitude&method=2");
        
        $data = json_decode($response->getBody()->getContents(), true);
        
        $jadwalAzan = $data['data']['timings'];
        return view('user.index', compact('jadwalAzan'));
    }
}

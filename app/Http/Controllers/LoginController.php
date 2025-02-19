<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required'
        ],[
            'username.required'=>'Username wajib diisi',
            'password.required'=>'Password wajib diisi'
        ]);

        $infologin = [
            'username'=> $request->username,
            'password'=>$request->password
        ];
        if (Auth::attempt($infologin)) {
            return redirect()->route('admin');
        } else{
            return redirect()->back()->withErrors('Username Dan Password yang di masukan salah');
        }
    }
      public function logout()
    {
        Auth::logout();

        return redirect('/')->with('success', 'Anda berhasil logout.');
    }
}

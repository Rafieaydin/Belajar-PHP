<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('Register');
    }
    public function home(Request $request)
    {
        $nama_awal = $request->input('nama_awal');
        $nama_akhir = $request->input('nama_akhir');
        return view('welcome',['nama_awal' => $nama_awal, 'nama_akhir' => $nama_akhir]);
    }
}

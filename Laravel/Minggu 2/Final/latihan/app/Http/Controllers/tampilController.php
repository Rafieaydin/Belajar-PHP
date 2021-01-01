<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Pertanyaan;
use App\Models\Jawaban;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class tampilController extends Controller
{
    public function index(){
        $pertanyaan = Pertanyaan::all();
        $user = User::where('id','!=', Auth::user()->id)->get();
        return view('user.index', compact('pertanyaan','user'));
    }
}

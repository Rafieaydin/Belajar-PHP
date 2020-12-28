<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Siswa;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function home(){
        return view('welcome');
    }
    // login view
    public function login(){
    return view('auth.login');
    }
    // login
    public function postlogin(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|max:8'
        ]);
        // rememberme
        $ingat = $request->rememberme ? true : false;
        $re = $request->only('email','password');
        if (Auth::attempt($re,$ingat)) {
            return redirect('/Pertanyaan');
        }else{
            return redirect('/login')->with('status', 'password anda salah');
        }
    }
    //register view
    public function register(){
        return view('auth.register');
    }
    //register
    public function postregister(Request $request){
    $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|max:8'
    ]);
    if ($request->agreeterm == true) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|max:8'
            ]);
            if ($request->password == $request->password2) {
                User::create([
                    'name' => $request->name,
                    'role' => 'user',
                    'password' => Hash::make($request->password),
                    'email' => $request->email
                ]);
                return redirect('/login');
            } else {
                return redirect('/register')->with('status', 'Password yang anda masukan tidak sama');
            }
    }else {
            return redirect('/register')->with('status1', 'Anda harus mecentang persyaratan terlebih dahulu');
    }
    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Profile;
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
            if (Auth()->user()->role == 'admin') {
                return redirect('/profile');
            }else if (Auth()->user()->role == 'users') {
                return redirect('/');
            }
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
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'password' => 'required|max:8'
    ]);
    if ($request->agreeterm == true) {
            $request->validate([
                'nama_lengkap' => 'required',
                'email' => 'required|email',
                'password' => 'required|max:8'
            ]);
            if ($request->password == $request->password2) {

                $user = new User;
                $user->role = 'users';
                $user->name = $request->nama_lengkap; // mengambil dari requst name="nama
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->remember_token = Str::random(60);
                $user->save();


            $request->request->add(['user_id' => $user->id]);
            Profile::create($request->all());
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
        return redirect('/login');
    }
}

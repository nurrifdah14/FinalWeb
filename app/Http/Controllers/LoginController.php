<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function index(){
        return view('pages.login');
    }

    public function store(Request $request)
    {
        $validasi=$request->validate([
            'email'=>'required',
            'password'=>'required'
        ],
        [
            'email.required'=>'Field harus diiisi',
            'password.required'=>'Field harus diisi'
        ]
    );

    if(Auth::attempt($validasi))
    {
        $request->session()->regenerate();
        return redirect()->intended('dashboard');
    }
    return back()->with('gagal_login','Password/Email yang Anda masukkan salah!');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}



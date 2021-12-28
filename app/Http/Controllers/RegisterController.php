<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.register');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:225',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6',
            ],
            [
                'name.required'=>'Field harus diisi!',
                'email.required'=>'Field harus diisi!',
                'email.email'=>'Email idak Valid',
                'email.unique'=>'Email Sudah Terdaftar',
                'password.required'=>'Field harus diisi',
                'password.min'=>'password minimal 6 karakter',
            ]
            );
        $password=Hash::make($request->password);

        User::create(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=> $password
            ]
        );
        return redirect('/login')->with('register', 'Akun berhasil dibuat, silahkan login');
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showLogin()
    {
        return view('Auth.login');
    }

    public function loginProcess(Request $request)
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            if ($user->role == 'Admin') return redirect('Admin/Dashboard')->with('success', 'Login Berhasil');
            if ($user->role == 'Pembeli') return redirect('/')->with('success', 'Login Berhasil');
        } else {
            return back()->with('success', 'Login Gagal, Silahlan cek email dan password anda');
        }
    }


    public function register(Request $request)
    {
        return view('Auth.Register');
    }

    /**
     * Display the specified resource.
     */
    public function registerProcess(Request $request)
    {
        Session::flash('nama', $request->nama);
        Session::flash('username', $request->username);
        Session::flash('email', $request->email);

        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:user',
            'email' => 'required|email|unique:user',
            'password' => 'required|min:8',
        ], [
            'nama.required' => 'Nama Wajib Diisi',
            'username.required' => 'Username Wajib Diisi',
            'username.unique' => 'Username Sudah Digunakan',
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Masukkan Email Yang Valid',
            'email.unique' => 'Email Sudah Pernah Digunakan',
            'password.required' => 'Password Wajib Diisi',
            'password.min' => 'Minimum Password 8 Karakter',
        ]);



        $role = 'Pembeli';

        $data = [
            'role' => $role,
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        if (Auth::attempt(['nama' => request('nama'), 'username' => request('username'), 'email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            return redirect('/')->with('success', 'Berhasil Mendaftar');
        } else {
            return back()->withErrors('danger', 'Silahlan cek lagi! data yang dimasukan tidak valid');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

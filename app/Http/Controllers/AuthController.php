<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function lihatRegister()
    {
        return view('auth.register');
    }

    function submitRegister(Request $request)
    {
        $user = new User();
        $user->nama = $request->nama;
        $user->kata_sandi = bcrypt($request->kata_sandi);
        $user->role = $request->role;
        $user->save();
        return redirect()->route('login');
    }

    function lihatLogin()
    {
        return view('auth.login');
    }

    function submitLogin(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'kata_sandi' => 'required|string',
        ]);

        $credentials = [
            'nama' => $request->nama,
            'password' => $request->kata_sandi,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $role = Auth::user()->role;

            if ($role == 'admin') {
                return redirect()->route('admin.dashboard');
            }elseif ($role == 'customer') {
                return redirect()->route('customer.dashboard');
            }elseif ($role == 'kurir') {
                return redirect()->route('kurir.dashboard');
            }else {
                return redirect()->route('home');
            }
        }

        return redirect()->back()->with('gagal', 'Nama atau password salah');
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}

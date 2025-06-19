<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function home(){
        return view('home');
    }

    function adminDashboard(){
        return view('admin.dashboard');
    }

    function customerDashboard(){
        return view('customer.dashboard');
    }

    function kurirDashboard(){
        return view('kurir.dashboard');
    }


    // Dalam Controller Admin
    public function resetPassword(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->kata_sandi = bcrypt('12345678');
        $users->save();

        return redirect()->back()->with('success', 'Password berhasil direset!');
    }

    public function viewUser()
    {
        $users = User::all();
        return view('admin.lihatAkun', compact('users'));
    }

    public function tambahAkun()
    {
        return view('admin.tambahAkun');
    }
    
    function addUser(Request $request)
    {
        $users = new User();
        $users->nama = $request->nama;
        $users->kata_sandi = bcrypt($request->kata_sandi);
        $users->role = $request->role;
        $users->save();
        return redirect()->route('admin.lihatAkun')->with('success', 'User berhasil dibuat!');;
    }

    public function deleteUser(Request $request)
    {
        $users = User::findOrFail($request->id);
        $users->delete();
        return redirect()->route('admin.lihatAkun')->with('success', 'User berhasil dihapus!');
    }
}

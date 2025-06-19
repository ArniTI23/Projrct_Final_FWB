<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function lihatProduk(){
        $produk = Produk::all();
        return view('customer.team', compact('produk'));
    }
    
    public function lihathome(){
        return view('customer.home');
    }
}

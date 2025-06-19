<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class KurirController extends Controller
{
    
    public function index()
    {
        $pesanans = Pesanan::with(['transaksi.produk'])
            ->where('status', 'dikirim')
            ->orderBy('created_at', 'asc')
            ->get();

        return view('kurir.transaksi', compact('pesanans'));
    }

    
    public function  terima(Pesanan $pesanan)
    {
        if ($pesanan->status !== 'dikirim') {
            return back()->with('error', 'Pesanan sudah selesai.');
        }

        $pesanan->update(['status' => 'selesai']);

        return back()->with('success', 'Pesanan telah diselesaikan.');
    }
    
}

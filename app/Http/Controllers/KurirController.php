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
    
    // Pesanan masuk (status = 'masuk')
    // public function pesananMasuk()
    // {
    //     $pesananMasuk = Pesanan::where('status', 'masuk')->get();
    //     return view('kurir.pesanan-masuk', compact('pesananMasuk'));
    // }

    // // Riwayat pesanan (status != 'masuk')
    // public function riwayatPesanan()
    // {
    //     $riwayatPesanan = Pesanan::whereIn('status', ['proses', 'selesai'])->get();
    //     return view('kurir.riwayat-pesanan', compact('riwayatPesanan'));
    // }
    // Menampilkan pesanan masuk (status = 'masuk')
//     public function index()
//     {
//         $pesananMasuk = Pesanan::where('status', 'masuk')->orderBy('created_at', 'asc')->get();
//         return view('kurir.pesanan-masuk', compact('pesananMasuk'));
//     }

//     // Menyelesaikan pesanan (ubah status jadi 'selesai')
//     public function terima(Pesanan $pesanan)
//     {
//         if ($pesanan->status !== 'masuk') {
//             return back()->with('error', 'Pesanan tidak bisa diproses.');
//         }

//         $pesanan->update(['status' => 'selesai']);
//         return back()->with('success', 'Pesanan telah diterima dan diselesaikan.');
//     }

//     // Menampilkan riwayat pesanan (status != 'masuk')
//     public function riwayatPesanan()
//     {
//         $riwayatPesanan = Pesanan::whereIn('status', ['proses', 'selesai'])->orderBy('updated_at', 'desc')->get();
//         return view('kurir.riwayat-pesanan', compact('riwayatPesanan'));
//     }
    
}

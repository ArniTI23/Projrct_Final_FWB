<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    public function create(Produk $produk)
    {
        return view('customer.pesan', compact('produk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'produk_id' => 'required|exists:produks,id',
            'jumlah' => 'required|integer|min:1',
            'alamat' => 'required|string',
            'kontak' => 'required|string',
        ]);

        $produk = Produk::findOrFail($request->produk_id);

        if ($produk->stok < $request->jumlah) {
            return back()->with('error', 'Stok tidak mencukupi.');
        }

        DB::transaction(function () use ($request, $produk) {
            // Buat pesanan
            $pesanan = Pesanan::create([
                'user_id' => Auth::id(),
                'produk_id' => $produk->id,
                'alamat' => $request->alamat,
                'kontak' => $request->kontak,
                'status' => 'dikirim',
            ]);

            // Buat transaksi (pivot)
            Transaksi::create([
                'pesanan_id' => $pesanan->id,
                'produk_id' => $produk->id,
                'jumlah' => $request->jumlah,
                'subtotal_harga' => $produk->harga * $request->jumlah,
            ]);

            // Kurangi stok
            $produk->decrement('stok', $request->jumlah);
        });

        return redirect()->route('customer.transaksi', $request->produk_id)->with('success', 'Pesanan berhasil dibuat!');
    }

    public function transaksiSaya()
    {
        $pesanans = Pesanan::with(['transaksi.produk'])
            ->where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('customer.transaksi', compact('pesanans'));
    }
}

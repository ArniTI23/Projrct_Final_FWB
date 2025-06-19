<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Produk;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $produks = Produk::all();
    //     return view('master1', compact('produks'));

    // }
    public function index()
{
    $produks = Produk::all();
    return view('admin.dashboard', compact('produks')); // Pastikan file master1.blade.php ada
}


    public function tambahProduk(){
        $produk = Produk::all();
        return view('admin.tambahProduk',compact('produk'));
    }
    public function simpanproduk(Request $request){
        $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'nullable|string|max:1000',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'foto_produk' => 'required|image|mimes:png,jpg,jpeg',
        ]);
        $path = $request->file('foto_produk')->store('produk', 'public');
        Produk::create([
            'nama'=>$request->nama_produk,
            'deskripsi'=>$request->deskripsi,
            'harga'=>$request->harga,
            'stok'=>$request->stok,
            'foto_produk'=>$path,
        ]);
        return redirect()->route('admin.dashboard');
    }
    /**
     * Show the form for creating a new resource.
     */
    // public function tambahProduk()
    // {
    //     return view('admin.tambahProduk');
    // }
    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function simpanProduk(Request $request)
    // {
    //     $request->validate([
    //         'nama' => 'required|string|max:255',
    //         'deskripsi' => 'nullable|string|max:1000',
    //         'harga' => 'required|decimal:0,2',
    //         'stok' => 'required|numeric|max:500',
    //         'foto_produk' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     if ($request->hasFile('foto_produk')) {
    //     $file = $request->file('foto_produk');
    //     $filename = time() . '_' . $file->getClientOriginalName();
    //     $file->move(public_path('uploads/produk'), $filename);
    // }
    //     Produk::create([
    //         'nama' => $request->nama,
    //         'deskripsi' => $request->deskripsi,
    //         'harga' => $request->harga,
    //         'stok' => $request->stok,
    //         'foto_produk' => $filename ?? null,        
    //     ]);

    //     return redirect()->route('admin.dashboard')->with('success', 'Produk ditambahkan');
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
        
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function editProduk(Request $request)
    {
        $produk = Produk::findOrFail($request->id);
        if ($request->isMethod('post')) {
            $produk->nama = $request->nama;
            $produk->deskripsi = $request->deskripsi;
            $produk->harga = $request->harga;
            $produk->stok = $request->stok;
            if ($request->hasFile('foto_produk')) {
                $request->validate([
                    'foto_produk' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $produk->foto_produk = $request->file('foto_produk')->store('produk', 'public');
            }
            $produk->save();
            return redirect()->route('admin.dashboard')->with('success', 'Produk diperbarui');
        }
        return view('admin.editProduk', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    

    /**
     * Remove the specified resource from storage.
     */
    public function hapusProduk(Request $request)
    {
        $hapus = Produk::findOrFail($request->id);
        $hapus->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Produk dihapus');
    }

    public function indexCustomer()
    {
        $produks = Produk::all();
        return view('customer.dashboard', compact('produks'));
        
    }

    public function semuaTransaksi()
    {
        $pesanans = Pesanan::with(['user', 'transaksi.produk'])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('admin.transaksi', compact('pesanans'));
    }
}

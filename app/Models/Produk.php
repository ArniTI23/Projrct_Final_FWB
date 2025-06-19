<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = ['nama', 'deskripsi', 'stok', 'harga', 'foto_produk'];

    public function transaksi(){
        return $this->hasMany(Transaksi::class);
    }
    public function pesanan()
    {
        return $this->belongsToMany(Pesanan::class, 'transaksi', 'produk_id', 'pesanan_id')
                    ->withPivot('jumlah', 'subtotal_harga')
                    ->withTimestamps();
    }



}

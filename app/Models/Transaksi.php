<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['pesanan_id', 'produk_id', 'jumlah', 'subtotal_harga'];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
}

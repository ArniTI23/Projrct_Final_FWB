<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $fillable = ['user_id', 'produk_id', 'alamat', 'kontak', 'status'];

    public function transaksi(){
        return $this->hasMany(Transaksi::class);
    }
    public function pesanan()
    {
        return $this->belongsToMany(Pesanan::class, 'transaksi', 'produk_id', 'pesanan_id')
                    ->withPivot('jumlah', 'subtotal_harga')
                    ->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

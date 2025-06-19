@extends('master')

@section('content')
<div class="container">
    <h2>Riwayat Transaksi Saya</h2>

    @if($pesanans->isEmpty())
        <p>Belum ada transaksi.</p>
    @else
        @foreach($pesanans as $pesanan)
            <div style="border: 1px solid #ccc; padding: 15px; margin-bottom: 20px;">
                <p><strong>Status:</strong> {{ ucfirst($pesanan->status) }}</p>
                <p><strong>Alamat:</strong> {{ $pesanan->alamat }}</p>
                <p><strong>Kontak:</strong> {{ $pesanan->kontak }}</p>
                <p><strong>Tanggal Pesanan:</strong> {{ $pesanan->created_at->format('d-m-Y H:i') }}</p>
                
                <p><strong>Produk yang Dibeli:</strong></p>
                <ul>
                    @foreach($pesanan->transaksi as $trx)
                        <li>
                            {{ $trx->produk->nama }} - {{ $trx->jumlah }} pcs  
                            (Harga Satuan: Rp{{ number_format($trx->produk->harga, 0, ',', '.') }} |  
                            Subtotal: Rp{{ number_format($trx->subtotal_harga, 0, ',', '.') }})
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    @endif
</div>
@endsection
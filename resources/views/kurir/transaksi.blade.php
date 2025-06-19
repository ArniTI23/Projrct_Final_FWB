@extends('master1')

@section('breadcrumb')
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="#">Kurir</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Pesanan</li>
@endsection

@section('konten')
<div class="container">
    <h2>Daftar Pengiriman</h2>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    @if($pesanans->isEmpty())
        <p>Tidak ada pesanan yang sedang dikirim.</p>
    @else
        @foreach($pesanans as $pesanan)
            <div style="border: 1px solid #ccc; padding: 15px; margin-bottom: 20px;">
                <p><strong>Alamat:</strong> {{ $pesanan->alamat }}</p>
                <p><strong>Kontak:</strong> {{ $pesanan->kontak }}</p>
                <p><strong>Tanggal Pesan:</strong> {{ $pesanan->created_at->format('d-m-Y H:i') }}</p>
                <p><strong>Produk:</strong></p>
                <ul>
                    @foreach($pesanan->transaksi as $trx)
                        <li>
                            {{ $trx->produk->nama }} - {{ $trx->jumlah }} pcs 
                            (Subtotal: Rp{{ number_format($trx->subtotal_harga, 0, ',', '.') }})
                        </li>
                    @endforeach
                </ul>

                <form method="POST" action="{{ route('kurir.terima', $pesanan->id) }}">
                    @csrf
                    <button type="submit">Terima Pesanan (Selesai)</button>
                </form>
            </div>
        @endforeach
    @endif
</div>
@endsection
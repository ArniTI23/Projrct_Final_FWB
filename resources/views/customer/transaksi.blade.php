@extends('customer.master')

@section('content')
<div class="container mt-5" style="margin-top: 100px !important;">
    <!-- Judul -->
    <div class="text-center mb-4">
        <h2>Riwayat Transaksi</h2>
        <p class="text-center">Daftar transaksi pembelian Anda</p>
    </div>

    @if($pesanans->isEmpty())
        <div class="alert alert-info text-center">
            Belum ada transaksi yang dilakukan.
        </div>
    @else
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                @foreach($pesanans as $pesanan)
                    <div class="card mb-4 shadow-sm" data-aos="fade-up">
                        <div class="card-body">
                            <h5 class="card-title">Pesanan #{{ $pesanan->id }}</h5>
                            <p><strong>Status:</strong> 
                                <span class="badge 
                                    @if($pesanan->status == 'diproses') bg-warning 
                                    @elseif($pesanan->status == 'dikirim') bg-info 
                                    @elseif($pesanan->status == 'selesai') bg-success 
                                    @else bg-secondary @endif">
                                    {{ ucfirst($pesanan->status) }}
                                </span>
                            </p>
                            <p><strong>Alamat:</strong> {{ $pesanan->alamat }}</p>
                            <p><strong>Kontak:</strong> {{ $pesanan->kontak }}</p>
                            <p><strong>Tanggal Pesanan:</strong> {{ $pesanan->created_at->format('d-m-Y H:i') }}</p>

                            <div class="table-responsive mt-3">
                                <table class="table table-bordered table-sm">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Produk</th>
                                            <th>Jumlah</th>
                                            <th>Harga Satuan</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pesanan->transaksi as $trx)
                                            <tr>
                                                <td>{{ $trx->produk->nama }}</td>
                                                <td>{{ $trx->jumlah }} pcs</td>
                                                <td>Rp{{ number_format($trx->produk->harga, 0, ',', '.') }}</td>
                                                <td>Rp{{ number_format($trx->subtotal_harga, 0, ',', '.') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="text-end">
                                <strong>Total: Rp{{ number_format($pesanan->transaksi->sum('subtotal_harga'), 0, ',', '.') }}</strong>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
@endsection

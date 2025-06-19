@extends('master1')

@section('breadcrumb')
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="#">Kurir</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Pesanan</li>
@endsection

@section('konten')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <h4 class="text-dark">Daftar Pengiriman</h4>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if($pesanans->isEmpty())
                <div class="alert alert-info mt-4">Tidak ada pesanan yang sedang dikirim.</div>
            @else
                @foreach($pesanans as $pesanan)
                    <div class="card mt-4">
                        <div class="card-header bg-primary text-white">
                            <h6 class="mb-0">Pesanan #{{ $pesanan->id }}</h6>
                        </div>
                        <div class="card-body">
                            <p><strong>Alamat:</strong> {{ $pesanan->alamat }}</p>
                            <p><strong>Kontak:</strong> {{ $pesanan->kontak }}</p>
                            <p><strong>Tanggal Pesan:</strong> {{ $pesanan->created_at->format('d-m-Y H:i') }}</p>

                            <p class="mb-2"><strong>Produk:</strong></p>
                            <ul class="list-group mb-3">
                                @foreach($pesanan->transaksi as $trx)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{ $trx->produk->nama }} ({{ $trx->jumlah }} pcs)
                                        <span class="badge bg-primary rounded-pill">Rp{{ number_format($trx->subtotal_harga, 0, ',', '.') }}</span>
                                    </li>
                                @endforeach
                            </ul>

                            <form method="POST" action="{{ route('kurir.terima', $pesanan->id) }}">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm">Tandai Selesai</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection

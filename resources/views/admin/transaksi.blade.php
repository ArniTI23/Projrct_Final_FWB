{{-- @extends('master1')

@section('konten')
<div class="container">
    <h2>Semua Transaksi</h2>

    @if($pesanans->isEmpty())
        <p>Tidak ada transaksi yang ditemukan.</p>
    @else
        @foreach($pesanans as $pesanan)
            <div style="border: 1px solid #ccc; padding: 15px; margin-bottom: 20px;">
                <p><strong>Nama Customer:</strong> {{ $pesanan->user->nama }}</p>
                <p><strong>Status:</strong> {{ ucfirst($pesanan->status) }}</p>
                <p><strong>Alamat:</strong> {{ $pesanan->alamat }}</p>
                <p><strong>Kontak:</strong> {{ $pesanan->kontak }}</p>
                <p><strong>Tanggal Pesanan:</strong> {{ $pesanan->created_at->format('d-m-Y H:i') }}</p>

                <p><strong>Detail Produk:</strong></p>
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
@endsection --}}


@extends('master1')

@section('breadcrumb')
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="#">Admin</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Riwayat Transaksi</li>
@endsection

@section('konten')
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h6>Semua Transaksi</h6>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Produk</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center">Jumlah</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center">Subtotal</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center">Customer</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center">Status</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($pesanans as $pesanan)
                @foreach ($pesanan->transaksi as $trx)
                <tr>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pesanan->created_at->format('d/m/Y H:i') }}</p>
                  </td>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="{{ asset('storage/' . $trx->produk->foto_produk) }}" class="avatar avatar-sm me-3" alt="produk">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{ $trx->produk->nama }}</h6>
                        <p class="text-xs text-secondary mb-0">Rp{{ number_format($trx->produk->harga, 0, ',', '.') }}</p>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $trx->jumlah }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">Rp{{ number_format($trx->subtotal_harga, 0, ',', '.') }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $pesanan->user->nama }}</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    @if ($pesanan->status == 'selesai')
                      <span class="badge badge-sm bg-gradient-success">Selesai</span>
                    @elseif ($pesanan->status == 'pending')
                      <span class="badge badge-sm bg-gradient-warning">Pending</span>
                    @else
                      <span class="badge badge-sm bg-gradient-danger">{{ ucfirst($pesanan->status) }}</span>
                    @endif
                  </td>
                </tr>
                @endforeach
              @empty
                <tr>
                  <td colspan="6" class="text-center text-sm">Tidak ada transaksi yang ditemukan.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

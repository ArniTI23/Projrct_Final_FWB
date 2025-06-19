{{-- @extends('master1')

@section('breadcrumb')
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="#">Dashboard</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Riwayat Pesanan</li>
@endsection

@section('konten')
<div class="container-fluid py-4">
  <div class="card">
    <div class="card-header">
      <h5 class="mb-0">Riwayat Pesanan</h5>
    </div>
    <div class="card-body">
      @if($riwayatPesanan->isEmpty())
        <p class="text-sm text-center">Belum ada riwayat pesanan.</p>
      @else
        <div class="table-responsive">
          <table class="table align-items-center">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($riwayatPesanan as $pesanan)
              <tr>
                <td>{{ $pesanan->id }}</td>
                <td>{{ $pesanan->nama_pelanggan }}</td>
                <td>{{ $pesanan->alamat }}</td>
                <td>
                  <span class="badge 
                    @if($pesanan->status == 'proses') bg-warning 
                    @elseif($pesanan->status == 'selesai') bg-success 
                    @endif text-white">
                    {{ ucfirst($pesanan->status) }}
                  </span>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      @endif
    </div>
  </div>
</div>
@endsection --}}

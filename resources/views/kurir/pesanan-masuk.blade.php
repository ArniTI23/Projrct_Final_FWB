{{-- @extends('master1')
@section('breadcrumb')
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="#">Dashboard</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Pesanan</li>
@endsection
@section('konten')
<div class="container-fluid py-4">
  <div class="card">
    <div class="card-header">
      <h5 class="mb-0">Pesanan</h5>
    </div>
    <div class="card-body">
      @if($pesananMasuk->isEmpty())
        <p class="text-sm text-center">Belum ada pesanan masuk.</p>
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
              @foreach ($pesananMasuk as $pesanan)
              <tr>
                <td>{{ $pesanan->id }}</td>
                <td>{{ $pesanan->nama_pelanggan }}</td>
                <td>{{ $pesanan->alamat }}</td>
                <td><span class="badge bg-info text-white">{{ $pesanan->status }}</span></td>
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




@extends('master1')

@section('breadcrumb')
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="#">Dashboard</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Pesanan Masuk</li>
@endsection

@section('konten')
<div class="container-fluid py-4">
  <div class="card">
    <div class="card-header">
      <h5 class="mb-0">Pesanan Masuk</h5>
    </div>
    <div class="card-body">
      @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
      @endif
      @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
      @endif

      @if($pesananMasuk->isEmpty())
        <p class="text-sm text-center">Belum ada pesanan masuk.</p>
      @else
        <div class="table-responsive">
          <table class="table align-items-center">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama Pelanggan</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($pesananMasuk as $pesanan)
              <tr>
                <td>{{ $pesanan->id }}</td>
                <td>{{ $pesanan->nama_pelanggan }}</td>
                <td>{{ $pesanan->alamat }}</td>
                <td><span class="badge bg-info text-white">{{ $pesanan->status }}</span></td>
                <td>
                  <form action="{{ route('kurir.terima', $pesanan->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-success btn-sm"
                      onclick="return confirm('Yakin ingin menerima pesanan ini?')">Terima</button>
                  </form>
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
@endsection

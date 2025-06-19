{{-- @extends('master1')
@section('breadcrumb')
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="#">Dashboard</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Edit Produk</li>
@endsection
@section('konten')
    <form action="{{ route('admin.editProduk', $produk->id) }}" method="POST">
        @csrf

        <div>
            <label for="nama">Nama Produk:</label>
            <input type="text" id="nama" name="nama" value="{{ $produk->nama }}" required>
        </div>
        <div>
            <label for="harga">Harga:</label>
            <input type="number" id="harga" name="harga" value="{{ $produk->harga }}" required>
        </div>
        <div>
            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok" value="{{ $produk->stok }}" required>
        </div>
        
        <button type="submit">Simpan</button>

    </form>
@endsection --}}



@extends('master1')

@section('breadcrumb')
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="#">Admin</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Edit Produk</li>
@endsection

@section('konten')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <div class="card shadow-lg" style="max-width:900px;margin:auto;">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h5 class="mb-0">Edit Produk</h5>
                </div>
                <div class="card-body text-dark py-3">
                    <form method="POST" action="{{ route('admin.editProduk', $produk->id) }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Nama Produk -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="{{ $produk->nama }}" required>
                        </div>

                        <!-- Deskripsi -->
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="2" maxlength="200" required>{{ $produk->deskripsi }}</textarea>
                        </div>

                        <!-- Stok -->
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="number" step="1" class="form-control" name="stok" id="stok" value="{{ $produk->stok }}" required>
                        </div>

                        <!-- Harga -->
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga (Rp)</label>
                            <input type="number" step="0.01" class="form-control" name="harga" id="harga" value="{{ $produk->harga }}" required>
                        </div>

                        <!-- Foto Produk -->
                        <div class="mb-4">
                            <label for="foto_produk" class="form-label">Foto Produk</label>
                            <input type="file" class="form-control" name="foto_produk" id="foto_produk" accept="image/*">
                            @if ($produk->foto_produk)
                                <div class="mt-3">
                                    <img src="{{ asset('storage/' . $produk->foto_produk) }}" alt="Foto Produk" class="img-fluid rounded" style="max-height: 150px;">
                                </div>
                            @endif
                        </div>

                        <!-- Tombol Simpan -->
                        <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

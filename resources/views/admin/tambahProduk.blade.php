{{-- @extends('master1')

@section('konten')
    <form action="{{ route('admin.simpanProduk') }}" method="POST">
        @csrf
        <div>
            <label for="nama">Nama Produk:</label>
            <input type="string" id="nama" name="nama" required>
        </div>
        <div>
            <label for="harga">Harga:</label>
            <input type="decimal" id="harga" name="harga" required>
        </div>
        <div>
            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok" required>
        </div>
        <div>
             <label for="foto_produk">Foto Produk</label>
            <input type="file" name="foto_produk" id="foto_produk" accept="image/*" required>
        </div>
        
        
        <button type="submit">Simpan Produk</button>

    </form>
@endsection --}}


@extends('master1')

@section('breadcrumb')
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="#">Admin</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tambah Produk</li>
@endsection

@section('konten')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <div class="card shadow-lg" style="max-width:900px;margin:auto;">
                <div class="card-header bg-primary text-white text-center py-2">
                    <h5 class="mb-0">Tambah Produk</h5>
                </div>
                <div class="card-body text-dark py-3">
                    <form action="{{ route('admin.simpanProduk') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <!-- Nama Produk -->
                        <div class="mb-2">
                            <label for="nama" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" name="nama" id="nama" required>
                        </div>

                        <!-- Deskripsi -->
                        <div class="mb-2">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="2" maxlength="100" required></textarea>
                        </div>

                        <!-- Stok -->
                        <div class="mb-2">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="number" class="form-control" name="stok" id="stok" required>
                        </div>

                        <!-- Harga -->
                        <div class="mb-2">
                            <label for="harga" class="form-label">Harga (Rp)</label>
                            <input type="number" step="0.01" class="form-control" name="harga" id="harga" required>
                        </div>

                        <!-- Foto Produk -->
                        <div class="mb-3">
                            <label for="foto_produk" class="form-label">Foto Produk</label>
                            <input type="file" class="form-control" name="foto_produk" id="foto_produk" accept="image/*" required>
                        </div>

                        <!-- Tombol Submit -->
                        <button type="submit" class="btn btn-primary w-100">Simpan Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

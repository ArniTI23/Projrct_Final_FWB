 @extends('master1')
 @section('breadcrumb')
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="#">Admin</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Produk</li>
@endsection

@section('konten')
<div class="container py-4">
    {{-- <h2 class="text-dark text-center mb-4">Daftar Produk</h2> --}}

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @foreach ($produks as $p)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('storage/' . $p->foto_produk) }}" class="card-img-top img-fixed" alt="{{ $p->nama }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $p->nama }}</h5>
                        <p class="card-text">Stok: {{ $p->stok }}</p>
                        <p class="card-text text-success">Rp {{ number_format($p->harga, 0, ',', '.') }}</p>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal{{ $p->id }}">
                                Detail
                            </button>
                            <a href="{{ route('admin.editProduk', $p->id) }}" class="btn btn-success btn-sm">Edit</a>
                            <form action="{{ route('admin.hapusProduk', $p->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Detail Produk -->
            <div class="modal fade" id="detailModal{{ $p->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $p->id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel{{ $p->id }}">{{ $p->nama }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                        </div>
                        <div class="modal-body" style="max-height: 70vh; overflow-y: auto;">
                            <img src="{{ asset('storage/' . $p->foto_produk) }}" class="img-fluid mb-3 d-block mx-auto" alt="Foto Produk">
                            <ul class="list-group">
                                <li class="list-group-item"><strong>Nama Produk:</strong> {{ $p->nama }}</li>
                                <li class="list-group-item"><strong>Deskripsi:</strong> {{ $p->deskripsi }}</li>
                                <li class="list-group-item"><strong>Stok:</strong> {{ $p->stok }}</li>
                                <li class="list-group-item"><strong>Harga:</strong> Rp {{ number_format($p->harga, 0, ',', '.') }}</li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('admin.tambahProduk') }}" class="btn btn-primary">Tambah Produk</a>
    </div>
</div>
@endsection

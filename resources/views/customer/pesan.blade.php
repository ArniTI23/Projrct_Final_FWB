@extends('customer.master')

@section('content')
<div class="container" style="margin-top: 80px; max-width: 700px;" >
    <!-- Judul Section Title -->
    <div class="container section-title text-center mb-4" data-aos="fade-up">
        <br><br>
        <h2>Pesan Produk</h2>
        <div><span>Silakan</span> <span class="description-title">Pesan Produk</span></div>
    </div>

    <!-- Card -->
    <div class="card shadow p-4" style="border-radius: 15px;">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('pesanan.store') }}">
            @csrf
            <input type="hidden" name="produk_id" value="{{ $produk->id }}">

            <div class="mb-3">
                <label class="form-label"><strong>Nama Produk:</strong></label>
                <p class="form-control-plaintext">{{ $produk->nama }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label"><strong>Harga:</strong></label>
                <p class="form-control-plaintext">Rp{{ number_format($produk->harga, 0, ',', '.') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label"><strong>Stok Tersedia:</strong></label>
                <p class="form-control-plaintext">{{ $produk->stok }}</p>
            </div>

            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah:</label>
                <input type="number" name="jumlah" id="jumlah" class="form-control" value="1" min="1" max="{{ $produk->stok }}" required>
            </div>

            <div class="mb-3">
                <label for="total" class="form-label">Total Harga:</label>
                <input type="text" id="total" class="form-control" readonly>
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Pengiriman:</label>
                <textarea name="alamat" id="alamat" class="form-control" rows="2" required></textarea>
            </div>

            <div class="mb-3">
                <label for="kontak" class="form-label">Nomor Kontak:</label>
                <input type="text" name="kontak" id="kontak" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success w-100">Beli Sekarang</button>
        </form>
    </div>
</div>

<script>
    const harga = {{ $produk->harga }};
    const jumlahInput = document.getElementById('jumlah');
    const totalInput = document.getElementById('total');

    function updateTotal() {
        const jumlah = parseInt(jumlahInput.value) || 0;
        const total = jumlah * harga;
        totalInput.value = 'Rp' + total.toLocaleString('id-ID');
    }

    jumlahInput.addEventListener('input', updateTotal);
    window.addEventListener('DOMContentLoaded', updateTotal);
</script>
@endsection

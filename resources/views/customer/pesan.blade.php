@extends('master')
@section('content')
<div class="container">
    <h2>Pesan Produk</h2>

    @if(session('success'))
        <div style="color: green">{{ session('success') }}</div>
    @elseif(session('error'))
        <div style="color: red">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('pesanan.store') }}">
        @csrf
        <input type="hidden" name="produk_id" value="{{ $produk->id }}">

        <p><strong>Nama Produk:</strong> {{ $produk->nama }}</p>
        <p><strong>Harga:</strong> Rp{{ number_format($produk->harga, 0, ',', '.') }}</p>
        <p><strong>Stok:</strong> {{ $produk->stok }}</p>

        <div>
            <label>Jumlah:</label>
            <input type="number" name="jumlah" id="jumlah" value="1" min="1" max="{{ $produk->stok }}" required>
        </div>

        <div>
            <label>Total Harga:</label>
            <input type="text" id="total" readonly>
        </div>

        <div>
            <label>Alamat:</label>
            <textarea name="alamat" required></textarea>
        </div>

        <div>
            <label>Kontak:</label>
            <input type="text" name="kontak" required>
        </div>

        <button type="submit">Beli Sekarang</button>
    </form>
</div>

<script>
    const harga = {{ $produk->harga }};
    const jumlahInput = document.getElementById('jumlah');
    const totalInput = document.getElementById('total');

    function updateTotal() {
        const jumlah = parseInt(jumlahInput.value) || 0;
        totalInput.value = 'Rp' + (jumlah * harga).toLocaleString('id-ID');
    }

    jumlahInput.addEventListener('input', updateTotal);
    window.addEventListener('DOMContentLoaded', updateTotal);
</script>
@endsection
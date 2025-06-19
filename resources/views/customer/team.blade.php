@extends('customer.master')

@section('content')
<div class="container" style="margin-top: 80px;" data-aos="fade-up" data-aos-delay="100">
    <section id="team" class="team">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Produk</h2>
        <div><span>Check Our</span> <span class="description-title">Produk</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          @foreach ($produk as $item)
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="team-member d-flex">
                <div class="member-img">
                  <img src="{{ asset('storage/' . $item->foto_produk) }}" class="img-fluid" alt="{{ $item->nama }}" loading="lazy" style="object-fit:cover; height:200px; width:200px;">
                </div>
                <div class="member-info flex-grow-1">
                  <h4>{{ $item->nama }}</h4>
                  <span>Stok: {{ $item->stok }}</span>
                  <p>{{ $item->deskripsi }}</p>
                  <p><strong>Harga:</strong> Rp. {{ number_format($item->harga, 0, ',', '.') }}</p>
                  
                  {{-- Tombol Beli --}}
                  <a href="{{ route('pesanan.create', $item->id) }}" class="btn btn-primary mt-2">Beli</a>
                </div>
              </div>
            </div><!-- End Team Member -->
          @endforeach
        </div>
      </div>

    </section><!-- /Team Section -->
</div>
@endsection

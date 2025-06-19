@extends('master')

@section('breadcrumb')
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="#">Customer</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Produk</li>
@endsection

@section('page-header')
    <div class="page-header">
        <h4 class="page-title">Selamat Datang di Dashboard Customer</h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
                <a href="#">
                    <i class="icon-home"></i>
                </a>
            </li>

        </ul>
    </div>
@endsection

@section('content')
    <div class="container">
        <h1>Data Produk</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>foto</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produks as $product)
                    <tr>
                        <td>{{ $product->nama }}</td>
                        <td>{{ $product->stok }}</td>
                        <td>Rp. {{ $product->harga }}</td>
                        <td>
                            <a href="{{ route('pesanan.create', $product->id) }}"">
                                <button class="btn btn-primary">Beli</button>
                            </a>
                        </td>
                    </tr>
                    
                @endforeach

            </tbody>
        </table>

    </div>
@endsection

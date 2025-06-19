      {{-- <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="index.html" class="logo">
                        <img src="{{ asset('kai') }}/assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                            height="20" />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        
                       @if (Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a href="{{ route('admin.dashboard') }}">
                                <i data-feather="layout"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.tambahProduk') }}">
                                <i data-feather="plus-square"></i>
                                <p>Tambah Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.transaksi') }}">
                                <i class="fas fa-plus-square"></i>
                                <p>Lihat Transaksi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.lihatAkun') }}">
                                <i class="fas fa-plus-square"></i>
                                <p>Lihat Akun</p>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a href="{{ route('admin.tambah-akun') }}">
                                <i class="fas fa-plus-square"></i>
                                <p>Tambah Akun</p>
                            </a>
                        </li>
                        
                        @elseif (Auth::user()->role == 'customer')
                        <li class="nav-item">
                            <a href="{{ route('customer.dashboard') }}">
                                <i class="fas fa-tachometer-alt"></i>
                                <p>Lihat Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('customer.transaksi') }}">
                                <i class="fas fa-shopping-cart"></i>
                                <p>RiwayatTransaksi</p>
                            </a>
                        </li>

                        @elseif (Auth::user()->role == 'kurir')
                        <li class="nav-item">
                            <a href="{{ route('kurir.transaksi') }}">
                                <i class="fas fa-shopping-cart"></i>
                                <p>Lihat Pesanan</p>
                            </a>
                        </li>
                       @endif
                    </ul>
                </div>
            </div>
        </div> --}}





<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="#">
            <img src="{{ asset('argon/assets/img/logo-ct-dark.png') }}" width="26px" height="26px" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Nama Aplikasi</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">

    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">

            {{-- Admin Sidebar --}}
            @if (Auth::user()->role === 'admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">
                        <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Produk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.tambahProduk') }}">
                        <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-fat-add text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Tambah Produk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.transaksi') }}">
                        <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-bullet-list-67 text-info text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Riwayat Transaksi</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.lihatAkun') }}">
                        <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-circle-08 text-warning text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Daftar User</span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.tambah-akun') }}">
                        <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-fat-add text-success text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Tambah Akun</span>
                    </a>
                </li> --}}
            @endif

            {{-- Customer Sidebar --}}
            @if (Auth::user()->role === 'customer')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.dashboard') }}">
                        <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Lihat Produk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customer.transaksi') }}">
                        <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-cart text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Riwayat Transaksi</span>
                    </a>
                </li>
            @endif

            {{-- Kurir Sidebar --}}
            {{-- @if (Auth::user()->role === 'kurir')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kurir.transaksi') }}">
                        <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-delivery-fast text-danger text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1">Lihat Pesanan</span>
                    </a>
                </li>
            @endif --}}

            @if (Auth::user()->role === 'kurir')
            <!-- Lihat Pesanan Masuk -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('kurir.transaksi') }}">
                <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-cart text-info text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Pesanan</span>
                </a>
            </li>
{{-- 
            <!-- Riwayat Pesanan -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('kurir.dashboard') }}">
                <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-archive-2 text-success text-sm opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li> --}}
            @endif 


            {{-- Optional Logout --}}
            <li class="nav-item mt-3">
                <a class="nav-link text-danger" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-button-power text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</aside>


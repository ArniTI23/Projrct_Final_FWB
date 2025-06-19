<div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{/assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">mamasa wecra</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('customer.lihathome') }}" class="active">Home</a></li>
          <li><a href="{{ route('customer.lihatProduk') }}">Produk</a></li>
          <li><a href="{{ route('customer.lihattransaksi') }}">Riwayat Transaksi</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <!-- Logout Button -->
    <form action="{{ route('logout') }}" method="POST" class="d-inline">
        @csrf
        <button type="submit" class="btn-getstarted" style="border: none; background-color: #4154f1; color: white; padding: 8px 16px; border-radius: 4px;">
        Logout
        </button>
    </form>


    </div>
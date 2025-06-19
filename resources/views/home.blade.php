<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Strategy Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('strategy')}}/assets/img/favicon.png" rel="icon">
  <link href="{{asset('strategy')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('strategy')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('strategy')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('strategy')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('strategy')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{asset('strategy')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('strategy')}}/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Strategy
  * Template URL: https://bootstrapmade.com/strategy-bootstrap-agency-template/
  * Updated: May 09 2025 with Bootstrap v5.3.6
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">Strategy</h1>
      </a>

      <nav id="navmenu" class="navmenu ms-auto">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          @if (Route::has('login'))
            @auth
            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
            @else
            <li><a href="{{ route('login') }}">Log in</a></li>
            @if (Route::has('register'))
            <li><a href="{{ route('register') }}">Register</a></li>
            @endif
            @endauth
          @endif
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      

      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list"></i></button>


    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 content-col" data-aos="fade-up">
            <div class="content">
              <div class="agency-name">
                <h5>OUR AGENCY</h5>
              </div>

              <div class="main-heading">
                <h1>MAMASA <br>WECRA</h1>
              </div>

              <div class="divider"></div>

              <div class="description">
                <p>Keindahan Kain Tradisional Mamasa dalam Gaya Modern.</p>
                <P>Temukan keunikan budaya melalui koleksi kain khas Mamasa seperti sarung, baju tenun, dan berbagai produk etnik lainnya.
                Kami menghadirkan warisan lokal dalam sentuhan kontemporer untuk memperkaya identitas dan gaya Anda.</P>
              </div>

              
            </div>
          </div>

          <div class="col-lg-5" data-aos="zoom-out">
            <div class="visual-content">
              <div class="fluid-shape">
                <img src="{{asset('strategy')}}/assets/img/abstract/abstract-1.webp" alt="Abstract Fluid Shape" class="fluid-img">
              </div>

              
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

  </main>

  <footer id="footer" class="footer">

    
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Strategy</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('strategy')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('strategy')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{asset('strategy')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('strategy')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('strategy')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('strategy')}}/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="{{asset('strategy')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="{{asset('strategy')}}/assets/js/main.js"></script>

</body>

</html>
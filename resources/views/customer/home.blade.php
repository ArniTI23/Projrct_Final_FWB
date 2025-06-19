@extends('customer.master')

@section('content')
<!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 content-col" data-aos="fade-up">
            <div class="content">
              <div class="agency-name">
                <h5></h5>
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
      </div>
    </section><!-- /Hero Section -->
@endsection
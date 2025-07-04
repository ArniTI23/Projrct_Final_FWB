@extends('customer.master')

@section('content')
<!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" style="margin-top: 80px;" data-aos="fade-up" data-aos-delay="100">
        <h2>About</h2>
        <div><span>Learn More</span> <span class="description-title">About Us</span></div>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gx-5 align-items-center">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="about-image position-relative">
              <img src="{{asset('strategy')}}/assets/img/about/about-portrait-1.webp" class="img-fluid rounded-4 shadow-sm" alt="About Image" loading="lazy">
              <div class="experience-badge">
                <span class="years">20+</span>
                <span class="text">Years of Expertise</span>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="300">
            <div class="about-content">
              <h2>Elevating Business Performance Through Innovation</h2>
              <p class="lead">We focus on crafting bespoke strategies that navigate complexity and deliver tangible results for our clients.</p>
              <p>Through a blend of sophisticated analytics and creative problem-solving, we empower organizations to thrive in rapidly evolving markets.</p>

              <div class="row g-4 mt-3">
                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="400">
                  <div class="feature-item">
                    <i class="bi bi-check-circle-fill"></i>
                    <h5>Dedicated Team Support</h5>
                    <p>Our highly skilled professionals are committed to providing personalized service and impactful solutions on every engagement.</p>
                  </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in" data-aos-delay="450">
                  <div class="feature-item">
                    <i class="bi bi-lightbulb-fill"></i>
                    <h5>Forward-Thinking Approach</h5>
                    <p>We embrace innovative methodologies to develop unique strategies that drive lasting success.</p>
                  </div>
                </div>
              </div>

              <a href="#" class="btn btn-primary mt-4">Explore Our Services</a>
            </div>
          </div>
        </div>

        <div class="testimonial-section mt-5 pt-5" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4" data-aos="fade-right" data-aos-delay="200">
              <div class="testimonial-intro">
                <h3>Our Clients Speak Highly</h3>
                <p>Hear directly from those who have experienced the impact of our partnership and achieved their strategic goals.</p>
                <div class="swiper-nav-buttons mt-4">
                  <button class="slider-prev"><i class="bi bi-arrow-left"></i></button>
                  <button class="slider-next"><i class="bi bi-arrow-right"></i></button>
                </div>
              </div>
            </div>

            <div class="col-lg-8" data-aos="fade-left" data-aos-delay="300">
              <div class="testimonial-slider swiper init-swiper">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 800,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": 1,
                    "spaceBetween": 30,
                    "navigation": {
                      "nextEl": ".slider-next",
                      "prevEl": ".slider-prev"
                    },
                    "breakpoints": {
                      "768": {
                        "slidesPerView": 2
                      }
                    }
                  }
                </script>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="rating mb-3">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <p>"Their strategic vision and unwavering commitment to results provided exceptional value. Our operational efficiency has signficantly improved."</p>
                      <div class="client-info d-flex align-items-center mt-4">
                        <img src="{{asset('strategy')}}/assets/img/person/person-f-1.webp" class="client-img" alt="Client" loading="lazy">
                        <div>
                          <h6 class="mb-0">Eleanor Vance</h6>
                          <span>Operations Manager</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="rating mb-3">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                      </div>
                      <p>"Collaborating with their team was a revelation. Their innovative strategies guided us toward achieving our objectives with precision and speed."</p>
                      <div class="client-info d-flex align-items-center mt-4">
                        <img src="{{asset('strategy')}}/assets/img/person/person-m-1.webp" class="client-img" alt="Client" loading="lazy">
                        <div>
                          <h6 class="mb-0">David Kim</h6>
                          <span>Product Lead</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="rating mb-3">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <p>"The depth of knowledge and unwavering dedication they bring to every project is exceptional. They've become an essential ally in driving our expansion."</p>
                      <div class="client-info d-flex align-items-center mt-4">
                        <img src="{{asset('strategy')}}/assets/img/person/person-f-2.webp" class="client-img" alt="Client" loading="lazy">
                        <div>
                          <h6 class="mb-0">Isabella Diaz</h6>
                          <span>Research Analyst</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="rating mb-3">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                      </div>
                      <p>"Their dedication to delivering superior solutions and their meticulous attention to detail have profoundly impacted our corporate growth trajectory."</p>
                      <div class="client-info d-flex align-items-center mt-4">
                        <img src="{{asset('strategy')}}/assets/img/person/person-f-3.webp" class="client-img" alt="Client" loading="lazy">
                        <div>
                          <h6 class="mb-0">Olivia Chen</h6>
                          <span>Development Strategist</span>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->
@endsection
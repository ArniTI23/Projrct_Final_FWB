<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>

  <!-- Fonts and icons -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <link href="{{ asset('argon/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('argon/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('argon/assets/css/argon-dashboard.css?v=2.1.0') }}" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Sign In</h4>
                  <p class="mb-0">Masukkan nama dan password untuk masuk</p>
                </div>
                <div class="card-body">
                  @if (session('gagal'))
                      <div class="alert alert-danger">{{ session('gagal') }}</div>
                  @endif

                  <form method="POST" action="{{ route('login.submit') }}">
                    @csrf

                    <!-- Nama -->
                    <div class="mb-3">
                      <input type="text" name="nama" class="form-control form-control-lg @error('nama') is-invalid @enderror" placeholder="Nama" required autofocus value="{{ old('nama') }}">
                      @error('nama')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                      <input type="password" name="kata_sandi" class="form-control form-control-lg @error('kata_sandi') is-invalid @enderror" placeholder="Kata Sandi" required>
                      @error('kata_sandi')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
                      <label class="form-check-label" for="rememberMe">Ingat Saya</label>
                    </div>

                    <!-- Submit -->
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary w-100 mt-4 mb-0">Masuk</button>
                    </div>
                  </form>
                </div>

                <!-- Footer dengan navigasi -->
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Daftar di sini</a>
                  </p>
                  <p class="mb-2 text-sm mx-auto">
                    <a href="{{ url('/') }}" class="text-primary text-gradient font-weight-bold">Kembali ke Beranda</a>
                  </p>
                  <p class="text-sm mx-auto">
                    <a href="javascript:history.back()" class="text-secondary text-gradient font-weight-bold">← Kembali ke halaman sebelumnya</a>
                  </p>
                </div>
              </div>
            </div>

            <!-- Background Gambar Kanan -->
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
                background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Login sekarang"</h4>
                <p class="text-white position-relative">Masuk untuk mulai menjelajahi keindahan kain lokal dari Mamasa.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- JS Files -->
  <script src="{{ asset('argon/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('argon/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('argon/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('argon/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script src="{{ asset('argon/assets/js/argon-dashboard.min.js?v=2.1.0') }}"></script>
</body>
</html>

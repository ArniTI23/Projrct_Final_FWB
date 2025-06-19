<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSS Argon -->
  <link href="{{ asset('argon/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('argon/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <link href="{{ asset('argon/assets/css/argon-dashboard.css') }}" rel="stylesheet" />
</head>

<body class="bg-gray-100">
  <main class="main-content mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
              <div class="card z-index-0">
                <div class="card-header text-center pt-4">
                  <h5>Registrasi</h5>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{ route('register.submit') }}">
                    @csrf

                    {{-- Nama --}}
                    <div class="mb-3">
                      <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ old('nama') }}" required autofocus>
                      @error('nama')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>

                    {{-- Kata Sandi --}}
                    <div class="mb-3">
                      <input type="password" name="kata_sandi" class="form-control" placeholder="Kata Sandi" required>
                      @error('kata_sandi')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>

                    {{-- Role --}}
                    <div class="mb-3">
                      <select name="role" class="form-select" required>
                        <option value="" disabled selected>-- Pilih Role --</option>
                        <option value="customer" @selected(old('role') == 'customer')>Customer</option>
                        <option value="kurir" @selected(old('role') == 'kurir')>Kurir</option>
                      </select>
                      @error('role')
                        <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>

                    {{-- Submit --}}
                    <div class="text-center">
                      <button type="submit" class="btn btn-success w-100 my-4 mb-2">Daftar</button>
                    </div>

                    <p class="text-sm mt-3 mb-0 text-center">
                      Sudah punya akun?
                      <a href="{{ route('login') }}" class="text-primary text-gradient font-weight-bold">Masuk</a>
                    </p>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </section>
  </main>

  <!-- Scripts -->
  <script src="{{ asset('argon/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('argon/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('argon/assets/js/argon-dashboard.min.js') }}"></script>
</body>
</html>

@extends('master1')

@section('konten')
<div class="container-fluid py-4">
    <div class="row">
        <!-- Card ucapan -->
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h6 class="text-capitalize">Dashboard Kurir</h6>
                    <p class="text-sm mb-0">
                        <i class="fa fa-user text-info" aria-hidden="true"></i>
                        Selamat datang di halaman dashboard kurir. Silakan cek pengiriman dan tugas Anda hari ini.
                    </p>
                </div>
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card card-plain">
                                <div class="card-body">
                                    <h5 class="font-weight-bolder">Pengiriman Hari Ini</h5>
                                    <h3 class="text-success">8 Paket</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-plain">
                                <div class="card-body">
                                    <h5 class="font-weight-bolder">Selesai</h5>
                                    <h3 class="text-primary">5 Paket</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-plain">
                                <div class="card-body">
                                    <h5 class="font-weight-bolder">Tertunda</h5>
                                    <h3 class="text-danger">3 Paket</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

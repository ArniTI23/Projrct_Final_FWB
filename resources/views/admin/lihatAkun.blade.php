{{-- @extends('master1')
@section('konten')
    <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kata Sandi</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->nama }}</td>
                                <td>*********</td>
                                <td>{{ $user->role }}</td>
                                <td>
                                    <form action="{{ route('admin.reset-password', $user->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        <button class="btn btn-secondary"
                                            onclick="return confirm('Reset password user ini?')">Reset</button>
                                    </form>
                                    <form action="{{ route('admin.delete-user', $user->id) }}" method="post" style="display:inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus user ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
@endsection --}}



@extends('master1')

@section('breadcrumb')
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="#">Admin</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Daftar User</li>
@endsection

@section('konten')
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header pb-0">
        <h6>Daftar User</h6>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Kata Sandi</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($users as $user)
                <tr>
                  <!-- Nama -->
                  <td>
                    <p class="text-sm font-weight-bold mb-0">{{ $user->nama }}</p>
                  </td>

                  <!-- Kata Sandi (disembunyikan) -->
                  <td>
                    <p class="text-sm font-weight-bold mb-0">*********</p>
                  </td>

                  <!-- Role (sekarang teks biasa, bukan badge) -->
                  <td>
                    <p class="text-sm font-weight-bold mb-0">{{ $user->role }}</p>
                  </td>

                  <!-- Aksi -->
                  <td class="align-middle text-center">
                    <div class="d-flex justify-content-center gap-2">

                      <!-- Tombol Reset Password -->
                      <form action="{{ route('admin.reset-password', $user->id) }}" method="POST" onsubmit="return confirm('Reset password user ini?');">
                        @csrf
                        <button class="btn btn-secondary btn-sm" type="submit">Reset</button>
                      </form>

                      <!-- Tombol Hapus (jika bukan admin) -->
                      @if ($user->role !== 'admin')
                        <form action="{{ route('admin.delete-user', $user->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus user ini?');">
                          @csrf
                          <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                      @else
                        <span class="text-muted text-xs">Tidak dapat dihapus</span>
                      @endif

                    </div>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="4" class="text-center text-sm">Belum ada user.</td>
                </tr>
              @endforelse
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


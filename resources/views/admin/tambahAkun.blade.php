@extends('master')
@section('content')
    <form method="POST" action="{{ route('admin.tambah-akun') }}" class="mb-3">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="kata_sandi" class="form-label">Kata Sandi</label>
                        <input type="kata_sandi" name="kata_sandi" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Tambah Sebagai:</label>

                        <select name="role" id="role" class="form-select" required>
                            <option value="customer">Customer</option>
                            <option value="kurir">Kurir</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success" name="add" id="submitAdd">Simpan  </button>
                    <button type="button" class="btn btn-secondary" id="btnCancel">Batal</button>
                </form>
@endsection
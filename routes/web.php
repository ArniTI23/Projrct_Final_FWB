<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KurirController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::middleware('tamu')->group(function () {
    Route::get('/register', [AuthController::class, 'lihatRegister'])->name('register');
    Route::post('/submitregister', [AuthController::class, 'submitRegister'])->name('register.submit');

    Route::get('/login', [AuthController::class, 'lihatLogin'])->name('login');
    Route::post('/submitlogin', [AuthController::class, 'submitLogin'])->name('login.submit');
});
Route::get('/', fn() => view('home'))->name('home');



Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route::middleware(['auth', 'admin'])->group(function () {
//     // Route::get('/admin/dashboard', fn() => view('admin.dashboard'))->name('admin.dashboard');
//     Route::get('/produk', [AdminController::class, 'index'])->name('admin.dashboard');
//     Route::get('/produk/tambah', [AdminController::class, 'tambahProduk'])->name('admin.tambahProduk');
//     Route::post('/produk/simpan', [AdminController::class, 'simpanProduk'])->name('admin.simpanProduk');
//     Route::match(['get', 'post'], '/produk/edit/{id}', [AdminController::class, 'editProduk'])->name('admin.editProduk');
//     Route::post('/produk/hapus/{id}', [AdminController::class, 'hapusProduk'])->name('admin.hapusProduk');
//     Route::get('/admin/transaksi', [AdminController::class, 'semuaTransaksi'])->name('admin.transaksi');
//     Route::get('/admin/view-lihat-akun', [UserController::class, 'viewUser'])->name('admin.lihatAkun');
//     Route::post('/admin/reset-password/{id}', [UserController::class, 'resetPassword'])->name('admin.reset-password');
//     Route::get('/admin/tambah-akun', [UserController::class, 'tambahAkun'])->name('admin.tambah-akun');
//     Route::post('/admin/tambah-akun', [UserController::class, 'addUser'])->name('admin.tambah-akun');
//     Route::post('/admin/delete-user/{id}', [UserController::class, 'deleteUser'])->name('admin.delete-user');

// });
Route::middleware(['auth', 'admin'])->group(function () {
    // Gunakan hanya satu route dashboard admin
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    // Kelola produk
    Route::get('/produk/tambah', [AdminController::class, 'tambahProduk'])->name('admin.tambahProduk');
    Route::post('/produk/simpan', [AdminController::class, 'simpanProduk'])->name('admin.simpanProduk');
    Route::match(['get', 'post'], '/produk/edit/{id}', [AdminController::class, 'editProduk'])->name('admin.editProduk');
    Route::post('/produk/hapus/{id}', [AdminController::class, 'hapusProduk'])->name('admin.hapusProduk');

    // Transaksi dan akun user
    Route::get('/admin/transaksi', [AdminController::class, 'semuaTransaksi'])->name('admin.transaksi');
    Route::get('/admin/view-lihat-akun', [UserController::class, 'viewUser'])->name('admin.lihatAkun');
    Route::post('/admin/reset-password/{id}', [UserController::class, 'resetPassword'])->name('admin.reset-password');
    Route::get('/admin/tambah-akun', [UserController::class, 'tambahAkun'])->name('admin.tambah-akun');
    Route::post('/admin/tambah-akun', [UserController::class, 'addUser'])->name('admin.tambah-akun');
    Route::post('/admin/delete-user/{id}', [UserController::class, 'deleteUser'])->name('admin.delete-user');
});


Route::middleware(['auth', 'customer'])->group(function () {
    // Route::get('/customer/dashboard', fn() => view('customer.dashboard'))->name('customer.dashboard');
    Route::get('/customer/dashboard', [AdminController::class, 'indexCustomer'])->name('customer.dashboard');
    Route::get('/pesan/{produk}', [PesananController::class, 'create'])->name('pesanan.create');
    Route::post('/pesan', [PesananController::class, 'store'])->name('pesanan.store');
    Route::get('/transaksi/saya', [PesananController::class, 'transaksiSaya'])->name('customer.transaksi');
    Route::get('/lihatproduk', [CustomerController::class, 'lihatProduk'])->name('customer.lihatProduk');
    Route::get('/lihatabout', [CustomerController::class, 'lihatabout'])->name('customer.lihatabout');
    Route::get('/lihathome', [CustomerController::class, 'lihathome'])->name('customer.lihathome');
    Route::get('/transaksiSaya', [PesananController::class, 'transaksiSaya'])->name('customer.lihattransaksi');
    // Route::get('/team',fun)
});

Route::middleware(['auth', 'kurir'])->group(function () {
    Route::get('/kurir/dashboard', fn() => view('kurir.dashboard'))->name('kurir.dashboard');
    Route::get('/kurir/transaksi', [KurirController::class, 'index'])->name('kurir.transaksi');
    Route::post('/kurir/transaksi/{pesanan}/selesai', [KurirController::class, 'terima'])->name('kurir.terima');
});
// // Route khusus kurir
// // Route::middleware(['auth', 'role:kurir'])->group(function () {
//     Route::get('/kurir/dashboard', fn() => view('kurir.dashboard'))->name('kurir.dashboard');
//     Route::get('/kurir/pesanan/masuk', [KurirController::class, 'pesananMasuk'])->name('kurir.pesanan.masuk');
//     Route::get('/kurir/pesanan/riwayat', [KurirController::class, 'riwayatPesanan'])->name('kurir.pesanan.riwayat');
// });

// Route::middleware(['auth', 'kurir'])->group(function () {
//     // Dashboard
//     Route::get('/kurir/dashboard', fn() => view('kurir.dashboard'))->name('kurir.dashboard');

//     // Pesanan masuk
// Route::get('/kurir/pesanan/masuk', [KurirController::class, 'index'])->name('kurir.pesanan.masuk');

//     // Terima/Selesaikan pesanan
//     Route::post('/kurir/transaksi/{pesanan}/selesai', [KurirController::class, 'terima'])->name('kurir.terima');

//     // Riwayat pesanan
//     Route::get('/kurir/pesanan/riwayat', [KurirController::class, 'riwayatPesanan'])->name('kurir.pesanan.riwayat');
// });
Route::get('/mas',function () {
    return view('customer.master');
})->name('mas');
<h3 align="center">Mamasa WECRA </h3>

---

<p align="center">
  <img src="https://github.com/user-attachments/assets/6ea20b1c-762f-4fc2-98b8-fb3785782673" alt=" " width="200"/>
</p>

<p align="center">
  <strong>ARNI</strong><br/><br/>
  <strong>D0223536</strong><br/><br/>
  <strong>Framework Web Based</strong><br/><br/>
  <strong>2025</strong>
</p>

---
## Role dan Fitur-Fiturnya
### 1. Admin
- Melihat dan mengelola semua pengguna
- Menghapus akun customer atau kurir jika diperlukan
- Menambahkan, mengedit, dan menghapus produk 
- Melihat semua transaksi dan pesanan yang masuk
- Melihat status pengiriman

### 2. Kurir
- Melihat pesanan yang masuk
- Mengkonfirmasi pesanan yang selesai di antar

### 3. Customer
- Melihat dan mencari produk
- Melakukan pembelian produk 
- Melihat status pengiriman dari pesanan yang telah dilakukan
- Melihat riwayat pembelian pribadi

---

## Tabel-tabel database beserta field dan tipe datanya
### 1. Tabel `users`
| Field       | Tipe Data | Keterangan                                           |
| ----------- | --------- | ---------------------------------------------------- |
| id          | BIGINT    | Primary Key                                          |
| nama        | VARCHAR   | Nama pengguna                                        |
| kata_sandi  | VARCHAR   | Kata sandi (bukan terenkripsi, sebaiknya dienkripsi) |
| role        | ENUM      | customer / admin / kurir                             |
| created_at  | TIMESTAMP | Waktu dibuat                                         |
| updated_at  | TIMESTAMP | Waktu diubah                                         |

---

### 2. Tabel `produks`
| Field        | Tipe Data | Keterangan                                     |
| ------------ | --------- | ---------------------------------------------- |
| id           | BIGINT    | Primary Key                                    |
| nama         | VARCHAR   | Nama produk                                    |
| deskripsi    | TEXT      | Deskripsi produk                               |
| stok         | INTEGER   | Jumlah stok produk tersedia                    |
| harga        | DECIMAL   | Harga satuan produk (maks 10 digit, 2 desimal) |
| foto_produk  | VARCHAR   | Nama file atau path gambar produk              |
| created_at   | TIMESTAMP | Waktu dibuat                                   |
| updated_at   | TIMESTAMP | Waktu diubah                                   |

---

### 3. Tabel `pesanans`
| Field       | Tipe Data | Keterangan                        |
| ----------- | --------- | --------------------------------- |
| id          | BIGINT    | Primary Key                       |
| user_id     | BIGINT    | Foreign Key ke `users.id`         |
| produk_id   | BIGINT    | Foreign Key ke `produks.id`       |
| alamat      | TEXT      | Alamat pengiriman                 |
| status      | ENUM      | Status pesanan: dikirim / selesai |
| kontak      | VARCHAR   | Nomor kontak pelanggan            |
| created_at  | TIMESTAMP | Waktu dibuat                      |
| updated_at  | TIMESTAMP | Waktu diubah                      |

---

### 4. Tabel `transaksi`
| Field           | Tipe Data | Keterangan                            |
| --------------- | --------- | ------------------------------------- |
| id              | BIGINT    | Primary Key                           |
| pesanan_id      | BIGINT    | Foreign Key ke `pesanans.id`          |
| produk_id       | BIGINT    | Foreign Key ke `produks.id`           |
| jumlah          | INTEGER   | Jumlah unit produk yang dibeli        |
| subtotal_harga  | DECIMAL   | Total harga = jumlah × harga per unit |
| created_at      | TIMESTAMP | Waktu dibuat                          |
| updated_at      | TIMESTAMP | Waktu diubah                          |

---

### 5. Tabel `deliveries`
| Field       | Tipe Data | Keterangan                                       |
| ----------- | --------- | ------------------------------------------------ |
| id          | BIGINT    | Primary Key                                      |
| pesanan\_id | BIGINT    | Foreign Key ke tabel `pesanans`                  |
| kurir\_id   | BIGINT    | Foreign Key ke tabel `users` (khusus role kurir) |
| status      | ENUM      | dalam\_perjalanan / terkirim                     |
| created\_at | TIMESTAMP | Waktu dibuat                                     |
| updated\_at | TIMESTAMP | Waktu diubah                                     |

---

## Jenis Relasi dan Tabel yang Berelasi

| Relasi                                   | Jenis Relasi |
| ---------------------------------------- | ------------ |
| `users` → `pesanan`                      | One to Many  |
| `users` → `deliveries` *(sebagai kurir)* | One to Many  |
| `produk` → `transaksi`                   | One to Many  |
| `produk` ↔ `pesanan` *(via transaksi)*   | Many to Many |
| `pesanan` → `transaksi`                  | One to Many  |
| `pesanan` → `delivery`                   | One to One   |
| `pesanan` ↔ `produk` *(via transaksi)*   | Many to Many |
| `transaksi` → `produk`                   | Many to One  |
| `transaksi` → `pesanan`                  | Many to One  |
| `delivery` → `pesanan`                   | Many to One  |
| `delivery` → `users` *(sebagai kurir)*   | Many to One  |

---

# Perpustakaan Mini

Aplikasi CRUD daftar buku dengan Laravel, Blade, dan Tailwind CSS 4.

Nama: Andi Muh. Daffa' Dermawan
NIM : D121241088

## Fitur
- Tambah, lihat, ubah, hapus buku (CRUD)
- Pencarian judul, penulis, dan penerbit
- Validasi form dengan pesan Bahasa Indonesia
- Pagination 5 buku per halaman
- Kolom penerbit
- Tampilan kartu responsif
- Login (tambah, ubah, hapus hanya untuk pengguna yang login)

## Cara menjalankan
```bash
git clone https://github.com/dafwann/tugas-pemrograman-web-2.git
cd tugas-pemrograman-web-2
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate:fresh --seed
npm install
composer run dev
```

Buka http://127.0.0.1:8000

## Akun login
- Email   : admin@example.com
- Password: password

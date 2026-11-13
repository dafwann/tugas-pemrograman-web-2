# Perpustakaan Mini (Laravel 12/13 + Blade + Tailwind 4)

1. composer create-project laravel/laravel daftar-buku
2. cd daftar-buku
3. Salin isi folder ini ke dalam proyek (timpa file yang sama: routes/web.php, DatabaseSeeder.php).
4. Di .env ubah/tambahkan:
   APP_LOCALE=id
   APP_FALLBACK_LOCALE=id
   DB_CONNECTION=sqlite
5. php artisan migrate:fresh --seed
6. npm install
7. composer run dev   (atau: php artisan serve + npm run dev)
8. Buka http://127.0.0.1:8000  -- login: admin@example.com / password

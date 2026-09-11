# 📚 Sistem Peminjaman Perpustakaan

Aplikasi web untuk mengelola proses peminjaman dan pengembalian buku perpustakaan, dibangun menggunakan **Laravel**. Aplikasi ini membantu petugas perpustakaan mengelola data buku, anggota, transaksi peminjaman, serta menghasilkan laporan secara efisien.

## ✨ Fitur

- 🔐 Autentikasi & manajemen hak akses (Admin / Petugas / Anggota)
- 📖 Manajemen data buku (tambah, edit, hapus, kategori, stok)
- 👤 Manajemen data anggota perpustakaan
- 🔄 Peminjaman & pengembalian buku
- ⏰ Notifikasi jatuh tempo & denda keterlambatan
- 🔍 Pencarian & filter buku
- 📊 Laporan peminjaman (harian/bulanan/tahunan)
- 🖨️ Cetak bukti peminjaman / kartu anggota

> Sesuaikan daftar fitur di atas dengan fitur yang benar-benar ada pada aplikasi Anda.

## 🛠️ Teknologi yang Digunakan

- **Backend:** Laravel (PHP)
- **Database:** MySQL / MariaDB
- **Frontend:** Blade, Bootstrap / Tailwind CSS
- **Tools:** Composer, NPM/Vite

## 📋 Prasyarat

Pastikan sistem Anda sudah memiliki:

- PHP >= 8.1
- Composer
- Node.js & NPM
- MySQL / MariaDB
- Web server (Apache/Nginx) atau bisa menggunakan `php artisan serve`

## 🚀 Instalasi

1. **Clone repository**
   ```bash
   git clone https://github.com/username/nama-repo.git
   cd nama-repo
   ```

2. **Install dependency PHP**
   ```bash
   composer install
   ```

3. **Install dependency JavaScript**
   ```bash
   npm install
   ```

4. **Salin file environment**
   ```bash
   cp .env.example .env
   ```

5. **Generate application key**
   ```bash
   php artisan key:generate
   ```

6. **Konfigurasi database**

   Buka file `.env` dan sesuaikan konfigurasi berikut:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database
   DB_USERNAME=root
   DB_PASSWORD=
   ```

7. **Jalankan migrasi dan seeder**
   ```bash
   php artisan migrate --seed
   ```

8. **Buat symbolic link storage** (jika menggunakan upload file/gambar)
   ```bash
   php artisan storage:link
   ```

9. **Compile asset frontend**
   ```bash
   npm run dev
   ```

10. **Jalankan server**
    ```bash
    php artisan serve
    ```

Aplikasi dapat diakses melalui: `http://127.0.0.1:8000`

## 👥 Akun Default (Contoh)

| Role   | Email                                       | Password |
|--------|----------------------------------------------|----------|
| Admin  | admin@perpustakaan.com                        | password |
| Anggota| anggota@perpustakaan.com                       | password |

> Ganti akun default ini setelah instalasi untuk keamanan.

## 📁 Struktur Direktori (Ringkas)

```
├── app/
│   ├── Http/Controllers/   # Controller aplikasi
│   ├── Models/             # Model Eloquent
├── database/
│   ├── migrations/         # Skema database
│   ├── seeders/            # Data awal
├── resources/
│   ├── views/               # Tampilan Blade
├── routes/
│   ├── web.php               # Routing aplikasi
```

## 🤝 Kontribusi

Kontribusi sangat terbuka! Silakan ikuti langkah berikut:

1. Fork repository ini
2. Buat branch fitur baru (`git checkout -b fitur-baru`)
3. Commit perubahan (`git commit -m 'Menambahkan fitur baru'`)
4. Push ke branch (`git push origin fitur-baru`)
5. Buat Pull Request

## 📄 Lisensi

Proyek ini menggunakan lisensi [MIT](LICENSE). Silakan gunakan dan modifikasi sesuai kebutuhan.

## 📧 Kontak

Jika ada pertanyaan atau saran, silakan hubungi:

- Nama: Nama Anda
- Email: email@contoh.com
- GitHub: [@username](https://github.com/username)

---

⭐ Jangan lupa beri **star** jika proyek ini bermanfaat!

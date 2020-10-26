<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Tutorial Github

## Repository Belum Ada Di Komputer

1. Lakukan Clone Repository

```
git clone https://github.com/Harun1804/laravel-api.git
```

2. Masuk ke directory

```
cd laravel-api
```

### Jika Ada Perubahan File

1. Check Terlebih Dahulu File Apa Saja Yang Berubah

```
git status
```

2. Tambahkan Semua File Yang diubah

```
git add .
```

3. Lakukan Commit Untuk Jika Tidak Ada Perubahan

```
git commit -m "Komentar Anda"
```

4. Upload Ke Repository

```
git push origin master
```

## Repository Sudah Ada Di Komputer

1. Masuk Ke Folder Repository Yang Ada Di Komputer Anda
2. Mengambil Data Dari Repository

```
git pull origin master
```

# Tutorial Penggunaan Laravel

1. Install Composer Terlebih Dahulu <br>
[Download disini](https://getcomposer.org/download/)
2. Install Packagenya Terlebih Dahulu

```
composer install
```

3. Copy isi file .env.example

```
cp .env.example .env
```

4. Generate Key Baru

```
php artisan key:generate
```

5. Pada file .env yang telah dibuat, buat database kosong dengan nama **db_api**
6. Kemudian Database Tersebut Atur Di File .env
7. Lakukan Migrasi Database

```
php artisan migrate
```

8. Jalankan aplikasi

```
php artisan serve
```

# Tutrial Penggunaan API
<br>
[Buka Dokumentasi](https://documenter.getpostman.com/view/6505899/TVYF9zS5)

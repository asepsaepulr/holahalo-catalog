<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

### 1. git clone

```bash
$ git clone https://github.com/asepsaepulr/holahalo-catalog.git
$ cd holahalo-catalog
$ composer install
```
### 2. konfigurasi 

Membuat file .env masukan nama database DB_DATABASE=holahalo_catalog.

Menambah kan APP_KEY= dengan kode di bawah.

```bash
$ php artisan key:generate
```
Buatlah Database di Mysql dengan nama 'holahalo_catalog' .
jika sudah membuatnya lakukan migrasi dengan database seeder nya .
**'atau import file sql yang telah saya sediakan dan sudah di isi dengan data'**

### 3. Migrasi

```bash
$ php artisan migrate --seed
```
### 4. Menjalankan Project

```bash
$ php artisan serve
```
**setelah itu buka browser anda dan ketikan di url: https://localhost:8000**
untuk login admin.
e-mail :admin@gmail.com.
pass   :admin123.

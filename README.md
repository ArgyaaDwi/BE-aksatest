## Backend (Laravel API)

Backend aplikasi ini dibangun menggunakan Laravel sebagai RESTful API server yang berjalan secara independen dari frontend. Backend hanya menyediakan API dan tidak melayani rendering view.

---

## 🧰 Tech Stack

- 🐘 PHP 8.2
- 🔥 Laravel 12
- 🗄 MySQL
- 🔐 Sanctum Authentication
- ☁️ Hosting: Shared Hosting (cPanel based)

---

## 🧠 Arsitektur

Backend dirancang sebagai pure API service.

Frontend dan backend berjalan terpisah:

Frontend (Vercel)
->
HTTP Request (Axios)
->
Laravel REST API
->
Database

Pendekatan ini mengikuti konsep loosely coupled system dan memungkinkan pengembangan berbasis microservices.

---

## ⚙️ Installation (Local Development)

```bash
git clone https://github.com/username/backend-repo.git
cd backend-repo
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

## Local Development

Menjalankan:

```bash
php artisan storage:link
```

## Production Hosting Limitation

Backend di-deploy pada shared hosting dengan keterbatasan berikut:

1. Tidak mendukung symbolic link (storage:link)
2. Tidak memiliki akses root/server-level configuration
3. Terbatas pada environment cPanel

Dampak:

1. File upload tetap berhasil disimpan ke storage/app/public
2. Namun tidak bisa diakses melalui /public/storage
3. Fungsi upload tetap berjalan, hanya akses public file yang terbatas

## Authentication

Menggunakan Laravel Sanctum untuk API authentication.
Flow:

1. Login
2. Receive token
3. Token digunakan pada setiap request berikutnya

Backend ini dirancang sebagai RESTful API terpisah yang fleksibel dan scalable secara arsitektur.

Walaupun terdapat keterbatasan pada shared hosting, seluruh fitur sistem berjalan normal pada environment development, dan struktur sistem siap untuk dikembangkan.

# 📝 Laravel Notes API

A simple and RESTful Laravel API for managing notes, using UUID-based identification and versioned under `/api/avi/v1`.

---

## 🚀 Features

- UUID-based note identifiers
- Full CRUD API (Create, Read, Update, Delete)
- Versioned API routes (`/api/avi/v1`)
- Lightweight and easy to extend

---

## 📦 Installation

```bash
git clone https://github.com/michaelninder/laravel-notes-api.git
cd laravel-notes-api
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

## 🌐 API Base URL

```bash
http://localhost:8000/api/avi/v1
```

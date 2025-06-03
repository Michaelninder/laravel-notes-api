# 📝 Laravel Notes API

A simple and RESTful Laravel API for managing notes, using UUID-based identification and versioned under `/api/avi/v1`.

## 🚀 Features

*   UUID-based note identifiers
*   Full CRUD API (Create, Read, Update, Delete)
*   Versioned API routes (`/api/avi/v1`)
*   Lightweight and easy to extend

## 📦 Installation

```
git clone https://github.com/michaelninder/laravel-notes-api.git
cd laravel-notes-api
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

## 🌐 API Base URL

`http://localhost:8000/api/avi/v1`

## 🔧 API Endpoints

| Method | Endpoint | Description |
| --- | --- | --- |
| GET | /notes | Get all notes |
| POST | /notes | Create a new note |
| GET | /notes/{uuid} | Get a specific note |
| PUT | /notes/{uuid} | Update a note |
| DELETE | /notes/{uuid} | Delete a note |

📖 See full [API Documentation →](API_DOC.md)

## 📘 Example Request

```
POST /api/avi/v1/notes
Content-Type: application/json

{
  "title": "My first note",
  "content": "This is the content of my note."
}
```

## 🛠 Tech Stack

*   Laravel 10.x
*   PHP 8.x
*   MySQL or SQLite
*   RESTful best practices

## 🧪 Running Tests

```
php artisan test
```

## 📄 License

This project is open-source and available under the [MIT license](LICENSE).

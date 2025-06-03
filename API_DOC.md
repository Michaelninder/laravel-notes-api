# 🧾 Notes API Documentation

## 📍 Base URL

`/api/avi/v1`

---

## 🔸 Get All Notes

**GET** `/notes`

#### Response:

```
[
  {
    "uuid": "abc123...",
    "title": "My Note",
    "content": "Some content...",
    "created_at": "...",
    "updated_at": "..."
  }
]
```

## 🔸 Create a Note

**POST** `/notes`

#### Body:

```
{
  "title": "New Note",
  "content": "Note content here"
}
```

## 🔸 Get a Single Note

**GET** `/notes/{uuid}`

## 🔸 Update a Note

**PUT** `/notes/{uuid}`

#### Body:

```
{
  "title": "Updated Title",
  "content": "Updated content"
}
```

## 🔸 Delete a Note

**DELETE** `/notes/{uuid}`

## 🧪 Example UUID

`03c4977e-d24e-41e0-9d03-2a4a60e9f04c`

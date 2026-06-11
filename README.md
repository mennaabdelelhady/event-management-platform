# Event Management Platform

A RESTful Event Management Platform built with Laravel 12. This project allows organizers to create and manage events through secure API endpoints while following Laravel best practices.

## Features Implemented

### Authentication & User Management

* Laravel Breeze authentication
* User roles:

  * Admin
  * Organizer
  * Attendee
* User model configuration

### Event Management API

* Create Event
* List Events
* View Single Event
* Update Event
* Delete Event

### Validation

* Form Request validation
* Event creation validation
* Event update validation

### API Resources

* Event API Resource
* Consistent JSON responses

### Database

* MySQL integration
* Event migration
* User migration
* Eloquent relationships

## Tech Stack

* Laravel 12
* PHP 8.2+
* MySQL
* Laravel Breeze
* Laravel Sanctum (API Setup)
* Postman

## Database Structure

### Users Table

| Column     | Type      |
| ---------- | --------- |
| id         | bigint    |
| name       | string    |
| email      | string    |
| password   | string    |
| role       | string    |
| created_at | timestamp |
| updated_at | timestamp |

### Events Table

| Column      | Type            |
| ----------- | --------------- |
| id          | bigint          |
| user_id     | foreign key     |
| title       | string          |
| description | text            |
| location    | string          |
| start_date  | datetime        |
| end_date    | datetime        |
| image       | string nullable |
| status      | enum            |
| created_at  | timestamp       |
| updated_at  | timestamp       |

## API Endpoints

### Events

| Method | Endpoint         | Description       |
| ------ | ---------------- | ----------------- |
| GET    | /api/events      | List all events   |
| GET    | /api/events/{id} | Get event details |
| POST   | /api/events      | Create event      |
| PUT    | /api/events/{id} | Update event      |
| DELETE | /api/events/{id} | Delete event      |

## Sample Request

### Create Event

POST `/api/events`

```json
{
    "title": "Laravel Conference",
    "description": "Laravel Workshop",
    "location": "Cairo",
    "start_date": "2026-07-01 10:00:00",
    "end_date": "2026-07-01 18:00:00"
}
```

## Installation

### Clone Repository

```bash
git clone https://github.com/YOUR_USERNAME/event-management-platform.git
cd event-management-platform
```

### Install Dependencies

```bash
composer install
npm install
```

### Configure Environment

```bash
cp .env.example .env
```

Update database credentials inside `.env`.

### Generate Application Key

```bash
php artisan key:generate
```

### Run Migrations

```bash
php artisan migrate
```

### Start Server

```bash
php artisan serve
```

Application will be available at:

```text
http://127.0.0.1:8000
```

## Project Structure

```text
app/
├── Http/
│   ├── Controllers/
│   │   └── Api/
│   ├── Requests/
│   └── Resources/
├── Models/
│   ├── User.php
│   └── Event.php
└── Policies/

routes/
└── api.php
```

## Current Progress

* [x] Laravel Setup
* [x] GitHub Integration
* [x] Authentication
* [x] User Roles
* [x] Event Migration
* [x] Event Model
* [x] Event CRUD API
* [x] API Resources
* [x] Validation

## Upcoming Features

* Sanctum Authentication
* Authorization Policies
* Event Image Uploads
* Ticket Management
* Ticket Booking
* QR Code Generation
* Notifications
* API Documentation
* Automated Testing

## Author

Menna AbdelElhady

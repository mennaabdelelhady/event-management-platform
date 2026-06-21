# Event Management Platform API

A RESTful Event Management Platform built with Laravel 12.

This project allows organizers to create and manage events, create ticket types, and handle attendee bookings through secure JWT-authenticated API endpoints while following Laravel best practices.

## Features Implemented

### Authentication & Authorization

* JWT Authentication
* User Registration
* User Login
* User Logout
* Authenticated User Profile Endpoint
* Role-Based Users:

  * Admin
  * Organizer
  * Attendee

### Event Management

* Create Event
* List Events
* View Single Event
* Update Event
* Delete Event
* Event Status Management:

  * Draft
  * Published
  * Cancelled

### Ticket Management

* Create Tickets for Events
* List Event Tickets
* Ticket Pricing
* Ticket Quantity Management
* Sold Tickets Tracking

### Booking System

* Book Event Tickets
* Ticket Availability Validation
* Automatic Sold Count Updates
* Booking Records Management
* Database Transaction Support

### Validation

* Form Request Validation
* Event Validation
* Ticket Validation
* Booking Validation

### Authorization

* Event Ownership Policies
* Admin Gate Support
* Protected API Routes

### Security

* JWT Protected Endpoints
* Rate Limiting
* Authorization Policies
* Form Request Validation

### API Resources

* Event Resource
* Consistent JSON Responses

## Tech Stack

* Laravel 12
* PHP 8.2+
* MySQL
* JWT Authentication
* Eloquent ORM
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

### Tickets Table

| Column     | Type        |
| ---------- | ----------- |
| id         | bigint      |
| event_id   | foreign key |
| name       | string      |
| price      | decimal     |
| quantity   | integer     |
| sold       | integer     |
| created_at | timestamp   |
| updated_at | timestamp   |

### Bookings Table

| Column     | Type        |
| ---------- | ----------- |
| id         | bigint      |
| user_id    | foreign key |
| ticket_id  | foreign key |
| quantity   | integer     |
| status     | enum        |
| created_at | timestamp   |
| updated_at | timestamp   |

## Relationships

User

* hasMany Events
* hasMany Bookings

Event

* belongsTo User
* hasMany Tickets

Ticket

* belongsTo Event
* hasMany Bookings

Booking

* belongsTo User
* belongsTo Ticket

## API Endpoints

### Authentication

| Method | Endpoint      |
| ------ | ------------- |
| POST   | /api/register |
| POST   | /api/login    |
| POST   | /api/logout   |
| GET    | /api/me       |

### Events

| Method | Endpoint         |
| ------ | ---------------- |
| GET    | /api/events      |
| GET    | /api/events/{id} |
| POST   | /api/events      |
| PUT    | /api/events/{id} |
| DELETE | /api/events/{id} |

### Tickets

| Method | Endpoint                    |
| ------ | --------------------------- |
| GET    | /api/events/{event}/tickets |
| POST   | /api/events/{event}/tickets |

### Bookings

| Method | Endpoint                   |
| ------ | -------------------------- |
| POST   | /api/tickets/{ticket}/book |

## Advanced Laravel Features Used

* JWT Authentication
* Form Requests
* API Resources
* Eloquent Relationships
* Route Model Binding
* Authorization Policies
* Gates
* Rate Limiting
* Database Transactions
* Middleware Protection

## Installation

### Clone Repository

```bash
git clone https://github.com/mennaabdelelhady/event-management-platform.git
cd event-management-platform
```

### Install Dependencies

```bash
composer install
```

### Configure Environment

```bash
cp .env.example .env
```

Update database credentials inside `.env`.

### Generate Keys

```bash
php artisan key:generate
php artisan jwt:secret
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

## Current Progress

* [x] Laravel Setup
* [x] GitHub Integration
* [x] JWT Authentication
* [x] User Roles
* [x] Event CRUD API
* [x] Event Resources
* [x] Event Validation
* [x] Ticket Management
* [x] Ticket Booking System
* [x] Database Transactions
* [x] Authorization Policies
* [x] Gates
* [x] Rate Limiting

## Upcoming Features

* Event Image Uploads
* Booking Resources
* My Bookings Endpoint
* QR Code Generation
* Email Notifications
* API Documentation
* Automated Testing
* Dashboard Statistics

## Author

**Menna AbdelElhady**

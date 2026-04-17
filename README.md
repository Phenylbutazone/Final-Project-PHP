# Laravel School Management System

## Project Overview

This project is a **framework-based rebuild** of the previous native PHP system using **Laravel 13**.

The goal of this activity is to migrate the existing application into a structured MVC framework while preserving all original business requirements.

The system includes:

* Authentication (Login / Logout)
* Role-Based Access Control
* Subject Management
* Program Management
* User Management
* Password Management

---

# Framework Used

**Laravel 13**

This project follows Laravel MVC structure:

* Routing → `routes/web.php`
* Controllers → `app/Http/Controllers`
* Models → `app/Models`
* Views → `resources/views`
* Middleware → `app/Http/Middleware`

---

# Database Information

Database Name:
```
school
```

Tables Required:
```
users
subject
program
```

---

# User Roles

| Role              | Permissions                          |
| ----------------- | ------------------------------------ |
| Admin             | Full system access + User Management |
| Staff             | Manage Subjects and Programs         |
| Teacher / Student | View modules only                    |
| All Users         | Change own password                  |

---

# A (FOUNDATIONS)

Completed:
* Laravel project setup
* Database connection
* Authentication system
* Username login
* Role middleware
* Dashboard / Home Page
* Role-based navigation
* Protected routes

Foundation system is **complete and working**.

---

# HOW TO RUN THE PROJECT (ANY COMPUTER)

## 1. Requirements

Install first:
* PHP 8.2+
* Composer
* Node.js + NPM
* XAMPP (MySQL + Apache)
* Git

---

## 2. Clone Repository

```
git clone <repository-url>
cd school-system
```

---

## 3. Install Dependencies

```
composer install
npm install
```

---

## 4. Environment Setup

Copy environment file:

```
cp .env.example .env
```

Generate application key:

```
php artisan key:generate
```

---

## 5. Configure Database

Open `.env`

Update:

```
DB_DATABASE=school
DB_USERNAME=root
DB_PASSWORD=
```

Create database in phpMyAdmin:

```
school
```

---

## 6. Run Migrations

```
php artisan migrate
```

(Optional seed if provided later)

```
php artisan db:seed
```

---

## 7. Build Frontend Assets

```
npm run dev
```

---

## 8. Start Laravel Server

```
php artisan serve
```

Open browser:

```
http://127.0.0.1:8000
```

---

# Demo Login

Example Admin Account:

```
Username: admin
Password: admin123
```

*(update if credentials change)*

---

# Important Project Structure

```
app/
 ├── Models/
 ├── Http/
 │    ├── Controllers/
 │    └── Middleware/
resources/views/
routes/web.php
database/migrations/
```

---

# TEAM DEVELOPMENT BREAKDOWN

---

## A — Foundations (DONE)

Responsible for:
* Authentication
* Middleware
* Dashboard
* Navigation
* Database connection
* Base MVC structure

Status: **Completed**

---

## Partner B — Modules (TO IMPLEMENT)

Partner B must implement the system modules using Laravel conventions.

---

### 1. Subject Management

Create:

* SubjectController
* Subject Model
* Views:

  * subject list
  * add subject
  * edit subject

Required Features:

* List subjects
* Add subject
* Edit subject
* Validation:

  * code required
  * title required
  * unit numeric > 0

Access Rules:

* Admin + Staff → Add/Edit
* Teacher/Student → View only

---

### 2. Program Management

Create:

* ProgramController
* Program Model
* Views:

  * program list
  * add program
  * edit program

Validation:

* code required
* title required
* years numeric

Access Rules:

* Admin + Staff → Add/Edit
* Others → View only

---

### 3. User Management (ADMIN ONLY)

Create:

* UserController CRUD

Features:

* List users
* Add user
* Edit user

Rules:

* username unique
* password hashed
* account_type validation

Access:

```
Admin only
```

---

### 4. Change Password Module

All authenticated users must be able to:

* enter current password
* enter new password
* confirm password
* save hashed password

---

# Middleware Rules (IMPORTANT)

Access control must be enforced using:

```
auth middleware
role middleware
```

DO NOT rely only on hidden buttons.

---

# ⚠ DEVELOPMENT RULES

* Do NOT copy old PHP pages directly.
* Use Laravel routing and controllers.
* Follow MVC pattern strictly.
* Use Eloquent ORM.
* Use Blade templates.
* Validate inputs using Laravel validation.

---

# Presentation Requirements

System must demonstrate:

* Login / Logout
* Dashboard
* Subject Management
* Program Management
* User Management
* Change Password
* Role-based access control

Application **must run successfully** during checking.

---

# Presentation Date

**April 22, 2026**

---

# Notes for Teammates

Before coding modules:

1. Pull latest repository
2. Run migrations
3. Confirm login works
4. Confirm dashboard loads
5. Then start module development

---

# END OF README

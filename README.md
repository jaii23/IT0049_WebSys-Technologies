# CodeIgniter POS System

A Point-of-Sale customer and user account management system built with CodeIgniter 4.

## Features

- Customer account listing
- Add and edit customer records
- Customer form validation
- Required full name and valid email
- Unique customer email validation
- User account listing
- Add and edit user records
- Unique username validation
- Required username and full name
- User avatar upload
- JPG, JPEG, and PNG validation
- Maximum avatar size of 2 MB
- Avatar resizing to 300 × 300 pixels
- Placeholder image for users without avatars
- CodeIgniter 4 MVC structure
- Database-backed customer and user records

## Pages and Routes

| Page | Route |
|---|---|
| Home | `/` |
| About | `/about` |
| Customer Accounts | `/customers` |
| Add Customer | `/customers/new` |
| Edit Customer | `/customers/edit/{id}` |
| User Accounts | `/users` |
| Add User | `/users/new` |
| Edit User | `/users/edit/{id}` |

## Technologies Used

- CodeIgniter 4
- PHP 8.2
- MariaDB or MySQL
- XAMPP
- HTML
- CodeIgniter Validation and Image Services

## Database Setup

1. Create a database named `pos_system`.
2. Import the SQL file located at:

```text
database/pos_system.sql
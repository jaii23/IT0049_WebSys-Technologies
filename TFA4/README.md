# CodeIgniter POS System

A Point-of-Sale customer and user account management system built with CodeIgniter 4.

## Features

- User login and password verification
- Hashed password storage using `password_hash()`
- Password verification using `password_verify()`
- Session-based authentication
- Protected customer and user account pages
- Authentication filter for logged-out users
- Logout and session destruction
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

| Page | Route | Access |
|---|---|---|
| Home | `/` | Public |
| About | `/about` | Public |
| Login | `/login` | Public |
| Logout | `/logout` | Authenticated users |
| Customer Accounts | `/customers` | Authenticated users |
| Add Customer | `/customers/new` | Authenticated users |
| Edit Customer | `/customers/edit/{id}` | Authenticated users |
| User Accounts | `/users` | Authenticated users |
| Add User | `/users/new` | Authenticated users |
| Edit User | `/users/edit/{id}` | Authenticated users |

## Technologies Used

- CodeIgniter 4
- PHP 8.2
- MariaDB or MySQL
- XAMPP
- HTML and CSS
- CodeIgniter Validation
- CodeIgniter Image Services
- CodeIgniter Sessions and Filters

## Database Setup

1. Create a database named:

pos_system

2. Open phpMyAdmin.
3. Select the `pos_system` database.
4. Import the latest SQL file:


database/pos_system-updated-TFA4.sql


The database export includes the customer and user tables, user password column, hashed login password, and existing records.

## Installation

1. Clone or download this repository.
2. Place the project inside the XAMPP `htdocs` folder.
3. Open the project folder in VS Code.
4. Configure the database connection in the `.env` file.
5. Make sure Apache and MySQL are running in XAMPP.
6. Start the CodeIgniter development server:

```bash
php spark serve
```

7. Open the application in your browser:


http://localhost:8080


## Login Credentials

Use the following account for testing:

Username: admin
Password: admin123


The password is stored in the database as a secure hash, not as plain text.

## Authentication Workflow

1. The user opens the login page.
2. The user submits a username and password.
3. The system searches for the username in the `users` table.
4. The submitted password is checked using `password_verify()`.
5. A session is created after successful authentication.
6. Protected customer and user pages become accessible.
7. The authentication filter redirects logged-out users to `/login`.
8. The logout action destroys the session and redirects to the login page.

## Testing Checklist

- Login page is accessible.
- Incorrect login credentials are rejected.
- Correct login credentials redirect to the customer page.
- Logged-out users are redirected from protected pages to `/login`.
- Logged-in users can access customer and user account pages.
- Logout destroys the session.
- Protected pages cannot be accessed after logout.
- Customer and user form validation works correctly.
- Avatar upload accepts only JPG, JPEG, and PNG files.
- Avatar upload rejects files larger than 2 MB.

## Project Structure

app/
├── Controllers/
│   ├── Auth.php
│   ├── Customers.php
│   ├── Pages.php
│   └── Users.php
├── Filters/
│   └── AuthFilter.php
├── Models/
│   ├── CustomerModel.php
│   └── UserModel.php
└── Views/
    ├── auth/
    ├── customers/
    ├── pages/
    └── users/

database/
└── pos_system-updated-TFA4.sql
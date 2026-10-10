# Tasks for Today Management System

A task management system developed using CodeIgniter 4 and MySQL.

## Features

- Displays today's tasks on the Welcome page
- Displays all active tasks on the Task List page
- Add new tasks
- Edit existing tasks
- Validate task title, status, and date
- User login and logout
- Password hashing using `password_hash()`
- Password verification using `password_verify()`
- Protected task management actions
- Soft deletion using the `is_archived` field
- Archived tasks are hidden from public pages
- Profile and About pages
- MVC structure using CodeIgniter 4

## Pages and Routes

| Page | Route | Access |
|---|---|---|
| Welcome | `/` | Public |
| Task List | `/tasks` | Public |
| Profile | `/profile` | Public |
| About | `/about` | Public |
| Login | `/login` | Public |
| Logout | `/logout` | Logged-in users |
| Add Task | `/tasks/new` | Logged-in users |
| Edit Task | `/tasks/edit/{id}` | Logged-in users |
| Archive Task | `/tasks/delete/{id}` | Logged-in users |

## Database Tables

The system uses the following tables:

- `tasks`
- `users`

The database export is located at:

```text
database/tasks_system.sql
```

Please use the following credentials to test login:
Username: testuser
Password: admin123
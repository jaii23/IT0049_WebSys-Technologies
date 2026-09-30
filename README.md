# Tasks for Today Management System

A task management system developed using CodeIgniter 4 and MySQL.

## Pages

- Welcome page: `/`
- Full Task List page: `/tasks`
- Profile page: `/profile`
- About page: `/about`

## Features

- Displays only today's tasks on the Welcome page
- Displays all tasks ordered by date
- Displays one demo user's profile
- Uses CodeIgniter Models
- Uses MySQL database records
- Uses Query Builder through `findAll()` and `first()`

## Database Tables

The project uses these tables:

- `tasks`
- `users`

The database export is located at:

```text
database/tasks_system.sql
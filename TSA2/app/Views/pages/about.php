<?php helper('url'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>About</title>
</head>
<body>
    <h1>About the System</h1>

    <nav>
        <a href="<?= site_url('/') ?>">Welcome</a> |
        <a href="<?= site_url('tasks') ?>">Task List</a> |
        <a href="<?= site_url('profile') ?>">Profile</a> |
        <a href="<?= site_url('about') ?>">About</a>
    </nav>

    <h2>Tasks for Today Management System</h2>

    <p>
        This system was developed by <strong>Jirha Abit</strong>
        using CodeIgniter 4 and MySQL.
    </p>

    <p>
        It displays today's tasks, the complete task list, and a demo user's profile.
    </p>
</body>
</html>
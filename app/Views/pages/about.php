<?php helper('url'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>About</title>
</head>
<body>
    <h1>About the POS System</h1>

    <nav>
        <a href="<?= site_url('/') ?>">Home</a> |
        <a href="<?= site_url('about') ?>">About</a> |
        <a href="<?= site_url('customers') ?>">Customers</a> |
        <a href="<?= site_url('users') ?>">Users</a>
    </nav>

    <p>Welcome to about page of the POS System. 
        This project demonstrates routing, controllers, views, and static PHP arrays in CodeIgniter.
    </p>
</body>
</html>
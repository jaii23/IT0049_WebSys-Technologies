<?php helper('url'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>POS System</title>
</head>
<body>
    <h1>Welcome to the POS System</h1>

    <nav>
        <a href="<?= site_url('/') ?>">Home</a> |
        <a href="<?= site_url('about') ?>">About</a> |
        <a href="<?= site_url('customers') ?>">Customers</a> |
        <a href="<?= site_url('users') ?>">Users</a> | 
        <a href="<?= base_url('logout') ?>">  Logout</a>
    </nav>

    <p>This is the landing page of our CodeIgniter POS application.</p>
</body>
</html>
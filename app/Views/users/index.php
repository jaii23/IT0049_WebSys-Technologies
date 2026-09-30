<?php helper('url'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>
    <h1>User Accounts</h1>

    <nav>
        <a href="<?= site_url('/') ?>">Home</a> |
        <a href="<?= site_url('about') ?>">About</a> |
        <a href="<?= site_url('customers') ?>">Customers</a> |
        <a href="<?= site_url('users') ?>">Users</a>
    </nav>

    <br>

    <table border="1" cellpadding="8">
        <tr>
            <th>Username</th>
            <th>Full Name</th>
            <th>Role</th>
        </tr>

        <?php foreach ($users as $user): ?>
            <tr>
                <td><?= esc($user['username']) ?></td>
                <td><?= esc($user['full_name']) ?></td>
                <td><?= esc($user['role']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
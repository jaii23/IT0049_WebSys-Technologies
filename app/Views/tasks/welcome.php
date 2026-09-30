<?php helper('url'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tasks for Today</title>
</head>
<body>
    <h1>Tasks for Today</h1>

    <nav>
        <a href="<?= site_url('/') ?>">Welcome</a> |
        <a href="<?= site_url('tasks') ?>">Task List</a> |
        <a href="<?= site_url('profile') ?>">Profile</a> |
        <a href="<?= site_url('about') ?>">About</a>
    </nav>

    <h2><?= date('F j, Y') ?></h2>

    <?php if (! empty($tasks)): ?>
        <table border="1" cellpadding="8">
            <tr>
                <th>Task</th>
                <th>Status</th>
                <th>Date</th>
            </tr>

            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= esc($task['title']) ?></td>
                    <td><?= esc($task['status']) ?></td>
                    <td><?= esc($task['task_date']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No tasks scheduled for today.</p>
    <?php endif; ?>
</body>
</html>
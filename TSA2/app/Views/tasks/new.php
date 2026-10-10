<?php helper('url'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Task</title>
</head>
<body>

    <h1>Add New Task</h1>

    <nav>
        <a href="<?= site_url('/') ?>">Welcome</a> |
        <a href="<?= site_url('tasks') ?>">Task List</a> |
        <a href="<?= site_url('profile') ?>">Profile</a> |
        <a href="<?= site_url('about') ?>">About</a> |
        <a href="<?= site_url('logout') ?>">Logout</a>
    </nav>

    <br>

    <?php if (session()->getFlashdata('errors')): ?>
        <ul style="color: red;">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="<?= site_url('tasks/create') ?>" method="post">

        <label>Task Title:</label><br>
        <input
            type="text"
            name="title"
            value="<?= old('title') ?>"
            required
        >
        <br><br>

        <label>Status:</label><br>
        <select name="status" required>
            <option value="pending" <?= old('status') === 'pending' ? 'selected' : '' ?>>
                Pending
            </option>

            <option value="in progress" <?= old('status') === 'in progress' ? 'selected' : '' ?>>
                In Progress
            </option>

            <option value="completed" <?= old('status') === 'completed' ? 'selected' : '' ?>>
                Completed
            </option>
        </select>
        <br><br>

        <label>Task Date:</label><br>
        <input
            type="date"
            name="task_date"
            value="<?= old('task_date') ?>"
            required
        >
        <br><br>

        <button type="submit">Save Task</button>
        <a href="<?= site_url('tasks') ?>">Cancel</a>

    </form>

</body>
</html>
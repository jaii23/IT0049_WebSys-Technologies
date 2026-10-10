<?php helper('url'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>All Tasks</title>
</head>
<body>

    <h1>All Tasks</h1>

    <nav>
        <a href="<?= site_url('/') ?>">Welcome</a> |
        <a href="<?= site_url('tasks') ?>">Task List</a> |
        <a href="<?= site_url('profile') ?>">Profile</a> |
        <a href="<?= site_url('about') ?>">About</a>

        <?php if (session()->get('logged_in')): ?>
            | <a href="<?= site_url('logout') ?>">Logout</a>
        <?php else: ?>
            | <a href="<?= site_url('login') ?>">Login</a>
        <?php endif; ?>
    </nav>

    <br>

    <?php if (session()->getFlashdata('message')): ?>
        <p style="color: green;">
            <?= esc(session()->getFlashdata('message')) ?>
        </p>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red;">
            <?= esc(session()->getFlashdata('error')) ?>
        </p>
    <?php endif; ?>

    <?php if (session()->get('logged_in')): ?>
        <p>
            <a href="<?= site_url('tasks/new') ?>">Add New Task</a>
        </p>
    <?php endif; ?>

    <?php if (! empty($tasks)): ?>

        <table border="1" cellpadding="8">
            <tr>
                <th>Task</th>
                <th>Status</th>
                <th>Task Date</th>
                <th>Created At</th>

                <?php if (session()->get('logged_in')): ?>
                    <th>Actions</th>
                <?php endif; ?>
            </tr>

            <?php foreach ($tasks as $task): ?>
                <tr>
                    <td><?= esc($task['title']) ?></td>
                    <td><?= esc($task['status']) ?></td>
                    <td><?= esc($task['task_date']) ?></td>
                    <td><?= esc($task['created_at']) ?></td>

                    <?php if (session()->get('logged_in')): ?>
                        <td>
                            <a href="<?= site_url('tasks/edit/' . $task['id']) ?>">
                                Edit
                            </a>

                            |

                            <a
                                href="<?= site_url('tasks/delete/' . $task['id']) ?>"
                                onclick="return confirm('Archive this task?')"
                            >
                                Archive
                            </a>
                        </td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>

        </table>

    <?php else: ?>
        <p>No active tasks found.</p>
    <?php endif; ?>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Full Task List</title>
</head>
<body>
    <h1>Full Task List</h1>

    <p>
        <a href="/">Tasks for Today</a> |
        <a href="/profile">Profile</a> |
        <a href="/about">About</a>
    </p>

    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Status</th>
            <th>Task Date</th>
        </tr>

        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?= esc($task['id']) ?></td>
                <td><?= esc($task['title']) ?></td>
                <td><?= esc($task['status']) ?></td>
                <td><?= esc($task['task_date']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
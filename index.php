<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple To-Do List</title>
</head>
<body>
    <h2>My To-Do List</h2>

    <!-- Form to add tasks -->
    <form action="process.php" method="post">
        <label for="task">Add Task:</label>
        <input type="text" name="task" required>
        <button type="submit">Add</button>
    </form>

    <!-- Display existing tasks -->
    <?php include 'tasks.php'; ?>
</body>
</html>

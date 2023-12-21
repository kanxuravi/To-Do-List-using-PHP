<?php
// Load tasks from a file or database
$tasks = file_exists('tasks.json') ? json_decode(file_get_contents('tasks.json'), true) : [];

// Add new task
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['task'])) {
    $newTask = htmlspecialchars($_POST['task']);
    $tasks[] = $newTask;

    // Save tasks to a file or database
    file_put_contents('tasks.json', json_encode($tasks));
}

// Display tasks
echo '<ul>';
foreach ($tasks as $task) {
    echo "<li>$task</li>";
}
echo '</ul>';
?>

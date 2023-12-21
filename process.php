<?php
// Redirect to the main page if accessed directly
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit();
}

// Handle form submission (handled in tasks.php)
include 'tasks.php';
header('Location: index.php');
?>

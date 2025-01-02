<?php
// Dummy user data
$valid_username = "user";
$valid_password = "password123";

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $valid_username && $password === $valid_password) {
        header("Location: dashboard.php");
        exit();
    } else {
        $error = urlencode("Invalid username or password.");
        header("Location: index.php?error=$error");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}

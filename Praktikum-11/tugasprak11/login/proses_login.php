<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$file = 'users.json';
$users = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

foreach ($users as $user) {
    if ($user['username'] === $username && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    }
}

header("Location: login.php?error=1");
exit;

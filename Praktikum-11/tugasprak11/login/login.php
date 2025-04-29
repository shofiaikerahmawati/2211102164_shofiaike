<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            background: linear-gradient(to right, #8fd3f4, #84fab0);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        h2 {
            color: #00695c;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        input[type="submit"] {
            background-color: #26a69a;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #00796b;
        }

        a {
            color: #00796b;
            text-decoration: none;
        }

        .error {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login Dulu Gengs!!</h2>
        <form action="proses_login.php" method="POST">
            <input type="text" name="username" placeholder="Username..." required><br>
            <input type="password" name="password" placeholder="Password..." required><br>
            <input type="submit" value="Login">
        </form>
        <p>Belum punya akun? <a href="register.php">Daftar di sini mniezz</a></p>

        <?php if (isset($_GET['error'])): ?>
            <div class="error">SALAH NIH Username atau password nyaa....</div>
        <?php endif; ?>
    </div>
</body>
</html>

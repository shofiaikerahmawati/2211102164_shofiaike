<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #e0c3fc, #8ec5fc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }

        h2 {
            margin-bottom: 10px;
            color: #6a11cb;
        }

        p {
            font-size: 1rem;
            color: #333;
        }

        .logout-button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #ff6f61;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .logout-button:hover {
            background-color: #ff3b2e;
        }

        .emoji {
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hai, <?php echo htmlspecialchars($_SESSION['username']); ?>! 👋</h2>
        <p>Selamat datang di dashboard kamu yang lusyuuu 💖</p>
        <p class="emoji">✨ Kamu berhasil login! YEYYYYY!!!!!</p>

        <a href="logout.php" class="logout-button">Logout</a>
    </div>
</body>
</html>

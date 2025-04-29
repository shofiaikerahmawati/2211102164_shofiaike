<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi</title>
    <style>
        body {
            background: linear-gradient(to right, #f6d365, #fda085);
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
            color: #bf360c;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        input[type="submit"] {
            background-color: #ff7043;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #e64a19;
        }

        a {
            color: #bf360c;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Yuk Daftar 📝</h2>
        <form action="proses_register.php" method="POST">
            <input type="text" name="username" placeholder="Username..." required><br>
            <input type="password" name="password" placeholder="Password..." required><br>
            <input type="submit" value="Daftar">
        </form>
        <p>Sudah punya akun? <a href="login.php">Login aja</a></p>
    </div>
</body>
</html>

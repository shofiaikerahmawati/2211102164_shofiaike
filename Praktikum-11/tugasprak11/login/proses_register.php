<?php
$username = trim($_POST['username']);
$password = $_POST['password'];

$file = 'users.json';
$users = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

// Validasi: hanya cek kalau kosong
if (empty($username) || empty($password)) {
    tampilPesan("Username dan password tidak boleh kosong dong.... ", "register.php");
    exit;
}

// Cek duplikasi username
foreach ($users as $user) {
    if (strtolower($user['username']) === strtolower($username)) {
        tampilPesan("Username sudah digunakan. Coba yang lain mniezz~", "register.php");
        exit;
    }
}

// Simpan data user baru
$users[] = [
    'username' => $username,
    'password' => password_hash($password, PASSWORD_DEFAULT)
];

file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
tampilPesan("Registrasi berhasil! Silakan login lewat tombol di bawah yah mniezz~");


// Fungsi tampil pesan
function tampilPesan($pesan, $kembali = null) {
    echo "
    <html>
    <head>
        <title>Registrasi</title>
        <style>
            body {
                background: linear-gradient(to right, #fbc2eb, #a6c1ee);
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                font-family: 'Segoe UI', sans-serif;
                margin: 0;
            }
            .box {
                background: white;
                padding: 30px;
                border-radius: 15px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                text-align: center;
                width: 350px;
            }
            .box h3 {
                color: #6a11cb;
                margin-bottom: 10px;
            }
            .box a {
                display: inline-block;
                margin-top: 15px;
                padding: 10px 20px;
                background-color: #6a11cb;
                color: white;
                text-decoration: none;
                border-radius: 10px;
                font-weight: bold;
            }
            .box a:hover {
                background-color: #531bb2;
            }
        </style>
    </head>
    <body>
        <div class='box'>
            <h3>$pesan</h3>";
    if ($kembali) {
        echo "<a href='$kembali'>Kembali</a>";
    } else {
        echo "<a href='login.php'>Login Sekarang</a>";
    }
    echo "</div></body></html>";
}

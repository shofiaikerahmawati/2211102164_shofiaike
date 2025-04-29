<?php
// Mengecek apakah data sudah diterima melalui POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];

    // Menentukan status berdasarkan umur
    if ($umur >= 18) {
        $status = "Dewasa";
    } else {
        $status = "Belum Dewasa";
    }

    // Menampilkan hasil
    echo "<h2>Hasil Input:</h2>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Umur: $umur</p>";
    echo "<p>Status: $status</p>";
} else {
    // Jika tidak ada data yang dikirimkan melalui POST
    echo "<p>Form belum di-submit.</p>";
}
?>

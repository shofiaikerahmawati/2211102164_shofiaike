<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Nama & Umur</title>
</head>
<body>
    <h2>Form Input Nama dan Umur</h2>
    <form action="proses_umur.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <label for="umur">Umur:</label>
        <input type="number" id="umur" name="umur" required><br><br>
        
        <input type="submit" value="Kirim">
    </form>
</body>
</html>

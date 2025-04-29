<?php echo "Hello, Shofia"; ?>

<br>
<!-- Variabel -->
<?php $nama = "Mas Kai";
$umur = 31;
echo "Halo, nama saya $nama dan saya berumur $umur tahun.";
?>

<br>
<br>
<br>
<!-- Operator -->
<?php $a = 10;
$b = 5;
echo "<br>";
echo $a + $b . " Ini Penjumlahan"; // Penjumlahan 
echo "<br>";
echo $a - $b . " Ini pengurangan"; // Pengurangan
echo "<br>";
echo $a * $b . " Ini perkalian"; // Perkalian
echo "<br>";
echo $a / $b . " Ini Pembagian"; // Pembagian 
echo "<br>";
echo $a % $b . " Ini Modulus"; // Modulus 
?>

<br>
<br>
<br>
<br>
<br>
<!-- IF-ELSE -->
<?php
$nilai = 80;
if ($nilai >= 75) {
    echo "Lulus";
} else {
    echo "Tidak Lulus";
}
?>

<br>
<br>
<br>
<!-- SWITCH -->
<?php
$hari = "Senin";
 
switch ($hari) {
    case "Senin":
        echo "Hari ini Senin";
        break;
    case "Selasa":
        echo "Hari ini Selasa";
        break;
    default:
        echo "Hari tidak diketahui";
}
?>

<br>
<br>
<br>
<!-- Perulangan For -->
<?php for ($i = 1; $i <= 5; $i++) {
    echo "Angka ke-$i <br>";
}
?>

<br>
<br>
<!-- Perulangan While -->
<?php
$x = 1;
while ($x <= 5) {
    echo "Angka $x <br>";
    $x++;
}
?>

<br>
<br>
<!-- Perulangan Foreach (Untuk Array) -->
<?php
$buah = ["Apel", "Jeruk", "Mangga"];
foreach ($buah as $b) {
    echo "Buah: $b <br>";
}
?>

<br>
<br>
<!-- Perulangan Array -->
<?php $hewan = ["Kucing", "Anjing", "Burung"]; echo $hewan[0]; // Output: Kucing ?>

<br>
<br>
<br>
<!-- Request GET -->
<form method="GET" action="proses.php">
    Nama: <input type="text" name="nama">
    <input type="submit">
</form>


<br>
<br>
<br>
<!-- Request POST -->
<form method="POST" action="post.php"> 
    Nama: <input type="text" name="nama"> 
    <input type="submit"> 
</form>

<!-- Session Menyimpan -->


<!-- Session Mengakses -->

<!-- Cookies Menyimpan -->

<!-- Cookies Mengakses -->

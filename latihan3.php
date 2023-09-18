<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
<?php
$a = "5";
$b = "2.5";
$komentar = "Selamat Datang";
echo ("Nilai variabel a adalah = $a <br>");
// Variabel bertipe integer
echo ("Nilai variabel b adalah = $b <br>");
// Variabel bertipe real
echo ("Nilai variabel komentar adalah = $komentar <br>");
// Variabel bertipe string
$tambah = $a + $b;
// Rumus penjumlahan
$kurang = $a - $b;
// Rumus pengurangan
$kali = $a * $b;
// Rumus perkalian
$bagi = $a / $b;
// Rumus pembagian

echo ("Hasil penjumlahan a dan b adalah = $tambah <br>");
echo ("Hasil pengurangan a dan b adalah = $kurang <br>");
echo ("Hasil perkalian a dan b adalah = $kali <br>");
echo ("Hasil pembagian a dan b adalah = $bagi <br>");
$nama = "POLIBAN";
$garis = "======================================";
echo "<p>";
echo $garis . "<br>";
echo $komentar . " Di Lab " . $nama . "<br>Selamat Belajar Pemrograman Web <br>";
echo $garis . "<br>";
	?>
</body>
</html>
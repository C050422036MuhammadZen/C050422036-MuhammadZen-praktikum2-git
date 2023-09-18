<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
$saldoAwal = 1000000;
$bunga = 0.03;
$bulan = 11;
$saldoAkhir = $saldoAwal * pow(1 + $bunga, $bulan);
// lengkapi pada perhitungan saldo akhir
echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. " . number_format($saldoAkhir, 2, ',', '.') . ",-";
?>
</body>
</html>
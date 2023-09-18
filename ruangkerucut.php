<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Kerucut</title>
</head>
<body>
    <h1>Kalkulator Kerucut</h1>
    <form method="post">
        Jari-jari alas (r): <input type="text" name="jari_jari" required><br><br>
        Tinggi kerucut (h): <input type="text" name="tinggi" required><br><br>
        <input type="submit" value="Hitung">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil nilai jari-jari dan tinggi dari inputan
        $jari_jari = $_POST["jari_jari"];
        $tinggi = $_POST["tinggi"];
        
        // Menghitung luas alas kerucut
        $luas_alas = M_PI * pow($jari_jari, 2);
        
        // Menghitung panjang sisi miring
        $sisi_miring = sqrt(pow($jari_jari, 2) + pow($tinggi, 2));
        
        // Menghitung luas permukaan kerucut
        $luas_permukaan = M_PI * $jari_jari * ($jari_jari + $sisi_miring);
        
        echo "<h2>Hasil Perhitungan</h2>";
        echo "Luas Alas Kerucut = " . number_format($luas_alas, 2, ',', '.') . " satuan luas<br>";
        echo "Luas Permukaan Kerucut = " . number_format($luas_permukaan, 2, ',', '.') . " satuan luas<br>";
    }
    ?>
</body>
</html>
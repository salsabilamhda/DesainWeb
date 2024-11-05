<!DOCTYPE html>
<html>
<head>
    <title>Operasi Matematika</title>
</head>
<body>
    <h1>Operasi Matematika Dua Bilangan</h1>
    <form method="post">
        <label for="bilangan1">Masukkan Bilangan Pertama:</label>
        <input type="number" id="bilangan1" name="bilangan1" required><br><br>

        <label for="bilangan2">Masukkan Bilangan Kedua:</label>
        <input type="number" id="bilangan2" name="bilangan2" required><br><br>

        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan1 = $_POST['bilangan1'];
        $bilangan2 = $_POST['bilangan2'];

        $penjumlahan = $bilangan1 + $bilangan2;
        $pengurangan = $bilangan1 - $bilangan2;
        $perkalian = $bilangan1 * $bilangan2;
        if ($bilangan2 != 0) {
            $pembagian = $bilangan1 / $bilangan2;
        } else {
            $pembagian = "Tidak bisa dibagi dengan nol";
        }

        echo "<h2>Hasil Operasi:</h2>";
        echo "Penjumlahan: $bilangan1 + $bilangan2 = $penjumlahan<br>";
        echo "Pengurangan: $bilangan1 - $bilangan2 = $pengurangan<br>";
        echo "Perkalian: $bilangan1 * $bilangan2 = $perkalian<br>";
        echo "Pembagian: $bilangan1 / $bilangan2 = $pembagian<br>";
    }
    ?>
</body>
</html>

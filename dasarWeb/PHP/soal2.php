<!DOCTYPE html>
<html>
<head>
    <title>Hitung Luas Lingkaran</title>
</head>
<body>
    <h1>Hitung Luas Lingkaran</h1>
    <form method="post">
        <label for="jariJari">Masukkan Jari-jari Lingkaran:</label>
        <input type="number" id="jariJari" name="jariJari" step="0.01" required>
        <input type="submit" value="Hitung">
    </form>

    <?php
    define("PI", 3.14);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jariJari = $_POST['jariJari'];
        $luasLingkaran = PI * $jariJari * $jariJari;
        echo "<h2>Luas lingkaran dengan jari-jari $jariJari adalah: $luasLingkaran</h2>";
    }
    ?>
</body>
</html>


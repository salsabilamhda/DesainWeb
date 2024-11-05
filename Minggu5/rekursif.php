<?php
function tampilkanAngka(int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";

    // Recursively call the function while $indeks is less than or equal to $jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}

tampilkanAngka(20);
?>

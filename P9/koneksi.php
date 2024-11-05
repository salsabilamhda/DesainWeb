<?php
$namaHost = "localhost";
$username = "root";
$password = "";
$dbname = "prakwebdb"; // Pastikan ini nama database yang benar di MySQL

// Membuat koneksi
$connect = mysqli_connect($namaHost, $username, $password, $dbname);

// Cek koneksi
if ($connect) {
    echo "Koneksi dengan MySQL berhasil";
} else {
    echo "Koneksi dengan MySQL gagal: " . mysqli_connect_error();
}
?>

<?php
include "koneksi.php"; // Menghubungkan ke file koneksi database

// Mengambil input username dan password dari form
$username = $_POST['username'];
$password = $_POST['password']; // Mengenkripsi password dengan md5

// Query untuk memeriksa apakah username dan password cocok di database
$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect, $query);
$cek = mysqli_num_rows($result); // Mengecek jumlah baris hasil query

if ($cek) {
    echo "Anda berhasil login. silahkan menuju ";
    echo '<a href="homeAdmin.html">Halaman HOME</a>';
} else {
    echo "Anda gagal login. silahkan ";
    echo '<a href="loginForm.html">Login kembali</a>';
}
mysqli_close($connect); // Menutup koneksi
?>

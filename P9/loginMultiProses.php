<?php
include "koneksi.php"; // Menghubungkan ke file koneksi database

$username = $_POST['username'];
$password = $_POST['password']; // Mengenkripsi password dengan md5

// Query untuk memeriksa username dan password serta level user
$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);

if($row['level'] == 1) {
    echo "Anda berhasil login. silahkan menuju ";
    echo '<a href="homeAdmin.html">Halaman HOME</a>';
} else if($row['level'] == 2) {
    echo "Anda berhasil login. silahkan menuju ";
    echo '<a href="homeGuest.html">Halaman Guest</a>';
} else {
    echo "Anda gagal login. silahkan ";
    echo '<a href="loginForm.html">Login kembali</a>';
}
echo mysqli_error($connect); // Menampilkan pesan error jika ada
?>

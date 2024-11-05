<?php

//kode 1
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 adalah $hasil.<br>";

//kode 2
$benar = true;
$salah = false;
echo "Variabel benar: $benar, Variabel salah: $salah.<br>";


//kode 3
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2023);

echo "Selamat datang di " . NAMA_SITUS . ", situs yang 
didirikan pada tahun " . TAHUN_PENDIRIAN . ".<br>";

//soal no 2

define("PI", 3.14);


echo "Masukkan jari-jari lingkaran: ";
$jari_jari = trim(fgets(STDIN));


$luas_lingkaran = PI * $jari_jari * $jari_jari;


echo "Luas lingkaran dengan jari-jari $jari_jari adalah: $luas_lingkaran \n";
?>


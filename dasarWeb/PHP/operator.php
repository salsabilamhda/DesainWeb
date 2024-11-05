<?php

//kode 1
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Operasi Aritmatika: <br>";
echo "-------------------------<br>";
echo "Penjumlahan ($a + $b) = " . $hasilTambah . "<br>";
echo "Pengurangan ($a - $b) = " . $hasilKurang . "<br>";
echo "Perkalian ($a * $b) = " . $hasilKali . "<br>";
echo "Pembagian ($a / $b) = " . $hasilBagi . "<br>";
echo "Sisa Bagi ($a % $b) = " . $sisaBagi . "<br>";
echo "Pangkat ($a ** $b) = " . $pangkat . "<br>";

//kode 2
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Operasi Perbandingan: <br>";
echo "---------------------------<br>";
echo "Apakah $a sama dengan $b? " . ($hasilSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a tidak sama dengan $b? " . ($hasilTidakSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a lebih kecil dari $b? " . ($hasilLebihKecil ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a lebih besar dari $b? " . ($hasilLebihBesar ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a lebih kecil atau sama dengan $b? " . ($hasilLebihKecilSama ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a lebih besar atau sama dengan $b? " . ($hasilLebihBesarSama ? "Ya" : "Tidak") . "<br>";

//kode 3
$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil Operasi Logika: <br>";
echo "---------------------------<br>";
echo "Apakah $a AND $b? " . ($hasilAnd ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a OR $b? " . ($hasilOr ? "Ya" : "Tidak") . "<br>";
echo "NOT $a: " . ($hasilNotA ? "Ya" : "Tidak") . "<br>";
echo "NOT $b: " . ($hasilNotB ? "Ya" : "Tidak") . "<br>";

//kode 4
$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;


echo "Hasil dari a += b: " . $a . "<br>";

echo "Hasil dari a -= b: " . $a . "<br>";

echo "Hasil dari a *= b: " . $a . "<br>";

echo "Hasil dari a /= b: " . $a . "<br>";

echo "Hasil dari a %= b: " . $a . "<br>";


//kode 5
$hasilIdentik = $a == $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Operasi Perbandingan Identitas: <br>";
echo "--------------------------------------<br>";
echo "Apakah $a sama dengan $b? " . ($hasilIdentik ? "Ya" : "Tidak") . "<br>";
echo "Apakah $a tidak identik dengan $b? " . ($hasilTidakIdentik ? "Ya" : "Tidak") . "<br>";
echo "--------------------------------------<br>";

//soal no 9

$totalKursi = 50;
$kursiDitempati = 28;
$kursiKosong = $totalKursi - $kursiDitempati;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Total kursi: $totalKursi<br>";
echo "Kursi yang telah ditempati: $kursiDitempati<br>";
echo "Kursi yang masih kosong: $kursiKosong<br>";
echo "Persentase kursi yang masih kosong: " . round($persentaseKosong, 2) . "%<br>";

//soal no 10

?>




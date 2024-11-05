<?php 

//kode 1
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70){
    echo "Nilai huruf: D";
}

//kode 2
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget){
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "<br>Atlet tersebut memerlukan $hari untuk mencapai jarak 500 kilometer";
echo "<br>Jarak yang harus dicapai: " . $jarakTarget . " km";
echo "<br>Peningkatan harian: " . $peningkatanHarian . " km/hari";


//kode 3
$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
}

echo "<br>Jumlah lahan: " . $jumlahLahan . "<br>";
echo "Tanaman per lahan: " . $tanamanPerLahan . "<br>";
echo "Buah per tanaman: " . $buahPerTanaman . "<br>";
echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah<br>";

//kode 4
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}

echo "<br>Skor ujian: <br>";
foreach ($skorUjian as $index => $skor) {
    echo "Ujian " . ($index + 1) . ": " . $skor . "<br>";
}

echo "<br>Total skor ujian adalah: $totalSkor<br>";

//kode 5
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

//soal no 16
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);
$nilaiSiswaTengah = array_slice($nilaiSiswa, 2, -2); 
$totalNilai = array_sum($nilaiSiswaTengah);
$rataRata = $totalNilai / count($nilaiSiswaTengah);

echo "Nilai yang digunakan: " . implode(", ", $nilaiSiswaTengah) . "<br>";
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: $totalNilai<br>";
echo "Rata-rata nilai: $rataRata<br>";


//soal 17
$hargaProduk = 120000;
$diskon = 0.2; 

echo "Harga sebelum diskon: Rp " . number_format($hargaProduk, 2, ',', '.') . "<br>";

if ($hargaProduk > 100000) {
    $hargaDiskon = $hargaProduk * $diskon;
    $hargaSetelahDiskon = $hargaProduk - $hargaDiskon;
    echo "Harga setelah diskon: Rp " . number_format($hargaSetelahDiskon, 2, ',', '.') . "<br>";
} else {
    echo "Harga tanpa diskon: Rp " . number_format($hargaProduk, 2, ',', '.') . "<br>";
}

//soal no 18
$poin = 550; 
$hadiahTambahan = ($poin > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: $poin <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";



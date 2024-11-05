<?php
$siswa = [
    [
        'nama' => 'Ali',
        'kursus' => ['Matematika', 'Fisika']
    ],
    [
        'nama' => 'Budi',
        'kursus' => ['Kimia']
    ],
    [
        'nama' => 'Cindy',
        'kursus' => ['Biologi', 'Matematika']
    ]
];

function tampilkanDaftarSiswa($siswa) {
    echo "Daftar Siswa dan Kursus yang Diambil: <br>";
    echo "---------------------<br>";
    foreach ($siswa as $s) {
        echo "Nama: " . $s['nama'] . "<br>";
        echo "Kursus: " . implode(", ", $s['kursus']) . "<br>";
        echo "---------------------<br>";
    }
    echo "<br>"; 
}

function tambahSiswa(&$siswa, $nama, $kursus) {
    $siswa[] = [
        'nama' => $nama,
        'kursus' => $kursus
    ];
}

function tambahKursus(&$siswa, $nama, $kursusBaru) {
    foreach ($siswa as &$s) {
        if ($s['nama'] === $nama) {
            $s['kursus'][] = $kursusBaru;
            return;
        }
    }
    echo "Siswa dengan nama $nama tidak ditemukan.<br>";
}

tampilkanDaftarSiswa($siswa);

tambahSiswa($siswa, 'Diana', ['Sejarah']);
tambahKursus($siswa, 'Ali', 'Geografi');

echo "Data setelah penambahan: <br>";
echo "---------------------<br>";
tampilkanDaftarSiswa($siswa);
?>

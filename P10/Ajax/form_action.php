<?php
session_start();
include 'koneksi.php';
include 'csrf.php';

$id = stripslashes(strip_tags(htmlspecialchars($_POST['id'], ENT_QUOTES)));
$nama = stripslashes(strip_tags(htmlspecialchars($_POST['nama'], ENT_QUOTES)));
$jenis_kelamin = stripslashes(strip_tags(htmlspecialchars($_POST['jenis_kelamin'], ENT_QUOTES)));
$alamat = stripslashes(strip_tags(htmlspecialchars($_POST['alamat'], ENT_QUOTES)));
$no_tlp = stripslashes(strip_tags(htmlspecialchars($_POST['no_tlp'], ENT_QUOTES)));

if ($id == "") {
    $query = "INSERT into anggota (nama, jenis_kelamin, alamat, no_tlp) VALUES (?, ?, ?, ?)";
    $sql = $db1->prepare($query);
    $sql->bind_param("ssss", $nama, $jenis_kelamin, $alamat, $no_tlp);
    $sql->execute();
} else {
    $query = "UPDATE anggota SET nama=?, jenis_kelamin=?, alamat=?, no_tlp=? WHERE id=?";
    $sql = $db1->prepare($query);
    $sql->bind_param("ssssi", $nama, $jenis_kelamin, $alamat, $no_tlp, $id);
    $sql->execute();
}

echo json_encode(['success' => 'Sukses']);

$db1->close();
?>

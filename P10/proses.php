<?php
include('koneksi.php');
$aksi = $_GET['aksi'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];

if($aksi == "tambah") {
    $query = "UPDATE anggota SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_tlp='$no_tlp' WHERE id='$id'";
echo $query;
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($koneksi);
    }
} elseif($aksi == 'ubah'){
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $no_tlp = $_POST['no_tlp'];

        $query = "UPDATE anggota SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_tlp='$no_tlp' WHERE id='$id'";
        if (mysqli_query($koneksi, $query)) {
            header('Location: index.php');
            exit();
        } else {
            echo "Gagal mengupdate data: " . mysqli_error($koneksi);
        }
    } else {
        echo "ID tidak valid.";
    }
}elseif($aksi == 'hapus'){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "DELETE FROM anggota WHERE id = '$id'";
        if (mysqli_query($koneksi, $query)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Gagal menghapus data: " . mysqli_error($koneksi);
        }
    } else {
        echo "ID tidak valid.";
    }
} else {
    header("Location: index.php");
}



mysqli_close($koneksi);
?>

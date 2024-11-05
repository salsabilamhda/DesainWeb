<?php
$conn = mysqli_connect("localhost", "root", "", "prakwebdb");

$insertData = "INSERT INTO user (id, username, password) VALUES (1,'admin', '123')";

if (mysqli_query($conn, $insertData)) {
    echo "Data berhasil dimasukkan.";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

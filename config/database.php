<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_dua");

if ($koneksi->connect_error) {
    die("Koneksi database gagal: " . $koneksi->connect_error);
}
?>
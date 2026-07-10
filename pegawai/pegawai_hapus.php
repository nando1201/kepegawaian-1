<?php
include '../config/database.php';

// menyimpan data id kedalam variabel
$nip   = $_GET['nip'];

// query SQL untuk delete data
$query="DELETE from pegawai where nip='$nip'";
mysqli_query($koneksi, $query);

// mengalihkan ke halaman tabel
header("location:../index.php");
?>
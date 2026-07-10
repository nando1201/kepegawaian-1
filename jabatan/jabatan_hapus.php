<?php
include '../config/database.php';

// menyimpan data id kedalam variabel
$kodejabatan  = $_GET['kodejabatan'];

// query SQL untuk delete data
$query="DELETE from jabatan where kodejabatan='$kodejabatan'";
mysqli_query($koneksi, $query);

// mengalihkan ke halaman tabel
header("location:../index.php");
?>
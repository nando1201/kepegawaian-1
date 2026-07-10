<?php
include '../config/database.php';

// menyimpan data id kedalam variabel
$idjp   = $_GET['idjp'];

// query SQL untuk delete data
$query="DELETE from jabatanpegawai where idjp='$idjp'";
mysqli_query($koneksi, $query);

// mengalihkan ke halaman tabel
header("location:../index.php");
?>  
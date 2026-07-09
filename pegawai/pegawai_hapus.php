<?php 
include '../config/database.php';

$nip = $_GET['nip'];
$sql = "DELETE FROM pegawai WHERE nip='$nip'";
mysqli_query($koneksi, $sql);
header("location:../index.php");
?>
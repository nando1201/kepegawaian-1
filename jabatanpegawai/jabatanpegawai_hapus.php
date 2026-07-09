<?php 
include '../config/database.php';

$idjp = $_GET['idjp'];
$sql = "DELETE FROM jabatanpegawai WHERE idjp='$idjp'";
mysqli_query($koneksi, $sql);
header("location:jabatanpegawai.php");
?>
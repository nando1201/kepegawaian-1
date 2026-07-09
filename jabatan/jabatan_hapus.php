<?php 
include '../config/database.php';

$kodejabatan = $_GET['kodejabatan'];
$sql = "DELETE FROM jabatan WHERE kodejabatan='$kodejabatan'";
mysqli_query($koneksi, $sql);
header("location:jabatan.php");
?>
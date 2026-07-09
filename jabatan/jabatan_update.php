<?php 
require("../config/database.php");

$kodejabatan = $_POST['kodejabatanawal'];
$namajabatan = $_POST['namajabatan'];
$level = $_POST['level'];
$gaji = $_POST['gaji'];


$sql = "UPDATE jabatan SET namajabatan='$namajabatan', level='$level', gaji='$gaji' WHERE kodejabatan='$kodejabatan'";
mysqli_query($koneksi, $sql);

echo "<script type='text/javascript'>
alert('Data dengan Kode Jabatan $kodejabatan telah berhasil di update');
document.location='jabatan.php';
</script>";
?>
<?php 
require("../config/database.php");

$idjp = $_POST['idjp'];
$nip = $_POST['nip'];
$kodejabatan = $_POST['kodejabatan'];
$status = $_POST['status'];
$periode = $_POST['periode'];

$sql = "UPDATE jabatanpegawai SET idjp='$idjp', nip='$nip', kodejabatan='$kodejabatan', status='$status', periode='$periode' WHERE idjp='$idjp'";
mysqli_query($koneksi, $sql);


echo "<script type='text/javascript'>
alert('Data dengan Kode Jabatan $kodejabatan telah berhasil di update');
document.location='jabatanpegawai.php';
</script>";
?>
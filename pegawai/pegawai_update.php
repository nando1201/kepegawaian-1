<?php 
require("../config/database.php");

$nip = $_POST['nipawal'];
$nipbaru = $_POST['nip'];
$nama = $_POST['namalengkap'];
$jk = $_POST['jk'];
$tanggallahir = $_POST['tanggallahir'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];

$sql = "UPDATE pegawai SET nip='$nipbaru', namalengkap='$nama', jeniskelamin='$jk',
 tanggallahir='$tanggallahir', alamat='$alamat', nohp='$nohp', email='$email' WHERE nip='$nip'";
 mysqli_query($koneksi, $sql);

echo "<script type='text/javascript'>
alert('Data dengan NIP $nip atas nama $nama telah berhasil di update');
document.location='../index.php';
</script>";
?>
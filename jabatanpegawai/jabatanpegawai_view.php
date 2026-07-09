<html>
    <head>
        <title>Lihat Jabatan Pegawai</title>
    </head>
    <body>
        <center>
        <h1>Lihat Data Jabatan Pegawai</h1>
        <hr>
        <?php 
          require '../config/database.php';
          $idjp = $_GET['idjp'];
          $sql = "SELECT * FROM jabatanpegawai WHERE idjp = '$idjp'";
          $query = mysqli_query($koneksi, $sql);
          $row = mysqli_fetch_array($query);

          function active_radio_button($value, $input){
            return $value == $input ? 'checked' : '';
          }

        ?>

        <form name="fviewjabatanpegawai" action="jabatanpegawai_update.php" method="post">
            
            <table align="center">
                <tr>
                    <td>ID Jabatan Pegawai</td>
                    <td> : <?php echo $row['idjp']; ?></td>
                </tr>
                <tr>
                    <td>NIP</td>
                    <td> : <?php echo $row['nip']; ?></td>
                </tr>
                <tr>
                    <td>Kode Jabatan</td>
                    <td> : <?php echo $row['kodejabatan']; ?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td> : <?php echo $row['status']; ?></td>
                </tr>
                <tr>
                    <td>Periode</td>
                    <td> : <?php echo $row['periode']; ?></td>
                </tr>
            </table>
            <hr>
            &nbsp; <a href="jabatanpegawai.php">Kembali</a>
        </form>
        </center>
    </body>
</html>
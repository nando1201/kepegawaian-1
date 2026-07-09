<html>
    <head>
        <title>Lihat Pegawai</title>
    </head>
    <body>
        <center>
        <h1>Lihat Data Pegawai</h1>
        <hr>
        <?php 
          require '../config/database.php';
          $nip = $_GET['nip'];
          $sql = "SELECT * FROM pegawai WHERE nip = '$nip'";
          $query = mysqli_query($koneksi, $sql);
          $row = mysqli_fetch_array($query);

          function active_radio_button($value, $input){
            return $value == $input ? 'checked' : '';
          }

        ?>

        <form name="fviewpegawai" action="pegawai_update.php" method="post">
            <input type="hidden" name="nipawal" value="<?php echo $row['nip']; ?>" />
            <table align="center">
                <tr>
                    <td>NIP</td>
                    <td> : <?php echo $row['nip']; ?></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td> : <?php echo $row['namalengkap']; ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td> :
                        <?php echo active_radio_button($row['jeniskelamin'], 1); ?>Laki-laki
                        <?php echo active_radio_button($row['jeniskelamin'], 2); ?>Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td> : <?php echo $row['tanggallahir']; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td> : <?php echo $row['alamat']; ?></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td> : <?php echo $row['nohp']; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td> : <?php echo $row['email']; ?></td>
                </tr>
            </table>
            <hr>
            &nbsp; <a href="../index.php">Kembali</a>
        </form>
        </center>
    </body>
</html>
<html>
    <head>
        <title>Lihat Jabatan</title>
    </head>
    <body>
        <center>
        <h1>Lihat Data Jabatan</h1>
        <hr>
        <?php 
          require '../config/database.php';
          $kodejabatan = $_GET['kodejabatan'];
          $sql = "SELECT * FROM jabatan WHERE kodejabatan = '$kodejabatan'";
          $query = mysqli_query($koneksi, $sql);
          $row = mysqli_fetch_array($query);

          function active_radio_button($value, $input){
            return $value == $input ? 'checked' : '';
          }

        ?>

        <form name="fviewjabatan" action="jabatan_update.php" method="post">
            
            <table align="center">
                <tr>
                    <td>Kode Jabatan</td>
                    <td> : <?php echo $row['kodejabatan']; ?></td>
                </tr>
                <tr>
                    <td>Nama Jabatan</td>
                    <td> : <?php echo $row['namajabatan']; ?></td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td> : <?php echo $row['level']; ?></td>
                </tr>
                <tr>
                    <td>Gaji</td>
                    <td> : <?php echo $row['gaji']; ?></td>
                </tr>
            </table>
            <hr>
            &nbsp; <a href="jabatan.php">Kembali</a>
        </form>
        </center>
    </body>
</html>
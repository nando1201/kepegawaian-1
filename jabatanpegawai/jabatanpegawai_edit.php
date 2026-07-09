<html>
    <head>
        <title>Edit Data Jabatan Pegawai</title>
    </head>
    <body align="center">
        <h1>Edit Data Jabatan Pegawai</h1>
        <hr>

         <?php
        require("../config/database.php");
        $idjp = $_GET['idjp'];
        $sql = "SELECT * FROM jabatanpegawai WHERE idjp='$idjp'";
        $query = mysqli_query($koneksi, $sql);
        $row = mysqli_fetch_assoc($query);

        function active_radio($value, $input){
            $result = $value==$input?'checked':'';
            return $result;
        }

        ?>

        <form name="feditjabatanpegawai" action="jabatanpegawai_update.php" method="post">
            <input type="hidden" name="idjp" value="<?php echo $row['idjp']; ?>">
            <table align="center">
                <tr>
                    <td>ID Jabatan Pegawai</td>
                    <td>: <?php echo $row['idjp']; ?></td>
                    <input type="hidden" name="idjp" value="<?php echo $row['idjp']; ?>">
                </tr>
                <tr>
                    <td>NIP</td>
                    <td>: <?php echo $row['nip']; ?></td>
                    <input type="hidden" name="nip" value="<?php echo $row['nip']; ?>">
                </tr>
                <tr>
                    <td>Kode Jabatan</td>
                    <td>: <input name="kodejabatan" size="20" value="<?php echo $row['kodejabatan']; ?>" ></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:  <input  type="radio" name="status" value="1" <?php echo active_radio('1', $row['status']); ?> > 1 
                            <input type="radio" name="status" value="0" <?php echo active_radio('0', $row['status']); ?> > 0 </td>
                        
                </tr>
                <tr>
                    <td>Periode</td>
                    <td>: <input name="periode" size="20" value="<?php echo $row['periode']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="simpan" value="update">
                        <input type="reset" name="batal" value="Reset">
                        &nbsp; <a href="jabatanpegawai.php">Kembali</a>
                    </td>
                </tr>
            </table>
                 <hr>
        </form>        
    </body>
</html>
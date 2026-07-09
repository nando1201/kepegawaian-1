<html>
    <head>
        <title>Edit Data pegawai</title>
    </head>
    <body align="center">
        <h1>Edit Data pegawai</h1>
        <hr>

         <?php
        require("../config/database.php");
        $nip = $_GET['nip'];
        $sql = "SELECT * FROM pegawai WHERE nip='$nip'";
        $query = mysqli_query($koneksi, $sql);
        $row = mysqli_fetch_assoc($query);

        function active_radio($value, $input){
            $result = $value==$input?'checked':'';
            return $result;
        }

        ?>

        <form name="feditpegawai" action="pegawai_update.php" method="post">
            <input type="hidden" name="nipawal" value="<?php echo $nip; ?>">
            <table align="center">
                <tr>
                    <tr>
                     <td>NIP</td>
                     <td>: <?php echo $row['nip']; ?></td>
                    </tr>
                    <input type="hidden" name="nip" value="<?php echo $row['nip']; ?>">
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: <input name="namalengkap" size="50" value="<?php echo $row['namalengkap']; ?>" ></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: <input type="radio" name="jk" value="L" <?php echo active_radio('L', $row['jeniskelamin']); ?>>Laki-laki
                        <input type="radio" name="jk" value="P" <?php echo active_radio('P', $row['jeniskelamin']); ?>>Perempuan</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>: <input name="tanggallahir" type="date" name="tanggallahir" value="<?php echo $row['tanggallahir']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <input name="alamat" size="50" value="<?php echo $row['alamat']; ?>" ></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>: <input name="nohp" size="15" value="<?php echo $row['nohp']; ?>"></td>
                </tr>
                <tr> 
                    <td>Email </td>
                    <td>: <input name="email" type="email" size="30" value="<?php echo $row['email']; ?>"></td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="simpan" value="update">
                        <input type="reset" name="batal" value="Reset">
                        &nbsp; <a href="../index.php">Kembali</a>
                    </td>
                </tr>
            </table>
                 <hr>
        </form>        
    </body>
</html>
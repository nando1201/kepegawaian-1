<html>
    <head>
        <title>Edit Data Jabatan</title>
    </head>
    <body align="center">
        <h1>Edit Data Jabatan</h1>
        <hr>

         <?php
        require("../config/database.php");
        $kodejabatan = $_GET['kodejabatan'];
        $sql = "SELECT * FROM jabatan WHERE kodejabatan='$kodejabatan'";
        $query = mysqli_query($koneksi, $sql);
        $row = mysqli_fetch_assoc($query);

        function active_radio($value, $input){
            $result = $value==$input?'checked':'';
            return $result;
        }

        ?>

        <form name="feditjabatan" action="jabatan_update.php" method="post">
            <input type="hidden" name="kodejabatanawal" value="<?php echo $kodejabatan; ?>">
            <table align="center">
                <tr>
                    <tr>
                     <td>Kode Jabatan</td>
                     <td>: <?php echo $row['kodejabatan']; ?></td>
                    </tr>
                    <input type="hidden" name="kodejabatan" value="<?php echo $row['kodejabatan']; ?>">
                </tr>
                <tr>
                    <td>Nama Jabatan</td>
                    <td>: <input name="namajabatan" size="50" value="<?php echo $row['namajabatan']; ?>" ></td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>: <input  name="level" value="1" <?php echo active_radio('1', $row['level']); ?>
                        
                </tr>
                <tr>
                    <td>Gaji</td>
                    <td>: <input name="gaji" size="20" value="<?php echo $row['gaji']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="simpan" value="update">
                        <input type="reset" name="batal" value="Reset">
                        &nbsp; <a href="jabatan.php">Kembali</a>
                    </td>
                </tr>
            </table>
                 <hr>
        </form>        
    </body>
</html>
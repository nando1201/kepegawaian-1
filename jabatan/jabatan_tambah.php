<html>
    <head>
        <title>Tambah Jabatan</title>
    </head>
    <body align="center">
        <h1>Input Data Jabatan</h1>
        <hr>
        <form name="ftambahjabatan" action="jabatan_simpan.php" method="post">
            <table align="center">
                <tr>
                    <td>Kode Jabatan</td>
                    <td>: <input name="kodejabatan" size="15" maxlength="10" placeholder="Kode Jabatan"></td></td>
                </tr>
                <tr>
                    <td>Nama Jabatan</td>
                    <td>: <input name="namajabatan" size="50" placeholder="Nama Jabatan"></td>
                </tr>
                <tr>
                    <td>Level</td>
                    <td>: <input name="level" size="10" placeholder="Level"></td>
                </tr>
                <tr>
                    <td>Gaji</td>
                    <td>: <input name="gaji" size="20" placeholder="Gaji"></td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="simpan" value="Simpan">
                        <input type="reset" name="batal" value="Reset">
                        &nbsp; <a href="jabatan.php">Kembali</a>
                    </td>
                </tr>
            </table>
                 <hr>
        </form>        
    </body>
</html>
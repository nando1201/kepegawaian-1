<html>
    <head>
        <title>Tambah Jabatan Pegawai</title>
    </head>
    <body align="center">
        <h1>Input Data Jabatan Pegawai</h1>
        <hr>
        <form name="ftambahjabatanpegawai" action="jabatanpegawai_simpan.php" method="post">
            <table align="center">
                <tr>
                    <td>ID Jabatan Pegawai</td>
                    <td>: <input name="idjp" size="15" maxlength="10" placeholder="ID Jabatan Pegawai"></td>
                </tr>
                <tr>
                    <td>NIP</td>
                    <td>: <input name="nip" size="15" maxlength="10" placeholder="NIP"></td>
                </tr>
                <tr>
                    <td>Kode Jabatan</td>
                    <td>: <input name="kodejabatan" size="10" placeholder="Kode Jabatan"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>: <input name="status" size="20" placeholder="Status"></td>
                </tr>
                <tr>
                    <td>Periode</td>
                    <td>: <input name="periode" size="20" placeholder="Periode"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="simpan" value="Simpan">
                        <input type="reset" name="batal" value="Reset">
                        &nbsp; <a href="jabatanpegawai.php">Kembali</a>
                    </td>
                </tr>
            </table>
                 <hr>
        </form>        
    </body>
</html>
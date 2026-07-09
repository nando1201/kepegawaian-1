<html>
    <head>
        <title>Tambah pegawai</title>
    </head>
    <body align="center">
        <h1>Input Data pegawai</h1>
        <hr>
        <form name="ftambahpegawai" action="pegawai_simpan.php" method="post">
            <table align="center">
                <tr>
                    <td>NIP</td>
                    <td>: <input name="nip" size="15" maxlength="10" placeholder="NIP"></td></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>: <input name="nama" size="50" placeholder="Nama Lengkap"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>: <input type="radio" name="jk" value="L">Laki-laki
                        <input type="radio" name="jk" value="P">Perempuan</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>: <input name="tanggallahir" type="date" name="tanggallahir"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: <input name="alamat" size="50"  placeholder="Alamat"></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>: <input name="nohp" size="15"  placeholder="No. HP"></td>
                </tr>
                <tr> 
                    <td>Email </td>
                    <td>: <input name="email" type="email" size="30"  placeholder="Email"></td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="simpan" value="Simpan">
                        <input type="reset" name="batal" value="Reset">
                        &nbsp; <a href="index.php">Kembali</a>
                    </td>
                </tr>
            </table>
                 <hr>
        </form>        
    </body>
</html>
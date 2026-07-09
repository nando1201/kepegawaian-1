<html>
    <center>
        <font size=6>
            Informasi Data Pegawai
        </font>
        <hr width=320>
        <table>
            <?php
            
            require("../config/database.php");

            $nip = $_POST['nip'];
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $tanggallahir = $_POST['tanggallahir'];
            $alamat = $_POST['alamat'];
            $nohp = $_POST['nohp'];
            $email = $_POST['email'];

            echo "<tr><td>NIP</td><td>: $nip</td></tr>";
            echo "<tr><td>Nama Lengkap</td><td>: $nama</td></tr>";
            echo "<tr><td>Jenis Kelamin</td><td>: $jk</td></tr>";
            echo "<tr><td>Tanggal Lahir</td><td>: $tanggallahir</td></tr>";
            echo "<tr><td>Alamat</td><td>: $alamat</td></tr>";
            echo "<tr><td>No HP</td><td>: $nohp</td></tr>";
            echo "<tr><td>Email</td><td>: $email</td></tr>";
            echo "</table>";
            echo "<hr width=320>";

            if ($nip!='')
                {
                    $sql = "insert into pegawai values ('$nip', '$nama', '$jk', '$tanggallahir', '$alamat', '$nohp', '$email')";
                    $hasil = mysqli_query($koneksi, $sql);
                    echo "Data di tambahkan";
                }
                else
                {
                    echo "Data gagal di tambahkan";
                }
            ?>
            <br/>
            <a href="../index.php">Kembali</a>
        </table>

    </center>
</html>
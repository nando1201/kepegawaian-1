<html>
    <center>
        <font size=6>
            Informasi Data Jabatan Pegawai
        </font>
        <hr width=320>
        <table>
            <?php
            
            require("../config/database.php");

            $idjp = $_POST['idjp'];
            $nip  = $_POST['nip'];
            $kodejabatan = $_POST['kodejabatan'];
            $status = $_POST['status'];
            $periode = $_POST['periode'];

            echo "<tr><td>IDJP</td><td>: $idjp</td></tr>";
            echo "<tr><td>NIP</td><td>: $nip</td></tr>";
            echo "<tr><td>Kode Jabatan</td><td>: $kodejabatan</td></tr>";
            echo "<tr><td>Status</td><td>: $status</td></tr>";
            echo "<tr><td>Periode</td><td>: $periode</td></tr>";
            echo "</table>";
            echo "<hr width=320>";

            if ($idjp!='')
                {
                    $sql = "insert into jabatanpegawai values ('$idjp', '$nip', '$kodejabatan', '$status', '$periode')";
                    $hasil = mysqli_query($koneksi, $sql);
                    echo "Data di tambahkan";
                }
                else
                {
                    echo "Data gagal di tambahkan";
                }
            ?>
            <br/>
            <a href="jabatanpegawai.php">Kembali</a>
        </table>

    </center>
</html>
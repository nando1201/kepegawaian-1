<html>
    <center>
        <font size=6>
            Informasi Data Jabatan
        </font>
        <hr width=320>
        <table>
            <?php
            
            require("../config/database.php");

            $kodejabatan = $_POST['kodejabatan'];
            $namajabatan = $_POST['namajabatan'];
            $level = $_POST['level'];
            $gaji = $_POST['gaji'];

            echo "<tr><td>Kode Jabatan</td><td>: $kodejabatan</td></tr>";
            echo "<tr><td>Nama Jabatan</td><td>: $namajabatan</td></tr>";
            echo "<tr><td>Level</td><td>: $level</td></tr>";
            echo "<tr><td>Gaji</td><td>: $gaji</td></tr>";
            echo "</table>";
            echo "<hr width=320>";

            if ($kodejabatan!='')
                {
                    $sql = "insert into jabatan values ('$kodejabatan', '$namajabatan', '$level', '$gaji')";
                    $hasil = mysqli_query($koneksi, $sql);
                    echo "Data di tambahkan";
                }
                else
                {
                    echo "Data gagal di tambahkan";
                }
            ?>
            <br/>
            <a href="jabatan.php">Kembali</a>
        </table>

    </center>
</html>
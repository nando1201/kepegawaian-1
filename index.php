<?php session_start(); ?>
<html>
<head>
    <title>Sistem Data Pegawai</title>
     <style>
        th {
            background: #2563eb; 
            color: white; 
            padding: 14px 10px; 
            text-align: center; 
            font-size: 14px;
        }
        td {
            padding: 12px 10px; 
            border-bottom: 1px solid #e5e7eb; 
            font-size: 14px; text-align: center;
            
        }
        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 950px;
        }
        * { box-sizing: border-box; } 
        body { 
            margin: 0; 
            font-family: Arial, sans-serif; 
            background: #f4f6f9; 
            color: #333;
         }
       
        
    .navbar {
        background: #1f2937;
        overflow: hidden;
        display: flex; 
        align-items: center; 
        justify-content: space-between; 
        padding: 0 40px; 
        min-height: 70px; 
        
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        
    }
    .navbar-title {
        font-size: 20px; 
        color: #fff; 
        font-weight: bold; 
    }
    .navbar ul {
        list-style-type: none; 
        margin: 0; 
        padding: 0; 
        display: flex; 
        text-decoration: none;
    }
    .navbar ul li a {
         display: block; 
         color: white; 
         padding: 25px 16px; 
         text-decoration: none; 
         font-size: 20px;
         transition: 0.3s;
         }
    .btn-add {
        display: inline-block;
        padding: 10px 20px;
        background-color: #2563eb;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s;
    }
    a {
        text-decoration: none;
        color: #2563eb;
    }
    </style>
</head>
<body>
    <center>
        
            <nav class="navbar">
                <div class="navbar-title">Sistem Data Pegawai</div> 
                <ul> 
                 <li><a href="jabatanpegawai/jabatanpegawai.php">Jabatan Pegawai</a></li> 
                 <li><a href="jabatan/jabatan.php">Jabatan</a></li> 
                </ul>
            </nav>
            <table >
                <tr bgcolor=silver>
                    <td width=50><center>No</center></td>
                    <td width=100><center>NIP</center></td>
                    <td width=200><center>Nama Lengkap</center></td>
                    <td width=50><center>Jk</center></td>
                    <td width=100><center>Tanggal Lahir</center></td>
                    <td width=200><center>Alamat</center></td>
                    <td width=50><center>No.hp</center></td>
                    <td width=200><center>Proses</center></td>
                </tr>

                <?php
                require("config/database.php");

                $sql = "SELECT * FROM pegawai";
                $hasil = mysqli_query($koneksi, $sql); 

                $n = 1;
                while ($row = mysqli_fetch_row($hasil)) { 
                    list($nip, $namalengkap, $jk, $tanggallahir, $alamat, $nohp) = $row;
                    echo "<tr>
                        <td>$n</td>
                        <td>$nip</td>
                        <td>$namalengkap</td>
                        <td>$jk</td>
                        <td>$tanggallahir</td>
                        <td>$alamat</td>
                        <td>$nohp</td>
                        <td align=center>
                            <a href='pegawai/pegawai_view.php?nip=$nip'>View</a>
                            <a href='pegawai/pegawai_edit.php?nip=$nip'>Edit</a>
                            <a href='pegawai/pegawai_hapus.php?nip=$nip' onclick=\"return confirm('Apakah Anda Yakin?')\">Delete</a>
                        </td>
                    </tr>";
                    $n++;
                }
                while ($row = mysqli_fetch_row($hasil));
                ?>
               <tr> <td align="center" colspan="8">
                    <a href="pegawai/pegawai_tambah.php" class="btn-add"> + Tambah pegawai</a>
                </td></tr>
            </table> 
    </center> 
</body>
</html>
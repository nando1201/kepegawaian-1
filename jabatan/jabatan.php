<?php session_start(); ?>
<html>
<head>
    <title>Jabatan </title>
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
                <div class="navbar-title">Tampil Data Jabatan</div> 
                <ul> 
                 <li><a href="../jabatanpegawai/jabatanpegawai.php">Jabatan Pegawai</a></li> 
                 <li><a href="../index.php">Pegawai</a></li> 
                </ul>
            </nav>
            <table  >
                <tr bgcolor=silver>
                    <td width=50><center>No</center></td>   
                    <td width=100><center>Kode Jabatan</center></td>
                    <td width=100><center>Nama Jabatan</center></td>
                    <td width=50><center>Level</center></td>
                    <td width=100><center>Gaji </center></td>
                    <td width=200><center>Proses</center></td>
                </tr>

                <?php
                require("../config/database.php");

                $sql = "SELECT * FROM jabatan";
                $hasil = mysqli_query($koneksi, $sql); 

                $n = 1;
                while ($row = mysqli_fetch_row($hasil)) { 
                    list($kodejabatan, $namajabatan, $level, $gaji) = $row;
                    echo "<tr>
                        <td>$n</td>
                        <td>$kodejabatan</td>
                        <td>$namajabatan</td>
                        <td>$level</td>
                        <td>$gaji</td>
                        <td align=center>
                            <a href='jabatan_view.php?kodejabatan=$kodejabatan'>View</a>
                            <a href='jabatan_edit.php?kodejabatan=$kodejabatan'>Edit</a>
                            <a href='jabatan_hapus.php?kodejabatan=$kodejabatan' onclick=\"return confirm('Apakah Anda Yakin?')\">Delete</a>
                        </td>
                    </tr>";
                    $n++;
                }
                while ($row = mysqli_fetch_row($hasil));
                ?>
               <tr> <td align="center" colspan="8">
                    <a href="jabatan_tambah.php" class="btn-add"> + Tambah jabatan</a>
                </td></tr>
            </table> 
        
    </center> 
</body>
</html>
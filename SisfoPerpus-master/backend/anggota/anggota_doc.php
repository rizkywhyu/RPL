<?php
 session_start();
 
require_once ('../../system/inc/config.php');

header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=anggota.doc");
echo"<html>
    <head>
        
        
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h3 align='center'>Laporan Anggota</h3>
        <h3 align='center'>Perpustakaan Learning Centre</h3>
        
        <br><h3 align='left'>Daftar Buku</32>
        <table class='word-table' style='margin-bottom: 10px'>
            <tr>
                <th>No</th>
        <th>NIM</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Email</th>
		<th>Telepon</th>
		<th>Jurusan</th>
		
            </tr>";
            ?>
            <?php
    $query="SELECT * from anggota order by Id_anggota DESC";
    $result=mysql_query($query) or die(mysql_error());
            $data_peminjaman = array();
            while($row = mysql_fetch_object($result))
                $data_anggota[] = $row;
            $start = 0;
            foreach ($data_anggota as $anggota)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
                <td><?php echo $anggota->Id_anggota ?></td>
		      <td><?php echo $anggota->Nama ?></td>
		      <td><?php echo $anggota->Alamat ?></td>
		      <td><?php echo $anggota->Email ?></td>
		      <td><?php echo $anggota->Telepon ?></td>
		      <td><?php echo $anggota->Jurusan ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>
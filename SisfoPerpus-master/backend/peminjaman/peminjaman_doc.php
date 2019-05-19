<?php
 session_start();
 
require_once ('../../system/inc/config.php');

header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=peminjaman.doc");
echo"
<html>
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
        <h3 align='center'>Laporan Peminjaman</h3>
        <h3 align='center'>Perpustakaan Learning Centre</h3>
        
        <br><h3 align='left'>Daftar Peminjaman</h2>
        <table class='word-table' style='margin-bottom: 10px'>
            <tr>
                <th>No</th>
		<th>NIM</th>
        <th>Nama</th>
        <th>Judul Buku
        <th>Tangal Peminjaman</th>
		<th>Id Petugas</th>
		
            </tr>";
            ?>
            <?php
$query = "SELECT p.Id_peminjaman,p.Tanggal_pinjam,p.Tanggal_kembali,p.Denda,p.Id_petugas,p.Id_anggota,p.Id_buku,b.Judul,a.Nama
                FROM peminjaman as p,anggota as a,buku as b 
                WHERE p.Id_anggota=a.Id_anggota AND
                p.Id_buku=b.Id_buku order by Id_peminjaman DESC";
    $result=mysql_query($query) or die(mysql_error());
            $data_peminjaman = array();
            while($row = mysql_fetch_object($result))
                $data_peminjaman[] = $row;
            $start = 0;
            foreach ($data_peminjaman as $peminjaman)
            {
                ?>
<?php $tgl=strtotime($peminjaman->Tanggal_pinjam) ?>
            <?php $tglnya=date('d F Y',$tgl) ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $peminjaman->Id_anggota ?></td>
		      <td><?php echo $peminjaman->Nama ?></td>
		      <td><?php echo $peminjaman->Judul ?></td>
		      <td><?php echo $tglnya ?></td>
		      <td><?php echo $peminjaman->Id_petugas ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>
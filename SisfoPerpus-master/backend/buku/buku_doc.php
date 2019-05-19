<?php
 session_start();
 
require_once ('../../system/inc/config.php');

header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=buku.doc");
echo "    <html>
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
        <h3 align='center'>Laporan Inventaris Buku</h3>
        <h3 align='center'>Perpustakaan Learning Centre</h3>
        
        <br><h3 align='left'>Daftar Buku</32>
        <table class='word-table' style='margin-bottom: 10px'>
            <tr>
                <th>No</th>
        
		<th>Judul</th>
		<th>Pengarang</th>
		<th>Tahun</th>
		<th>Penerbit</th>
        <th>Jenis</th>
		<th>Stok Buku</th>
		
            </tr>";?>
<?php
        $query="SELECT * from buku order by Id_buku DESC";
    $result=mysql_query($query) or die(mysql_error());
            $data_buku = array();
            while($row = mysql_fetch_object($result))
                $data_buku[] = $row;
            $start = 0;
            foreach ($data_buku as $buku)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
              
		      <td><?php echo $buku->Judul ?></td>
		      <td><?php echo $buku->Pengarang ?></td>
		      <td><?php echo $buku->Tahun ?></td>
		      <td><?php echo $buku->Penerbit ?></td>
              <td><?php echo $buku->Jenis ?></td>
		      <td><?php echo $buku->Stok_buku ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>

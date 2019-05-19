<?php
 session_start();
 
require_once ('../../system/inc/config.php');

header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=pengadaan_buku.doc");
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
        <h3 align='center'>Laporan Pengadaan Buku</h3>
        <h3 align='center'>Perpustakaan Learning Centre</h3>
        
        <br><h3 align='left'>Daftar Buku</32>
        <table class='word-table' style='margin-bottom: 10px'>
            <tr>
                <th>No</th>
        
		<th>Nama Supllier</th>
		    <th>Judul Buku</th>
		    <th>Tanggal Suppli</th>
		    <th>Total Harga</th>
		
            </tr>";?>
<?php
        $query="SELECT sb.Id_suppli,sb.Id_supplier,sb.Id_buku,sb.Total_harga,sb.Tanggal_suppli,sb.Jumlah_buku,b.Judul,s.Nama 
            FROM suplai_buku as sb, buku as b, supplier as s 
            WHERE sb.Id_buku=b.Id_buku AND
            sb.Id_supplier=s.Id_supplier
            order by Id_suppli DESC";
    $result=mysql_query($query) or die(mysql_error());
            $data_supplier = array();
            while($row = mysql_fetch_object($result))
                $data_supplier[] = $row;
            $start = 0;
            foreach ($data_supplier as $supplier)
            {
                ?>
            <?php $tgl=strtotime($supplier->Tanggal_suppli) ?>
            <?php $tglnya=date('d F Y',$tgl) ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		    <td><?php echo $supplier->Nama ?></td>
		    <td><?php echo $supplier->Judul ?></td>
		    <td><?php echo $tglnya ?></td>
		    <td><?php echo $supplier->Total_harga ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>

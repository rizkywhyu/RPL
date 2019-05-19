<?php
	
    $query="SELECT sb.Id_suppli,sb.Id_supplier,sb.Id_buku,sb.Total_harga,sb.Tanggal_suppli,sb.Jumlah_buku,b.Judul,s.Nama 
            FROM suplai_buku as sb, buku as b, supplier as s 
            WHERE sb.Id_buku=b.Id_buku AND
            sb.Id_supplier=s.Id_supplier
            order by Id_suppli DESC";
    $result=mysql_query($query) or die(mysql_error());

?>
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                    <h3 class='box-title'>DAFTAR PENGADAAN BUKU </h3>
                    <br><p>Pilih Data yang ingin dicetak 
                <select placeholder="pilih" onchange="location = this.value;">
                    <option value="" disabled selected>pilih</option>
  <option value="index2.php?mod=buku&pg=buku_laporan">Inventaris Buku</option>
                    <option value="index2.php?mod=buku&pg=buku_laporan_pengadaan">Pengadaan Buku</option>
  <option value="index2.php?mod=anggota&pg=anggota_laporan">Anggota</option>
  <option value="index2.php?mod=peminjaman&pg=peminjaman_laporan">Peminjaman</option>
<option value="index2.php?mod=peminjaman&pg=peminjaman_laporan_pengembalian">Pengembalian</option>
<option value="index2.php?mod=peminjaman&pg=peminjaman_laporan_denda">Pemasukan Denda</option></select> 
		
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                
                <tr>
                    <th width="80px">No</th>
            
		    <th>Nama Supllier</th>
		    <th>Judul Buku</th>
		    <th>Tanggal Suppli</th>
		    <th>Total Harga</th>
		    
                </tr>
            </thead>
	    <tbody>
            <?php
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
            </tbody>
        </table>
        <br>
        <br>
        <a href="buku/buku_pengadaan_doc.php" class="btn btn-primary btn-sm"><i class="fa fa-file-word-o"></i> Print</a>
		
                        
       <script src="../system/assets/js/jquery-1.11.2.min.js "></script>
        <script src="../system/assets/datatables/jquery.dataTables.js"></script>
        <script src="../system/assets/datatables/dataTables.bootstrap.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
                    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
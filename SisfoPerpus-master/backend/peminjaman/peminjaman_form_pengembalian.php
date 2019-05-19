<?php

	if(isset($_GET['id'])) {
        $id = $_GET['id'];
		$data_anggota = array();
		$sql = "select * from peminjaman where Id_peminjaman='$id' ";
		$result = mysql_query($sql) or die(mysql_error());
        while($row = mysql_fetch_object($result))
        $data_peminjaman[] = $row;
        foreach ($data_peminjaman as $peminjaman)
        {
            $Id_peminjaman=$peminjaman->Id_peminjaman;
            $Tanggal_pinjam=$peminjaman->Tanggal_pinjam;
            $Tanggal_kembali=$peminjaman->Tanggal_kembali;
            $Id_buku=$peminjaman->Id_buku;
            $Id_anggota=$peminjaman->Id_anggota;
            $Id_petugas=$peminjaman->Id_petugas;
            
            
        }
    }
$button = "Pengembalian";
	?>
<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>PENGEMBALIAN</h3>
                      <div class='box box-primary'>
        <form action="peminjaman/peminjaman_action.php" method="post"><table class='table table-bordered'>
        
	    
<!--        <tr><td>Tanggal Pinjam</td><td><?php echo $Tanggal_pinjam; ?></td></tr>    -->
        <tr><td>Tanggal Kembali </td>
            <td><input type="date" class="form-control" name="Tanggal_kembali" id="Tanggal_kembali" placeholder="Tanggal Kembali" value="<?php echo $Tanggal_kembali; ?>" />
        </td>        
	    <input type="hidden" name="Id_peminjaman" value="<?php echo $Id_peminjaman; ?>" /> 
            <input type="hidden" name="Id_anggota" value="<?php echo $Id_anggota; ?>" /> 
            <input type="hidden" name="Id_petugas" value="<?php echo $Id_petugas; ?>" /> 
            <input type="hidden" name="Id_buku" value="<?php echo $Id_buku; ?>" /> 
            <input type="hidden" name="Tanggal_pinjam" value="<?php echo $Tanggal_pinjam; ?>" />
            
	    <tr><td colspan='2'><button type="submit" name="button" class="btn btn-primary" onclick="return confirm('Are you sure to update?')" value=<?=$button?>>Return</button> 
	    <a href="index2.php?mod=peminjaman&pg=peminjaman_list" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
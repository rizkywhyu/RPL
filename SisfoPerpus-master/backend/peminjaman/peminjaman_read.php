<?php


	if(isset($_GET['id'])) {
        $id = $_GET['id'];
		$data_anggota = array();
		$sql = "SELECT p.Id_peminjaman,p.Tanggal_pinjam,p.Tanggal_pinjam,p.Tanggal_kembali,p.Denda,p.Id_petugas,p.Id_peminjaman,b.Judul,a.Nama,p.Id_anggota
                FROM peminjaman as p,anggota as a,buku as b 
                WHERE p.Id_anggota=a.Id_anggota AND
                p.Id_buku=b.Id_buku AND
                p.Id_peminjaman='$id'";
		$result = mysql_query($sql) or die(mysql_error());
        while($row = mysql_fetch_object($result))
        $data_peminjaman[] = $row;
        foreach ($data_peminjaman as $peminjaman)
        {
            $Id_peminjaman=$peminjaman->Id_peminjaman;
            $Nama=$peminjaman->Nama;
            $Alamat=$peminjaman->Alamat;
            $Id_petugas=$peminjaman->Id_petugas;
            $Tanggal_pinjam=$peminjaman->Tanggal_pinjam;
            $Tanggal_kembali=$peminjaman->Tanggal_kembali;
            $Denda=$peminjaman->Denda;
            $Judul=$peminjaman->Judul;
            $Id_anggota=$peminjaman->Id_anggota;
        }
    }

?>
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Peminjaman Read</h3>
        <table class="table table-bordered">
                    <?php 
                    if($Tanggal_kembali=="0000-00-00"){
                        $tglnyab="Belum Kembali";
                    }
                    else{
                        $tglnyab=date('d F Y',strtotime($Tanggal_kembali));
                    }
            ?>
        <tr><td>NIM</td><td><?php echo $Id_anggota; ?></td></tr>
        <tr><td>Nama</td><td><?php echo $Nama; ?></td></tr>
        <tr><td>Judul Buku</td><td><?php echo $Judul; ?></td></tr>
	    <tr><td>Tanggal Pinjam</td><td><?php echo date('d F Y',strtotime($Tanggal_pinjam)); ?></td></tr>
	    <tr><td>Tanggal Kembali</td><td><?php echo $tglnyab; ?></td></tr>
	    <tr><td>Denda</td><td><?php echo $Denda; ?></td></tr>
	    <tr><td>Id Petugas</td><td><?php echo $Id_petugas; ?></td></tr>
	    
	    <tr><td></td><td><a href="index2.php?mod=peminjaman&pg=peminjaman_list" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
<?php

    $query = "SELECT p.Id_peminjaman,p.Tanggal_pinjam,p.Tanggal_kembali,p.Denda,p.Id_petugas,p.Id_anggota,p.Id_buku,b.Judul,a.Nama
                FROM peminjaman as p,anggota as a,buku as b 
                WHERE p.Id_anggota=a.Id_anggota AND
                p.Id_buku=b.Id_buku order by Id_peminjaman DESC";
    $result=mysql_query($query) or die(mysql_error());

?>
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>Laporan Pengembalian </h3>
                                      <br><p>Pilih Data yang ingin dicetak 
                <select placeholder="pilih" onchange="location = this.value;">
                    <option value="" disabled selected>pilih</option>
    <option value="index2.php?mod=buku&pg=buku_laporan">Inventaris Buku</option>
  <option value="index2.php?mod=anggota&pg=anggota_laporan">Anggota</option>
  <option value="index2.php?mod=peminjaman&pg=peminjaman_laporan">Peminjaman</option>
<option value="index2.php?mod=peminjaman&pg=peminjaman_laporan_pengembalian">Pengembalian</option>
<option value="index2.php?mod=peminjaman&pg=peminjaman_laporan_denda">Pemasukan Denda</option>
            </select></p>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="50px">No</th>
		    <th>NIM</th>
		    <th>Nama</th>
		    <th>Judul Buku</th>
		    <th>Tanggal Pengembalian</th>
		    <th>Id Petugas</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $data_peminjaman = array();
            while($row = mysql_fetch_object($result))
                $data_peminjaman[] = $row;
            $start = 0;
            foreach ($data_peminjaman as $peminjaman)
            {
                ?>
            <?php $tgl=strtotime($peminjaman->Tanggal_pinjam) ?>
            <?php $tglnya=date('d F Y',$tgl) ?>
            <?php $tglb=strtotime($peminjaman->Tanggal_kembali) ?>
            <?php 
                    if($peminjaman->Tanggal_kembali=="0000-00-00"){
                        $tglnyab="Belum Kembali";
                    }
                    else{
                        $tglnyab=date('d F Y',$tglb);
                    }
            ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $peminjaman->Id_anggota ?></td>
		    <td><?php echo $peminjaman->Nama ?></td>
		    <td><?php echo $peminjaman->Judul ?></td>
		    <td><?php echo $tglnyab ?></td>
		    <td><?php echo $peminjaman->Id_petugas ?></td>
		    <td style="text-align:center" width="170px">
            <a href="index2.php?mod=peminjaman&pg=peminjaman_form_pengembalian&id=<?=$peminjaman->Id_peminjaman;?>" title='return' class='btn btn-danger btn-sm'><i class="fa fa-reply"></i></a>
            <a href="index2.php?mod=peminjaman&pg=peminjaman_read&id=<?=$peminjaman->Id_peminjaman;?>" title='detail' class='btn btn-danger btn-sm'><i class="fa fa-eye"></i></a>
            <a href="index2.php?mod=peminjaman&pg=peminjaman_form_update&id=<?=	$peminjaman -> Id_peminjaman;?>" title='edit' class='btn btn-danger btn-sm'><i class="fa fa-pencil-square-o"></i></a>
            <a href="index2.php?mod=peminjaman&pg=peminjaman_list&act=del&id=<?=	$peminjaman -> Id_peminjaman;?>" title="delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?') "><i class="fa fa-trash-o"></i></a>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
                   
		<a href="peminjaman/peminjaman_pengembalian_doc.php" class="btn btn-primary btn-sm"><i class="fa fa-file-word-o"></i> Print</a>
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
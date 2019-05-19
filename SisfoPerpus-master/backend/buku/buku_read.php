<?php

	if(isset($_GET['id'])) {
        $id = $_GET['id'];
		$data_buku = array();
		$sql = "select * from buku where Id_buku='$id' ";
		$result = mysql_query($sql) or die(mysql_error());
        while($row = mysql_fetch_object($result))
        $data_buku[] = $row;
        foreach ($data_buku as $buku)
        {
            $Id_buku=$buku->Id_buku;
            $Judul=$buku->Judul;
            $Pengarang=$buku->Pengarang;
            $Tahun=$buku->Tahun;
            $Penerbit=$buku->Penerbit;
            $Stok_buku=$buku->Stok_buku;
        }
    }
	?>
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Buku Read</h3>
        <table class="table table-bordered">
        <tr><td>Id</td><td><?php echo $Id_buku; ?></td></tr>
	    <tr><td>Judul</td><td><?php echo $Judul; ?></td></tr>
	    <tr><td>Pengarang</td><td><?php echo $Pengarang; ?></td></tr>
	    <tr><td>Tahun</td><td><?php echo $Tahun; ?></td></tr>
	    <tr><td>Penerbit</td><td><?php echo $Penerbit; ?></td></tr>
	    <tr><td>Stok Buku</td><td><?php echo $Stok_buku; ?></td></tr>
	    <tr><td></td><td><a href="index2.php?mod=buku&pg=buku_list" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
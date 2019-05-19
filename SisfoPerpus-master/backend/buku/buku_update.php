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
            $Jenis=$buku->Jenis;
            $Stok_buku=$buku->Stok_buku;
        }
    }
$button = "Update";
	?>
<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>BUKU</h3>
                      <div class='box box-primary'>
        <form action="buku/buku_action.php" method="post"><table class='table table-bordered'>
        <tr><td>Id </td>
            <td><input type="text" class="form-control" name="Id" id="Id" placeholder="Id_buku" value="<?php echo $Id_buku; ?>" disabled/ >
        </td>
	    <tr><td>Judul </td>
            <td><input type="text" class="form-control" name="Judul" id="Judul" placeholder="Judul" value="<?php echo $Judul; ?>" required/>
        </td>
	    <tr><td>Pengarang </td>
            <td><input type="text" class="form-control" name="Pengarang" id="Pengarang" placeholder="Pengarang" value="<?php echo $Pengarang; ?>" required/>
        </td>
	    <tr><td>Tahun </td>
            <td><input type="text"  class="form-control" name="Tahun" id="Tahun" placeholder="Tahun" value="<?php echo $Tahun; ?>" required/>
                
        </td>
	    <tr><td>Penerbit </td>
            <td><input type="text" class="form-control" name="Penerbit" id="Penerbit" placeholder="Penerbit" value="<?php echo $Penerbit; ?>" required/>
        </td>
        <tr><td>Jenis </td>
            <td><input type="text" class="form-control" name="Jenis" id="Jenis" placeholder="Jenis" value="<?php echo $Jenis; ?>" required/>
        </td>
	    <tr><td>Stok Buku </td>
            <td><input type="text" class="form-control" name="Stok_buku" id="Stok_buku" placeholder="Stok Buku" value="<?php echo $Stok_buku; ?>" required/>
        </td>
            <input type="hidden" name="Id_buku" value="<?php echo $Id_buku; ?>" /> 
	    <tr><td colspan='2'><button type="submit" name="button" class="btn btn-primary" onclick="return confirm('Are you sure to update?')" value=<?=$button?>><?=$button?></button> 
	    <a href="index2.php?mod=buku&pg=buku_list" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
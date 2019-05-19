<?php

	
		$button = "Create";
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
            <td><input type="text" class="form-control" name="Id_buku" id="Id_buku" placeholder="Id_buku" required / >
        </td>
	    <tr><td>Judul </td>
            <td><input type="text" class="form-control" name="Judul" id="Judul" placeholder="Judul" required />
        </td>
	    <tr><td>Pengarang </td>
            <td><input type="text" class="form-control" name="Pengarang" id="Pengarang" placeholder="Pengarang" required />
        </td>
	    <tr><td>Tahun </td>
            <td><input type="text"  class="form-control" name="Tahun" id="Tahun" placeholder="Tahun" required />
                
        </td>
	    <tr><td>Penerbit </td>
            <td><input type="text" class="form-control" name="Penerbit" id="Penerbit" placeholder="Penerbit" required />
        </td>
        <tr><td>Jenis </td>
            <td><input type="text" class="form-control" name="Jenis" id="Jenis" placeholder="Jenis" required />
        </td>
	    <tr><td>Stok Buku </td>
            <td><input type="text" class="form-control" name="Stok_buku" id="Stok_buku" placeholder="Stok Buku" required />
        </td>
        <tr><td>Supplier </td>
            <td>
            <?php
                $result = mysql_query("SELECT Id_supplier,Nama FROM supplier"); 
 echo "<select  name='Id_supplier' id='Id_supplier' class='form-control'>"; 
 while($row = mysql_fetch_array($result)) 
 { 
    echo "<option value = '".$row[Id_supplier]."'>".$row[Nama]."</option>"; 
 }
 echo "</select>";?>
        </td>
        <tr><td>Total Harga </td>
            <td><input type="text" class="form-control" name="Total_harga" id="Total_harga" placeholder="Total Harga"  required/>
        </td>
	    <tr><td>Tanggal Suppli</td>
            <td><input type="date" class="form-control" name="Tanggal_suppli" id="Tanggal_suppli" placeholder="Tanggal Suppli" required />
        </td>
            <tr><td>Id Petugas</td>
            <td><input type="text" class="form-control" name="Id_petugas" id="Id_petugas" placeholder="Id Petugas" required />
        </td>
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary" name="button" value=<?=$button?>><?=$button?> </button> 
	    <a href="index2.php?mod=buku&pg=buku_list" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
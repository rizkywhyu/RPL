<?php

	
		$button = "Create";
	?>
<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>PEMINJAMAN</h3>
                      <div class='box box-primary'>
        <form action="peminjaman/peminjaman_action.php" method="post"><table class='table table-bordered'>
        <tr><td>NIM </td>
            <td><input type="text" class="form-control" name="Id_anggota" id="Id_anggota" placeholder="NIM"  />
        </td>
        
        <tr><td>Id Petugas </td>
            <td><input type="text" class="form-control" name="Id_petugas" id="Id_petugas" placeholder="Id Petugas"  />
        <tr><td>Judul Buku</td>
            <td>

                <?php
                $result = mysql_query("SELECT Id_buku,Judul FROM buku"); 
 echo "<select  name='Id_buku' id='Id_buku' class='form-control'>"; 
 while($row = mysql_fetch_array($result)) 
 { 
    echo "<option value = '".$row[Id_buku]."'>".$row[Judul]."</option>"; 
 }
 echo "</select>";?>
                
        </td>
	    
	    <tr><td>Tanggal Pinjam </td>
            <td><input type="date" class="form-control" name="Tanggal_pinjam" id="Tanggal_pinjam" placeholder="Tanggal Pinjam"  />
        </td>
	    
	    
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary" name="button" value=<?=$button?>><?=$button?></button> 
	    <a href="index2.php?mod=peminjaman&pg=peminjaman_list" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
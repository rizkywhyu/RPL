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
            $Id_buku1=$peminjaman->Id_buku;
            $Id_anggota=$peminjaman->Id_anggota;
            $Id_petugas=$peminjaman->Id_petugas;
            $Denda=$peminjaman->Denda;
            
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
                
                  <h3 class='box-title'>PEMINJAMAN</h3>
                      <div class='box box-primary'>
        <form action="peminjaman/peminjaman_action.php" method="post"><table class='table table-bordered'>
        <tr><td>NIM </td>
            <td><input type="text" class="form-control" name="Id_anggota" id="Id_anggota" placeholder="NIM" value="<?php echo $Id_anggota; ?>" />
        </td>
        <tr><td>Id Petugas </td>
            <td><input type="text" class="form-control" name="Id_petugas" id="Id_petugas" placeholder="Id Petugas" value="<?php echo $Id_petugas; ?>" />
        <tr><td>Judul Buku </td>
            <td>

                <?php
                $result = mysql_query("SELECT Id_buku,Judul FROM buku"); 
 echo "<select  name='Id_buku' id='Id_buku' class='form-control'>"; 
 while($row = mysql_fetch_array($result)) 
 { 
    echo "<option if($row[Id_buku]==$Id_buku1) {
    value = '".$row[Id_buku]."' selected
    }else{
    value = '".$row[Id_buku]."' 
    }>".$row[Judul]." 
    </option>"; 
 }
 echo "</select>";?>
                
        </td>
	    
	    <tr><td>Tanggal Pinjam </td>
            <td><input type="date" class="form-control" name="Tanggal_pinjam" id="Tanggal_pinjam" placeholder="Tanggal Pinjam" value="<?php echo $Tanggal_pinjam; ?>" />
        </td>
	    <tr><td>Tanggal Kembali</td>
            <td><input type="date" class="form-control" name="Tanggal_kembali" id="Tanggal_kembali" placeholder="Tanggal Kembali" value="<?php echo $Tanggal_kembali; ?>" />
        </td>
        <tr><td>Denda </td>
            <td><input type="text" class="form-control" name="Denda" id="Denda" placeholder="Denda" value="<?php echo $Denda; ?>" />
        </td>
	    <input type="hidden" name="Id_peminjaman" value="<?php echo $Id_peminjaman; ?>" /> 
	    <tr><td colspan='2'><button type="submit" name="button" class="btn btn-primary" onclick="return confirm('Are you sure to update?')" value=<?=$button?>><?=$button?></button> 
	    <a href="index.php?mod=peminjaman&pg=peminjaman_list" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
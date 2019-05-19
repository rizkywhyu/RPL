<?php

	if(isset($_GET['id'])) {
        $id = $_GET['id'];
		$data_petugas = array();
		$sql = "select * from petugas where Id_petugas='$id' ";
		$result = mysql_query($sql) or die(mysql_error());
        while($row = mysql_fetch_object($result))
        $data_petugas[] = $row;
        foreach ($data_petugas as $petugas)
        {
             $Id_petugas = $petugas->Id_petugas;
            $Nama = $petugas->Nama;
            $Alamat = $petugas->Alamat;
            $Username = $petugas->Username;
            $Password = $petugas->Password;
            $Telepon = $petugas->Telepon;
            $Level = $petugas->Level;
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
                
                  <h3 class='box-title'>PETUGAS</h3>
                      <div class='box box-primary'>
        <form action="petugas/petugas_action.php" method="post"><table class='table table-bordered'>
            <tr><td>Id </td>
            <td><input type="text" class="form-control" name="Id" id="Id" placeholder="Id" value="<?php echo $Id_petugas; ?>" disabled required/ >
        </td>
	    <tr><td>Nama </td>
            <td><input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $Nama; ?>" />
        </td>
	    <tr><td>Username </td>
            <td><input type="text" class="form-control" name="Username" id="Username" placeholder="Username" value="<?php echo $Username; ?>" />
        </td>
	    <tr><td>Password </td>
            <td><input type="text" class="form-control" name="Password" id="Password" placeholder="Password" value="<?php echo $Password; ?>" />
        </td>
	    <tr><td>Alamat</td>
            <td><input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Alamat" value="<?php echo $Alamat; ?>" />
        </td>
	    <tr><td>Telepon </td>
            <td><input type="text" class="form-control" name="Telepon" id="Telepon" placeholder="Telepon" value="<?php echo $Telepon; ?>" />
        </td>
	    <tr><td>Level </td>
            <td><select  name='Level' id='Level' class='form-control'>
                <option value="super">Super</option>
                <option value="admin">Admin</option>
                </select>
        </td>
	    <input type="hidden" name="Id_petugas" value="<?php echo $Id_petugas; ?>" /> 
	    <tr><td colspan='2'><button type="submit" name="button" class="btn btn-primary" onclick="return confirm('Are you sure to update?')" value=<?=$button?>><?=$button?></button> 
	    <a href="index1.php?mod=petugas&pg=petugas_list" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
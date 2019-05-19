<?php

	
		$button = "Create";
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
            <td><input type="text" class="form-control" name="Id_petugas" id="Id_petugas" placeholder="Id"  />
        </td>
	    <tr><td>Nama </td>
            <td><input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama"  />
        </td>
	    <tr><td>Username </td>
            <td><input type="text" class="form-control" name="Username" id="Username" placeholder="Username"  />
        </td>
	    <tr><td>Password </td>
            <td><input type="text" class="form-control" name="Password" id="Password" placeholder="Password"  />
        </td>
	    <tr><td>Alamat </td>
            <td><input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Alamat"  />
        </td>
	    <tr><td>Telepon</td>
            <td><input type="text" class="form-control" name="Telepon" id="Telepon" placeholder="Telepon"  />
        </td>
	    <tr><td>Level </td>
            <td><select  name='Level' id='Level' class='form-control'>
                <option value="super">Super</option>
                <option value="admin">Admin</option>
                </select>
        </td>
	    
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary" name="button" value=<?=$button?>><?=$button?></button> 
	    <a href="index1.php?mod=petugas&pg=petugas_list" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
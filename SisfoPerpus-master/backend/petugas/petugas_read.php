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
            $Id_petugas=$petugas->Id_petugas;
            $Nama=$petugas->Nama;
            $Alamat=$petugas->Alamat;
            $Username=$petugas->Username;
            $Password=$petugas->Password;
            $Level=$petugas->Level;
            $Telepon=$petugas->Telepon;
        }
    }
	?>
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Petugas Read</h3>
        <table class="table table-bordered">
	    <tr><td>Nama</td><td><?php echo $Nama; ?></td></tr>
	    <tr><td>Username</td><td><?php echo $Username; ?></td></tr>
	    <tr><td>Password</td><td><?php echo $Password; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $Alamat; ?></td></tr>
	    <tr><td>Telepon</td><td><?php echo $Telepon; ?></td></tr>
	    <tr><td>Level</td><td><?php echo $Level; ?></td></tr>
	    <tr><td></td><td><a href="index1.php?mod=petugas&pg=petugas_list" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
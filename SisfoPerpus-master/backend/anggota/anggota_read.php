<?php

	if(isset($_GET['id'])) {
        $id = $_GET['id'];
		$data_anggota = array();
		$sql = "select * from anggota where Id_anggota='$id' ";
		$result = mysql_query($sql) or die(mysql_error());
        while($row = mysql_fetch_object($result))
        $data_anggota[] = $row;
        foreach ($data_anggota as $anggota)
        {
            $Id_anggota=$anggota->Id_anggota;
            $Nama=$anggota->Nama;
            $Alamat=$anggota->Alamat;
            $Email=$anggota->Email;
            $Telepon=$anggota->Telepon;
            $Jurusan=$anggota->Jurusan;
        }
    }
	?>
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Anggota Read</h3>
        <table class="table table-bordered">
        <tr><td>NIM</td><td><?php echo $Id_anggota; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $Nama; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $Alamat; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $Email; ?></td></tr>
	    <tr><td>Telepon</td><td><?php echo $Telepon; ?></td></tr>
	    <tr><td>Jurusan</td><td><?php echo $Jurusan; ?></td></tr>
	    <tr><td></td><td><a href="index2.php?mod=anggota&pg=anggota_list" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
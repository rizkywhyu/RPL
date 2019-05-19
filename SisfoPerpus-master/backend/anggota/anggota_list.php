<?php


			
    if(isset($_GET['act'])) {
        $id = $_GET['id'];
        $sql = "delete from anggota where Id_anggota='$id' ";
        mysql_query($sql) or die(mysql_error());

    }
				
    $query="SELECT * from anggota order by Id_anggota DESC";
    $result=mysql_query($query) or die(mysql_error());

?>
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>ANGGOTA LIST <a href="index2.php?mod=anggota&pg=anggota_form" class="btn btn-danger btn-sm">Create</a>
		</h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
            <th>NIM</th>
		    <th>Nama</th>
		    
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $data_peminjaman = array();
            while($row = mysql_fetch_object($result))
                $data_anggota[] = $row;
            $start = 0;
            foreach ($data_anggota as $anggota)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
            <td><?php echo $anggota->Id_anggota ?></td>
		    <td><?php echo $anggota->Nama ?></td>
		    
		    <td style="text-align:center" width="140px">
			<a href="index2.php?mod=anggota&pg=anggota_read&id=<?=$anggota->Id_anggota;?>" title='detail' class='btn btn-danger btn-sm'><i class="fa fa-eye"></i></a>
            <a href="index2.php?mod=anggota&pg=anggota_update&id=<?=	$anggota -> Id_anggota;?>" title='edit' class='btn btn-danger btn-sm'><i class="fa fa-pencil-square-o"></i></a>
            <a href="index2.php?mod=anggota&pg=anggota_list&act=del&id=<?=	$anggota -> Id_anggota;?>" title="delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?') "><i class="fa fa-trash-o"></i></a>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
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
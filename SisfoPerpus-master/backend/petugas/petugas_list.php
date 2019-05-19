<?php


			
    if(isset($_GET['act'])) {
        $id = $_GET['id'];
        $sql = "delete from petugas where Id_petugas='$id' ";
        mysql_query($sql) or die(mysql_error());

    }
				
    $query="SELECT * from petugas order by Id_petugas DESC";
    $result=mysql_query($query) or die(mysql_error());

?>
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>PETUGAS LIST <a href="index1.php?mod=petugas&pg=petugas_form" class="btn btn-danger btn-sm">Create</a>
		</h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                
                <tr>
                    <th width="80px">No</th>
            <th>ID</th>
		    <th>Nama</th>
		    <th>Alamat</th>
		    <th>Telepon</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $data_petugas = array();
            while($row = mysql_fetch_object($result))
                $data_petugas[] = $row;
            $start = 0;
            foreach ($data_petugas as $petugas)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
            <td><?php echo $petugas->Id_petugas ?></td>
		    <td><?php echo $petugas->Nama ?></td>
		    <td><?php echo $petugas->Alamat ?></td>
		    <td><?php echo $petugas->Telepon ?></td>
		    <td style="text-align:center" width="140px">
			<a href="index1.php?mod=petugas&pg=petugas_read&id=<?=$petugas->Id_petugas;?>" title='detail' class='btn btn-danger btn-sm'><i class="fa fa-eye"></i></a>
            <a href="index1.php?mod=petugas&pg=petugas_update&id=<?=	$petugas -> Id_petugas;?>" title='edit' class='btn btn-danger btn-sm'><i class="fa fa-pencil-square-o"></i></a>
            <a href="index1.php?mod=petugas&pg=petugas_list&act=del&id=<?=	$petugas -> Id_petugas;?>" title="delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?') "><i class="fa fa-trash-o"></i></a>
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
<?php


			
    if(isset($_GET['act'])) {
        $id = $_GET['id'];
        $sql = "delete from buku where Id_buku='$id' ";
        mysql_query($sql) or die(mysql_error());

    }
				
    $query="SELECT * from buku order by Id_buku DESC";
    $result=mysql_query($query) or die(mysql_error());

?>
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                    <h3 class='box-title'>BUKU LIST <a href="index2.php?mod=buku&pg=buku_form" class="btn btn-danger btn-sm">Create</a>
                        
		</h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                
                <tr>
                    <th width="80px">No</th>
            
		    <th>Judul</th>
		    <th>Pengarang</th>
		    <th>Tahun</th>
		    
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $data_buku = array();
            while($row = mysql_fetch_object($result))
                $data_buku[] = $row;
            $start = 0;
            foreach ($data_buku as $buku)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $buku->Judul ?></td>
		    <td><?php echo $buku->Pengarang ?></td>
		    <td><?php echo $buku->Tahun ?></td>
		    
                
                
		    <td style="text-align:center" width="140px">
            <a href="index2.php?mod=buku&pg=buku_read&id=<?=$buku->Id_buku;?>" title='detail' class='btn btn-danger btn-sm'><i class="fa fa-eye"></i></a>
            <a href="index2.php?mod=buku&pg=buku_update&id=<?=	$buku -> Id_buku;?>" title='edit' class='btn btn-danger btn-sm'><i class="fa fa-pencil-square-o"></i></a>
            <a href="index2.php?mod=buku&pg=buku_list&act=del&id=<?=	$buku -> Id_buku;?>" title="delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?') "><i class="fa fa-trash-o"></i></a>
		
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
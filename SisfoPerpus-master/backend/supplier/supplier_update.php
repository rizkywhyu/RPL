<?php

	if(isset($_GET['id'])) {
        $id = $_GET['id'];
		$data_supplier = array();
		$sql = "select * from supplier where Id_supplier='$id' ";
		$result = mysql_query($sql) or die(mysql_error());
        while($row = mysql_fetch_object($result))
        $data_supplier[] = $row;
        foreach ($data_supplier as $supplier)
        {
             $Id_supplier = $supplier->Id_supplier;
            $Nama = $supplier->Nama;
            
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
                
                  <h3 class='box-title'>SUPPLIER</h3>
                      <div class='box box-primary'>
        <form action="supplier/supplier_action.php" method="post"><table class='table table-bordered'>
	    <tr><td>Nama </td>
            <td><input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $Nama; ?>" />
        </td>
	    
        </td>
	    <input type="hidden" name="Id_supplier" value="<?php echo $Id_supplier; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary" name="button" value=<?=$button?>><?=$button?></button> 
	    <a href="index1.php?mod=supplier&pg=supplier_list" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
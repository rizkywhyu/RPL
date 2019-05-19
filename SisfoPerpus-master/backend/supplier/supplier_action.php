<?php
 session_start();
 
require_once ('../../system/inc/config.php');

if(isset($_POST)){

    $Id_supplier = $_POST['Id_supplier'];
    $Nama = $_POST['Nama'];
    
    $button = mysql_real_escape_string($_POST['button']);
    
$sql = null;


if($button == 'Create') {
    
        
        $sql = "INSERT INTO supplier(Nama)
                VALUES('$Nama')";
    
}else if($button== 'Update') {
    $sql = "update supplier set Nama='$Nama' where Id_supplier='$Id_supplier'";
	
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	header('location:../index2.php?mod=supplier&pg=supplier_list');
} else {
	header('location:../index2.php?mod=supplier&pg=supplier_form');
}
mysql_close();
}
?>
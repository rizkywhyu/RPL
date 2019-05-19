<?php
 session_start();
 
require_once ('../../system/inc/config.php');

if(isset($_POST)){

    $Id_petugas = $_POST['Id_petugas'];
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $Telepon = $_POST['Telepon'];
    $Level = $_POST['Level'];
    $button = mysql_real_escape_string($_POST['button']);
    
$sql = null;


if($button == 'Create') {
    $data_anggota = array();
    $cek=null;
    $sqlect = "select * from petugas where Id_petugas='$Id_petugas' ";
    $resultlect = mysql_query($sqlect) or die(mysql_error());
    while($row = mysql_fetch_object($resultlect))
        $data_petugas[] = $row;
   foreach ($data_petugas as $petugas)
            {
       $cek=$petugas->Nama;
   }
    if(!is_null($cek)){
        header('location:../index1.php?mod=petugas&pg=petugas_form');
        
    }
    else{
        
        $sql = "INSERT INTO petugas(Id_petugas,Nama,Username,Password,Alamat,Telepon,Level)
                VALUES('$Id_petugas','$Nama','$Username','$Password','$Alamat','$Telepon','$Level')";
    }
}else if($button== 'Update') {
    $sql = "update petugas set Nama='$Nama',
    Username='$Username',
    Password='$Password',
    Alamat='$Alamat',
    Telepon='$Telepon',
    Level='$Level' where Id_petugas='$Id_petugas'";
	
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	header('location:../index1.php?mod=petugas&pg=petugas_list');
} else {
	header('location:../index1.php?mod=petugas&pg=petugas_form');
}
mysql_close();
}
?>
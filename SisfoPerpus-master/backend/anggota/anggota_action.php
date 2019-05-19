<?php
 session_start();
 
require_once ('../../system/inc/config.php');

if(isset($_POST)){

    
    $Id_anggota = $_POST['Id_anggota'];
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Email = $_POST['Email'];
    $Telepon = $_POST['Telepon'];
    $Jurusan = $_POST['Jurusan'];
    $button = mysql_real_escape_string($_POST['button']);
    
$sql = null;


if($button == 'Create') {
    $data_anggota = array();
    $cek=null;
    $sqlect = "select * from anggota where Id_anggota='$Id_anggota' ";
    $resultlect = mysql_query($sqlect) or die(mysql_error());
    while($row = mysql_fetch_object($resultlect))
        $data_anggota[] = $row;
   foreach ($data_anggota as $anggota)
            {
       $cek=$anggota->Nama;
   }
    if(!is_null($cek)){
        header('location:../index2.php?mod=anggota&pg=anggota_form');
        
    }
    else{
        
        $sql = "INSERT INTO anggota(Id_anggota,Nama,Alamat,Email,Telepon,Jurusan)
                VALUES('$Id_anggota','$Nama','$Alamat','$Email','$Telepon','$Jurusan')";
    }
}else if($button== 'Update') {
    $sql = "update anggota set Nama='$Nama',
    Alamat='$Alamat',
    Email='$Email',
    Telepon='$Telepon',
    Jurusan='$Jurusan' where Id_anggota='$Id_anggota'";
	
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	header('location:../index2.php?mod=anggota&pg=anggota_list');
} else {
	header('location:../index2.php?mod=anggota&pg=anggota_form');
}
mysql_close();
}
?>
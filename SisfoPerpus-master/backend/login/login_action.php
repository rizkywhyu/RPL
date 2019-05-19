<?php

 session_start();

require_once ('../../system/inc/config.php');
if(isset($_POST)){
$username = $_POST['username'];
$password = $_POST['password'];


$sql = "select  * from petugas
  where Username='$username'
  and Password='$password' ";

$sql_login = mysql_query($sql) or die(mysql_error());

while($hasil = mysql_fetch_object($sql_login))
        $data_petugas[] = $hasil;
   foreach ($data_petugas as $petugas)
            {
       $levelnya=$petugas->Level;
   }
    echo "$levelnya";
if(!is_null($levelnya)) {
    $_SESSION['username'] = $username;
    
    if($levelnya=="admin"){
        header("Location:../index2.php?mod=buku&pg=buku_list");
    }else{
        header("Location:../index1.php?mod=petugas&pg=petugas_list");
    }
	

	
	

} else {
    $_SESSION['error'] = "error";
	 header("Location: ../index.php");
}
}
?>
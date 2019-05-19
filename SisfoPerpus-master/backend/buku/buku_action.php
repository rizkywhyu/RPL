<?php
 session_start();
 
require_once ('../../system/inc/config.php');

if(isset($_POST)){



    $Id_buku = $_POST['Id_buku'];
    $Judul = $_POST['Judul'];
    $Pengarang = $_POST['Pengarang'];
    $Tahun = $_POST['Tahun'];
    $Penerbit = $_POST['Penerbit'];
    $Jenis = $_POST['Jenis'];
    $Stok_buku = $_POST['Stok_buku'];
   
    $tgl = date("Y-m-d",strtotime(str_replace('/','-',$Tanggal_suppli)));
    $button = mysql_real_escape_string($_POST['button']);
    
$sql = null;


if($button == 'Create') {
     $Id_supplier = $_POST['Id_supplier'];
    $Total_harga = $_POST['Total_harga'];
    $Tanggal_suppli = $_POST['Tanggal_suppli'];
    $Id_petugas = $_POST['Id_petugas'];
    $data_buku = array();
    $stoknya=null;
    $sqlect = "select * from buku where Id_buku='$Id_buku' ";
    $resultlect = mysql_query($sqlect) or die(mysql_error());
    while($row = mysql_fetch_object($resultlect))
        $data_buku[] = $row;
   foreach ($data_buku as $buku)
            {
       $stoknya=$buku->Stok_buku;
   }
    if(!is_null($stoknya)){
        $stok_aktual=$stoknya;
        $stokk=$Stok_buku;
        $stok_tambah=$stok_aktual+$stokk;
        $sql = "update buku set Stok_buku='$stok_tambah' where Id_buku='$Id_buku'";
        $sqle = "INSERT INTO suplai_buku(Id_supplier,Id_buku,Id_petugas,Total_harga,Tanggal_suppli,Jumlah_buku) VALUES('$Id_supplier','$Id_buku','$Id_petugas','$Total_harga','$tgl','$Stok_buku')";
    }
    else{
        
        $sql = "INSERT INTO buku(Id_buku,Judul,Pengarang,Tahun,Penerbit,Jenis,Stok_buku)
                VALUES('$Id_buku','$Judul','$Pengarang','$Tahun','$Penerbit','$Jenis','$Stok_buku')";
       $sqle = "INSERT INTO suplai_buku(Id_supplier,Id_buku,Id_petugas,Total_harga,Tanggal_suppli,Jumlah_buku) VALUES('$Id_supplier','$Id_buku','$Id_petugas','$Total_harga','$tgl','$Stok_buku')";
    }
}else if($button== 'Update') {
    $sql = "update buku set Judul='$Judul',
    Pengarang='$Pengarang',
    Tahun='$Tahun',
    Penerbit='$Penerbit',
    Jenis='$Jenis',
    Stok_buku='$stok_tambah' where Id_buku='$Id_buku'";
	
}

$result = mysql_query($sql) or die(mysql_error());
$resultt = mysql_query($sqle) or die(mysql_error());

//check if query successful
if ($result && $resultt) {
	header('location:../index2.php?mod=buku&pg=buku_list');
} else {
	header('location:../index2.php?mod=buku&pg=buku_form');
}
mysql_close();
}
?>


<?php
 session_start();
 
require_once ('../../system/inc/config.php');

if(isset($_POST)){

    
    
    $button = mysql_real_escape_string($_POST['button']);
    
$sql = null;


if($button == 'Create') {
    $Tanggal_pinjam = $_POST['Tanggal_pinjam'];
    $Id_buku = $_POST['Id_buku'];
    $Id_anggota = $_POST['Id_anggota'];
    $Id_petugas = $_POST['Id_petugas'];
     $date = date("Y-m-d",strtotime(str_replace('/','-',$Tanggal_pinjam)));
            $tgl_kembali=date("0000-00-00");
            $denda=0;
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
    $data_anggota = array();
    $Nama=null;
    $sqlectt = "select * from anggota where Id_anggota='$Id_anggota' ";
    $resultlectt = mysql_query($sqlectt) or die(mysql_error());
    while($roww = mysql_fetch_object($resultlectt))
        $data_anggota[] = $roww;
   foreach ($data_anggota as $anggota)
            {
       $Nama=$anggota->Nama;
   }
    if(!is_null($stoknya)&&!is_null($Nama)){
        $sql = "INSERT INTO peminjaman(Tanggal_pinjam,Tanggal_kembali,Denda,Id_buku,Id_anggota,Id_petugas)
            VALUES('$date','$tgl_kembali','$denda','$Id_buku','$Id_anggota','$Id_petugas')";
    }
    else{
        header('location:../index2.php?mod=peminjaman&pg=peminjaman_form');
    }
}
else if($button== 'Pengembalian') {
    $Tanggal_pinjam = $_POST['Tanggal_pinjam'];
    $Id_buku = $_POST['Id_buku'];
    $Id_anggota = $_POST['Id_anggota'];
    $Id_petugas = $_POST['Id_petugas'];
    $Tanggal_kembali = $_POST['Tanggal_kembali'];
    $Id_peminjaman = $_POST['Id_peminjaman'];
    
    $startTimeStamp = new DateTime(date("Y-m-d",strtotime(str_replace('/','-',$Tanggal_pinjam))));
            $endTimeStamp = new DateTime(date("Y-m-d",strtotime(str_replace('/','-',$Tanggal_kembali))));
            $diff =  $endTimeStamp->diff($startTimeStamp)->format("%a");
    
            $hari=7;
            $lama=abs($diff/$hari);
            $denda=$lama*15000;
            
    
    $sql = "update peminjaman set Tanggal_kembali='$Tanggal_kembali',
    Denda='$denda' where Id_peminjaman='$Id_peminjaman'";
	$resultt = mysql_query($sql) or die(mysql_error());
    header('location:../index2.php?mod=peminjaman&pg=peminjaman_read&id=$Id_peminjaman');
    
}
else if($button== 'Update') {
    $Tanggal_pinjam = $_POST['Tanggal_pinjam'];
    $Id_buku = $_POST['Id_buku'];
    $Id_anggota = $_POST['Id_anggota'];
    $Id_petugas = $_POST['Id_petugas'];
    $Tanggal_kembali = $_POST['Tanggal_kembali'];
    $Id_peminjaman = $_POST['Id_peminjaman'];
    
    $tgl_pinjam = date("Y-m-d",strtotime(str_replace('/','-',$Tanggal_pinjam)));
    $tgl_kembali = date("Y-m-d",strtotime(str_replace('/','-',$Tanggal_kembali)));
    
    $startTimeStamp = new DateTime(date("Y-m-d",strtotime(str_replace('/','-',$Tanggal_pinjam))));
            $endTimeStamp = new DateTime(date("Y-m-d",strtotime(str_replace('/','-',$Tanggal_kembali))));
    
            $diff =  $endTimeStamp->diff($startTimeStamp)->format("%a");
    
            $hari=7;
            $lama=abs($diff/$hari);
    
            $denda=$lama*15000;
    $sql = "update peminjaman set Tanggal_pinjam='$tgl_pinjam',
    Tanggal_kembali='$tgl_kembali',
    Denda='$denda',
    Id_buku='$Id_buku',
    Id_anggota='$Id_anggota',
    Id_petugas='$Id_petugas' where Id_peminjaman='$Id_peminjaman'";
    
	
}

$result = mysql_query($sql) or die(mysql_error());

//check if query successful
if ($result) {
	header('location:../index2.php?mod=peminjaman&pg=peminjaman_list');
} else {
	header('location:../index2.php?mod=peminjaman&pg=peminjaman_form');
}
mysql_close();
}
?>
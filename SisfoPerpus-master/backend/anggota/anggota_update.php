<?php

	if(isset($_GET['id'])) {
        $id = $_GET['id'];
		$data_anggota = array();
		$sql = "select * from anggota where Id_anggota='$id' ";
		$result = mysql_query($sql) or die(mysql_error());
        while($row = mysql_fetch_object($result))
        $data_anggota[] = $row;
        foreach ($data_anggota as $anggota)
        {
            $Id_anggota=$anggota->Id_anggota;
            $Nama=$anggota->Nama;
            $Alamat=$anggota->Alamat;
            $Email=$anggota->Email;
            $Telepon=$anggota->Telepon;
            $Jurusan=$anggota->Jurusan;
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
                
                  <h3 class='box-title'>ANGGOTA</h3>
                      <div class='box box-primary'>
        <form action="anggota/anggota_action.php" method="post"><table class='table table-bordered'>
            <tr><td>NIM </td>
            <td><input type="text" class="form-control" name="Id" id="Id" placeholder="NIM" value="<?php echo $Id_anggota; ?>" disabled required/ >
        </td>
	    <tr><td>Nama </td>
            <td><input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $Nama; ?>"  required/>
        </td>
	    <tr><td>Alamat </td>
            <td><input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Alamat" value="<?php echo $Alamat; ?>" required/>
        </td>
	    <tr><td>Email </td>
            <td><input type="email" class="form-control" name="Email" id="Email" placeholder="Email" value="<?php echo $Email; ?>" required/>
        </td>
	    <tr><td>Telepon </td>
            <td><input type="text" class="form-control" name="Telepon" id="Telepon" placeholder="Telepon" value="<?php echo $Telepon; ?>" required/>
        </td>
	    <tr><td>Jurusan </td>
            <td><select  name="Jurusan" id="Jurusan" class='form-control'>
                <option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
                <option value="S1 Ilmu Komputasi">S1 Ilmu Komputasi</option>
                <option value="S1 Teknik Telekomunikasi">S1 Teknik Telekomunikasi
                <option value="S1 Teknik Elektro">S1 Teknik Elektro
                <option value="S1 Teknik Fisika">S1 Teknik Fisika
                <option value="S1 Sistem komputer">S1 Sistem komputer
                <option value="S1 Teknik Industri">S1 Teknik Industri
                <option value="S1 Sistem Informasi">S1 Sistem Informasi
                <option value="S1 MBTI">S1 MBTI
                <option value="S1 Akuntansi">S1 Akuntansi
                <option value="S1 Ilmu Komunikasi">S1 Ilmu Komunikasi  
                <option value="S1 Administrasi Bisnis">S1 Administrasi Bisnis
                <option value="S1 Desain Komunikasi Visual">S1 Desain Komunikasi Visual
                <option value="S1 Desain Produk">S1 Desain Produk
                <option value="S1 Desain Interior">S1 Desain Interior
                <option value="S1 Seni Rupa Intermedia">S1 Seni Rupa Intermedia
                <option value="S1 Kriya Tekstil dan Mode (Fashion Design)">S1 Kriya Tekstil dan Mode (Fashion Design)
                <option value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi
                <option value="D3 Teknik Informatika">D3 Teknik Informatika
                <option value="D3 Manajeman Informatika">D3 Manajeman Informatika
                <option value="D3 Komputerisasi Akuntansi">D3 Komputerisasi Akuntansi
                <option value="D3 Teknik Komputer">D3 Teknik Komputer
                <option value="D3 Manajemen Pemasaran">D3 Manajemen Pemasaran
                <option value="D3 Perhotelan">D3 Perhotelan
                </select>
        </td>
            <input type="hidden" name="Id_anggota" value="<?php echo $Id_anggota; ?>" /> 
	   <tr><td colspan='2'><button type="submit" name="button" class="btn btn-primary" onclick="return confirm('Are you sure to update?')" value=<?=$button?>><?=$button?></button> 
	    <a href="index2.php?mod=anggota&pg=anggota_list" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
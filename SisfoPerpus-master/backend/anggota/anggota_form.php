<?php

	
		$button = "Create";
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
            <td><input type="text" class="form-control" name="Id_anggota" id="Id_anggota" placeholder="NIM" required / >
        </td>
	    <tr><td>Nama </td>
            <td><input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" required />
        </td>
	    <tr><td>Alamat </td>
            <td><input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Alamat" required />
        </td>
	    <tr><td>Email </td>
            <td><input type="email" class="form-control" name="Email" id="Email" placeholder="Email" required />
        </td>
	    <tr><td>Telepon </td>
            <td><input type="text" class="form-control" name="Telepon" id="Telepon" placeholder="Telepon" required />
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
            

	    <tr><td colspan='2'><button type="submit" class="btn btn-primary" name="button" value=<?=$button?>><?=$button?></button> 
	    <a href="index2.php?mod=anggota&pg=anggota_list" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->


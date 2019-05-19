<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>PELAPORAN</h3>
                      <div class='box box-primary'>
        <form ><table class='table table-bordered'>
        <br><p>Pilih Data yang ingin dicetak 
                <select placeholder="pilih" onchange="location = this.value;">
                    <option value="" disabled selected>pilih</option>
  <option value="index2.php?mod=buku&pg=buku_laporan">Inventaris Buku</option>
                    <option value="index2.php?mod=buku&pg=buku_laporan_pengadaan">Pengadaan Buku</option>
  <option value="index2.php?mod=anggota&pg=anggota_laporan">Anggota</option>
  <option value="index2.php?mod=peminjaman&pg=peminjaman_laporan">Peminjaman</option>
<option value="index2.php?mod=peminjaman&pg=peminjaman_laporan_pengembalian">Pengembalian</option>
<option value="index2.php?mod=peminjaman&pg=peminjaman_laporan_denda">Pemasukan Denda</option>
            </select></p>
            </br>
        <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <tr><td colspan='2'><button type="submit" class="btn btn-primary" disabled>Print</button> 
	    </td></tr>
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
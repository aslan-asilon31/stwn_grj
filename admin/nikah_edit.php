<?php 
include 'header.php'; 
$id = $_GET["id"];
$sql = mysqli_query($konek, "SELECT * FROM tbl_nikah WHERE id_nikah='$id'");
$data = mysqli_fetch_array($sql);
?>

<section class="statistics">
  <div class="container-fluid">
    <br>
    <form method="post" enctype="multipart/form-data">
      <!-- Hari/Tanggal, Waktu, Tempat, Dilayani Oleh -->
      <h5>JADWAL PENYELENGGARAAN</h5>
      <br>
      <div class="form-group row">
        <label class="col-sm-2">Tanggal</label>
        <div class="col-sm-4">
          <input type="date" name="tanggal_pengajuan" value="<?php echo $data['tanggal_pengajuan']; ?>" class="form-control">
        </div>
      </div>

      <?php
      if($_SESSION['level'] == "admin"){
      ?>
          <div class="form-group row">
            <label class="col-sm-2">Waktu</label>
            <div class="col-sm-4">
              <input type="text" name="waktu" class="form-control" value="<?php echo $data['waktu']; ?>" placeholder="Contoh: 10:00 WIB">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2">Tempat</label>
            <div class="col-sm-4">
              <input type="text" name="tempat" class="form-control" value="<?php echo $data['tempat']; ?>" placeholder="Contoh: Gereja GPPK">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2">Dilayani oleh</label>
            <div class="col-sm-4">
              <input type="text" name="dilayani_oleh" class="form-control" value="<?php echo $data['dilayani_oleh']; ?>" placeholder="Contoh: Pdt. Eliezeri Waruwu">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2">Mengetahui</label>
            <div class="col-sm-4">
              <input type="text" name="mengetahui" class="form-control" value="<?php echo $data['mengetahui']; ?>" placeholder="Contoh: Pdt. Eliezeri Waruwu">
            </div>
          </div>
      <?php
      }else{
      ?>

        <div class="form-group row">
          <label class="col-sm-2">Waktu</label>
          <div class="col-sm-4">
            <input type="text" name="waktu" class="form-control" value="<?php echo $data['waktu']; ?>" placeholder="Contoh: 10:00 WIB" Readonly>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2">Tempat</label>
          <div class="col-sm-4">
            <input type="text" name="tempat" class="form-control" value="<?php echo $data['tempat']; ?>" placeholder="Contoh: Gereja GPPK" Readonly>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2">Dilayani oleh</label>
          <div class="col-sm-4">
            <input type="text" name="dilayani_oleh" class="form-control" value="<?php echo $data['dilayani_oleh']; ?>" placeholder="Contoh: Pdt. Eliezeri Waruwu" Readonly>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2">Mengetahui</label>
          <div class="col-sm-4">
            <input type="text" name="mengetahui" class="form-control" value="<?php echo $data['mengetahui']; ?>" placeholder="Contoh: Pdt. Eliezeri Waruwu" Readonly>
          </div>
        </div>

      <?php
      }
      ?>
       
      <br>

      <!-- Bagian Calon Mempelai -->
      <h5>I. CALON MEMPELAI</h5>
      <br>
      <div class="form-row">
        <!-- Pria -->
        <div class="col-md-6">
          <h6>PRIA</h6>
          <div class="form-group"><label>Nama Lengkap</label><input type="text" name="nama_pria" value="<?php echo $data['nama_pria']; ?>" class="form-control"></div>
          <div class="form-group"><label>Tempat, Tanggal Lahir</label><input type="text" name="ttl_pria" value="<?php echo $data['ttl_pria']; ?>" class="form-control"></div>
          <div class="form-group"><label>Pekerjaan</label><input type="text" name="pekerjaan_pria" value="<?php echo $data['pekerjaan_pria']; ?>" class="form-control"></div>
          <div class="form-group"><label>Alamat</label><input type="text" name="alamat_pria" value="<?php echo $data['alamat_pria']; ?>" class="form-control"></div>
          <div class="form-group"><label>No HP / WA</label><input type="text" name="hp_pria" value="<?php echo $data['hp_pria']; ?>" class="form-control"></div>
          <div class="form-group"><label>Status Baptis</label>
            <select name="baptis_pria" class="form-control">
              <option value="Sudah" <?php if($data['baptis_pria'] == 'Sudah') echo 'selected'; ?>>Sudah</option>
              <option value="Belum" <?php if($data['baptis_pria'] == 'Belum') echo 'selected'; ?>>Belum</option>
            </select>
          </div>
          <div class="form-group"><label>Tempat / Tgl. Baptis</label><input type="text" name="tempat_baptis_pria" value="<?php echo $data['tempat_baptis_pria']; ?>" class="form-control"></div>
          <div class="form-group"><label>Tempat / Tgl. Sidi</label><input type="text" name="tempat_sidi_pria" value="<?php echo $data['tempat_sidi_pria']; ?>" class="form-control"></div>
        </div>

        <!-- Wanita -->
        <div class="col-md-6">
          <h6>WANITA</h6>
          <div class="form-group"><label>Nama Lengkap</label><input type="text" name="nama_wanita" value="<?php echo $data['nama_wanita']; ?>" class="form-control"></div>
          <div class="form-group"><label>Tempat, Tanggal Lahir</label><input type="text" name="ttl_wanita" value="<?php echo $data['ttl_wanita']; ?>" class="form-control"></div>
          <div class="form-group"><label>Pekerjaan</label><input type="text" name="pekerjaan_wanita" value="<?php echo $data['pekerjaan_wanita']; ?>" class="form-control"></div>
          <div class="form-group"><label>Alamat</label><input type="text" name="alamat_wanita" value="<?php echo $data['alamat_wanita']; ?>" class="form-control"></div>
          <div class="form-group"><label>No HP / WA</label><input type="text" name="hp_wanita" value="<?php echo $data['hp_wanita']; ?>" class="form-control"></div>
          <div class="form-group"><label>Status Baptis</label>
            <select name="baptis_wanita" class="form-control">
              <option value="Sudah" <?php if($data['baptis_wanita'] == 'Sudah') echo 'selected'; ?>>Sudah</option>
              <option value="Belum" <?php if($data['baptis_wanita'] == 'Belum') echo 'selected'; ?>>Belum</option>
            </select>
          </div>
          <div class="form-group"><label>Tempat / Tgl. Baptis</label><input type="text" name="tempat_baptis_wanita" value="<?php echo $data['tempat_baptis_wanita']; ?>" class="form-control"></div>
          <div class="form-group"><label>Tempat / Tgl. Sidi</label><input type="text" name="tempat_sidi_wanita" value="<?php echo $data['tempat_sidi_wanita']; ?>" class="form-control"></div>
        </div>
      </div>

      <br>
      <!-- Orang Tua -->
      <h5>II. ORANG TUA</h5>
      <br>
      <div class="form-row">
        <div class="col-md-6">
          <h6>PRIA</h6>
          <div class="form-group"><label>Ayah</label><input type="text" name="ayah_pria" value="<?php echo $data['ayah_pria']; ?>" class="form-control"></div>
          <div class="form-group"><label>Ibu</label><input type="text" name="ibu_pria" value="<?php echo $data['ibu_pria']; ?>" class="form-control"></div>
        </div>
        <div class="col-md-6">
          <h6>WANITA</h6>
          <div class="form-group"><label>Ayah</label><input type="text" name="ayah_wanita" value="<?php echo $data['ayah_wanita']; ?>" class="form-control"></div>
          <div class="form-group"><label>Ibu</label><input type="text" name="ibu_wanita" value="<?php echo $data['ibu_wanita']; ?>" class="form-control"></div>
        </div>
      </div>

      <br>
      <!-- Sumbangan -->
      <h5>III. SUMBANGAN</h5>
      <div class="form-group row">
        <label class="col-sm-2">Jumlah Sumbangan (Rp)</label>
        <div class="col-sm-10">
          <input type="number" name="sumbangan" value="<?php echo $data['sumbangan']; ?>" class="form-control" placeholder="Contoh: 500000">
        </div>
      </div>

      <!-- Tombol Submit -->
      <div class="form-group row">
        <div class="col-sm-12 text-right">
          <a href="javascript:history.back()" class="btn btn-secondary">KEMBALI</a>
          <input type="submit" name="btnedit" class="btn btn-primary" value="UPDATE">
        </div>
      </div>
    </form>
  </div>
</section>

<?php
if (isset($_POST["btnedit"])) {
  foreach ($_POST as $key => $value) {
    $$key = mysqli_real_escape_string($konek, $value);
  }

    if($_SESSION['level'] == "admin"){
      $update = mysqli_query($konek, "UPDATE tbl_nikah SET 
      tanggal_pengajuan='$tanggal_pengajuan',
      waktu='$waktu', tempat='$tempat',
      dilayani_oleh='$dilayani_oleh', mengetahui='$mengetahui',
      nama_pria='$nama_pria', ttl_pria='$ttl_pria', pekerjaan_pria='$pekerjaan_pria', alamat_pria='$alamat_pria', hp_pria='$hp_pria', baptis_pria='$baptis_pria',
      tempat_baptis_pria='$tempat_baptis_pria', tempat_sidi_pria='$tempat_sidi_pria',
      nama_wanita='$nama_wanita', ttl_wanita='$ttl_wanita', pekerjaan_wanita='$pekerjaan_wanita', alamat_wanita='$alamat_wanita', hp_wanita='$hp_wanita',
      baptis_wanita='$baptis_wanita', tempat_baptis_wanita='$tempat_baptis_wanita', tempat_sidi_wanita='$tempat_sidi_wanita',
      ayah_pria='$ayah_pria', ibu_pria='$ibu_pria', ayah_wanita='$ayah_wanita', ibu_wanita='$ibu_wanita',
      sumbangan='$sumbangan'
      WHERE id_nikah='$id'");
    }else{

      $update = mysqli_query($konek, "UPDATE tbl_nikah SET 
      tanggal_pengajuan='$tanggal_pengajuan',
      nama_pria='$nama_pria', ttl_pria='$ttl_pria', pekerjaan_pria='$pekerjaan_pria', alamat_pria='$alamat_pria', hp_pria='$hp_pria', baptis_pria='$baptis_pria',
      tempat_baptis_pria='$tempat_baptis_pria', tempat_sidi_pria='$tempat_sidi_pria',
      nama_wanita='$nama_wanita', ttl_wanita='$ttl_wanita', pekerjaan_wanita='$pekerjaan_wanita', alamat_wanita='$alamat_wanita', hp_wanita='$hp_wanita',
      baptis_wanita='$baptis_wanita', tempat_baptis_wanita='$tempat_baptis_wanita', tempat_sidi_wanita='$tempat_sidi_wanita',
      ayah_pria='$ayah_pria', ibu_pria='$ibu_pria', ayah_wanita='$ayah_wanita', ibu_wanita='$ibu_wanita',
      sumbangan='$sumbangan'
      WHERE id_nikah='$id'");

    }

    

  if ($update) {
    echo "<script>alert('Data berhasil diupdate'); location='nikah.php';</script>";
  } else {
    echo "<div class='alert alert-danger'>Update gagal: " . mysqli_error($konek) . "</div>";
  }
}
?>

<?php include 'footer.php'; ?>

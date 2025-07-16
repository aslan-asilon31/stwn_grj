<?php 
include'header.php'; 

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($konek, "SELECT * FROM tbl_baptis WHERE id_baptis='$id'"));
?>

<section class="statistics">
  <div class="container-fluid">
    <form method="post" enctype="multipart/form-data">
      <h5>JADWAL BAPTISAN</h5><br>
      <div class="form-group row">
        <label class="col-sm-2">Hari/Tanggal</label>
        <div class="col-sm-4"><input type="text" name="hari_tanggal" value="<?= $data['hari_tanggal'] ?>" class="form-control"></div>
        <?php
        if($_SESSION['level'] == "admin"){
        ?>
        <label class="col-sm-2">Waktu</label>
        <div class="col-sm-4"><input type="text" name="waktu" value="<?= $data['waktu'] ?>" class="form-control"></div>
        <?php
        }else{
        ?>
        <label class="col-sm-2">Waktu</label>
        <div class="col-sm-4"><input type="text" name="waktu" value="<?= $data['waktu'] ?>" class="form-control" Readonly></div>
        <?php
        }
        ?>
        
      </div>
      
      <?php
      if($_SESSION['level'] == "admin"){
      ?>
      <div class="form-group row">
        <label class="col-sm-2">Tempat</label>
        <div class="col-sm-4"><input type="text" name="tempat" value="<?= $data['tempat'] ?>" class="form-control"></div>
        <label class="col-sm-2">Dilayani oleh</label>
        <div class="col-sm-4"><input type="text" name="dilayani" value="<?= $data['dilayani'] ?>" class="form-control"></div>
      </div>
      <?php
      }else{
      ?>
      <div class="form-group row">
        <label class="col-sm-2">Tempat</label>
        <div class="col-sm-4"><input type="text" name="tempat" value="<?= $data['tempat'] ?>" class="form-control" Readonly></div>
        <label class="col-sm-2">Dilayani oleh</label>
        <div class="col-sm-4"><input type="text" name="dilayani" value="<?= $data['dilayani'] ?>" class="form-control" Readonly></div>
      </div>
      <?php
      }
      ?>
      

      <h5>A. YANG AKAN DIBAPTIS</h5><br>
      <div class="form-group"><label>Nama</label><input type="text" name="nama" value="<?= $data['nama'] ?>" class="form-control"></div>
      <div class="form-group"><label>Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control">
          <option value="Pria" <?= $data['jenis_kelamin'] == 'Pria' ? 'selected' : '' ?>>Pria</option>
          <option value="Wanita" <?= $data['jenis_kelamin'] == 'Wanita' ? 'selected' : '' ?>>Wanita</option>
        </select>
      </div>
      <div class="form-group"><label>Tempat & Tanggal Lahir</label><input type="text" name="ttl" value="<?= $data['ttl'] ?>" class="form-control"></div>
      <div class="form-group"><label>Alamat</label><textarea name="alamatnya" class="form-control" rows="3"><?= $data['alamatnya'] ?></textarea></div>

      <h5>B. ORANG TUA / WALI</h5><br>
      <div class="form-group row">
        <div class="col-sm-6"><label>Nama Ayah</label><input type="text" name="nama_ayah" value="<?= $data['nama_ayah'] ?>" class="form-control"></div>
        <div class="col-sm-6"><label>Nama Ibu</label><input type="text" name="nama_ibu" value="<?= $data['nama_ibu'] ?>" class="form-control"></div>
      </div>
      <div class="form-group row">
        <div class="col-sm-6"><label>Status Baptis/Sidi</label><input type="text" name="baptis_sidi" value="<?= $data['baptis_sidi'] ?>" class="form-control"></div>
        <div class="col-sm-6"><label>No. HP/WA</label><input type="text" name="hp" value="<?= $data['hp'] ?>" class="form-control"></div>
      </div>

      <h5>C. PARA SAKSI</h5><br>
      <div class="form-group row">
        <div class="col-sm-6"><label>Nama Saksi 1</label><input type="text" name="saksi1" value="<?= $data['saksi1'] ?>" class="form-control"></div>
        <div class="col-sm-6"><label>Nama Saksi 2</label><input type="text" name="saksi2" value="<?= $data['saksi2'] ?>" class="form-control"></div>
      </div>

      <h5>D. SUMBANGAN PENDAFTARAN</h5>
      <div class="form-group row">
        <label class="col-sm-2">Jumlah Sumbangan (Rp)</label>
        <div class="col-sm-10"><input type="number" name="sumbangan" value="<?= $data['sumbangan'] ?>" class="form-control"></div>
      </div>

      <h5>E. LAMPIRAN (Biarkan kosong jika tidak ingin mengganti)</h5><br>
      <br>
      <div class="form-group">
        <label>Fotocopy Akte Kelahiran</label>
        <input type="file" name="lampiran_akte" class="form-control">
        <?php if (!empty($data['lampiran_akte'])): ?>
          <small>File saat ini: <a href="<?php echo $data['lampiran_akte']; ?>" target="_blank">Lihat</a></small>
          <?php
            $ext = pathinfo($data['lampiran_akte'], PATHINFO_EXTENSION);
            if (in_array(strtolower($ext), ['jpg', 'jpeg', 'png', 'gif'])) {
              echo "<br><img src='{$data['lampiran_akte']}' style='max-width:200px; margin-top:10px;'>";
            } elseif ($ext == 'pdf') {
              echo "<br><embed src='{$data['lampiran_akte']}' width='100%' height='400px' type='application/pdf'>";
            }
          ?>
        <?php endif; ?>
      </div>

      <br>
      <div class="form-group">
        <label>Fotocopy Surat Nikah</label>
        <input type="file" name="lampiran_nikah" class="form-control">
        <?php if (!empty($data['lampiran_nikah'])): ?>
          <small>File saat ini: <a href="<?php echo $data['lampiran_nikah']; ?>" target="_blank">Lihat</a></small>
          <?php
            $ext = pathinfo($data['lampiran_nikah'], PATHINFO_EXTENSION);
            if (in_array(strtolower($ext), ['jpg', 'jpeg', 'png', 'gif'])) {
              echo "<br><img src='{$data['lampiran_nikah']}' style='max-width:200px; margin-top:10px;'>";
            } elseif ($ext == 'pdf') {
              echo "<br><embed src='{$data['lampiran_nikah']}' width='100%' height='400px' type='application/pdf'>";
            }
          ?>
        <?php endif; ?>
      </div>

      <br>
      <div class="form-group">
        <label>Fotocopy Surat Sidi</label>
        <input type="file" name="lampiran_sidi" class="form-control">
        <?php if (!empty($data['lampiran_sidi'])): ?>
          <small>File saat ini: <a href="<?php echo $data['lampiran_sidi']; ?>" target="_blank">Lihat</a></small>
          <?php
            $ext = pathinfo($data['lampiran_sidi'], PATHINFO_EXTENSION);
            if (in_array(strtolower($ext), ['jpg', 'jpeg', 'png', 'gif'])) {
              echo "<br><img src='{$data['lampiran_sidi']}' style='max-width:200px; margin-top:10px;'>";
            } elseif ($ext == 'pdf') {
              echo "<br><embed src='{$data['lampiran_sidi']}' width='100%' height='400px' type='application/pdf'>";
            }
          ?>
        <?php endif; ?>
      </div>
      
      <h5>F. LAIN-LAIN</h5>
      <div class="form-group"><label>Keterangan Tambahan</label><textarea name="lain_lain" class="form-control" rows="3"><?= $data['lain_lain'] ?></textarea></div>

      <div class="form-group row">
        <div class="col-sm-12 text-right">
          <a href="javascript:history.back()" class="btn btn-secondary">KEMBALI</a>
          <input type="submit" name="btnupdate" class="btn btn-primary" value="UPDATE">
        </div>
      </div>
    </form>
  </div>
</section>

<?php
if (isset($_POST['btnupdate'])) {
  function upload_file($field_name, $prefix, $old_file) {
    $target_dir = "upload/";
    if (!empty($_FILES[$field_name]['name'])) {
      $ext = pathinfo($_FILES[$field_name]['name'], PATHINFO_EXTENSION);
      $file_name = $prefix . '_' . time() . '.' . $ext;
      $file_path = $target_dir . $file_name;
      move_uploaded_file($_FILES[$field_name]['tmp_name'], $file_path);
      return $file_path;
    }
    return $old_file;
  }

  $akte = upload_file('lampiran_akte', 'akte', $data['lampiran_akte']);
  $nikah = upload_file('lampiran_nikah', 'nikah', $data['lampiran_nikah']);
  $sidi  = upload_file('lampiran_sidi', 'sidi', $data['lampiran_sidi']);

  if($_SESSION['level'] == "admin"){
    $update = mysqli_query($konek, "UPDATE tbl_baptis SET
    hari_tanggal='$_POST[hari_tanggal]', waktu='$_POST[waktu]', tempat='$_POST[tempat]', dilayani='$_POST[dilayani]',
    nama='$_POST[nama]', jenis_kelamin='$_POST[jenis_kelamin]', ttl='$_POST[ttl]', alamatnya='$_POST[alamatnya]',
    nama_ayah='$_POST[nama_ayah]', nama_ibu='$_POST[nama_ibu]', baptis_sidi='$_POST[baptis_sidi]', hp='$_POST[hp]',
    saksi1='$_POST[saksi1]', saksi2='$_POST[saksi2]', sumbangan='$_POST[sumbangan]',
    lampiran_akte='$akte', lampiran_nikah='$nikah', lampiran_sidi='$sidi', lain_lain='$_POST[lain_lain]'
    WHERE id='$id'");
  }else{
    $update = mysqli_query($konek, "UPDATE tbl_baptis SET
    hari_tanggal='$_POST[hari_tanggal]', nama='$_POST[nama]', jenis_kelamin='$_POST[jenis_kelamin]', ttl='$_POST[ttl]', alamatnya='$_POST[alamatnya]',
    nama_ayah='$_POST[nama_ayah]', nama_ibu='$_POST[nama_ibu]', baptis_sidi='$_POST[baptis_sidi]', hp='$_POST[hp]',
    saksi1='$_POST[saksi1]', saksi2='$_POST[saksi2]', sumbangan='$_POST[sumbangan]',
    lampiran_akte='$akte', lampiran_nikah='$nikah', lampiran_sidi='$sidi', lain_lain='$_POST[lain_lain]'
    WHERE id='$id'");
  }

  

  if ($update) {
    echo "<script>alert('Data berhasil diupdate!'); window.location='baptis.php';</script>";
  } else {
    echo "<script>alert('Gagal update: " . mysqli_error($konek) . "');</script>";
  }
}

include'footer.php';
?>

<?php
include 'header.php';

// If an ID is passed in the URL, fetch the existing record to edit
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id) {
  $data = mysqli_fetch_assoc(mysqli_query($konek, "SELECT * FROM tbl_baptis WHERE id_baptis='$id'"));
} else {
  $data = [];
}

?>

<section class="statistics">
  <div class="container-fluid">
    <div class="row d-flex">
      <div class="col-lg-12">
        <form method="POST" enctype="multipart/form-data">
      </div>
    </div>
  </div>
</section>

<ul class="breadcrumb">
  <li class="breadcrumb-item"><a href="master.php">Home</a></li>
  <li class="breadcrumb-item active">Master</li>
  <li class="breadcrumb-item active">Formulir Baptis</li>
</ul>

<section class="statistics">
  <div class="container-fluid">
    <form method="POST" enctype="multipart/form-data">
      <!-- Jadwal Pelayanan Baptisan -->
      <h5>JADWAL BAPTISAN</h5><br>
      <div class="form-group row">
        <label class="col-sm-2">Hari/Tanggal</label>
        <div class="col-sm-4">
          <input type="datetime-local" name="hari_tanggal" value="<?= isset($data['hari_tanggal']) ? $data['hari_tanggal'] : '' ?>" class="form-control" required>
        </div>
      </div>

      <!-- Waktu -->
      <div class="form-group row">
        <label class="col-sm-2">Waktu</label>
        <div class="col-sm-4">
          <input type="time" name="waktu" value="<?= isset($data['waktu']) ? $data['waktu'] : '' ?>" class="form-control" required>
        </div>
      </div>

      <!-- Data yang Akan Dibaptis -->
      <h5>A. YANG AKAN DIBAPTIS</h5><br>
      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="<?= isset($data['nama']) ? $data['nama'] : '' ?>" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control" required>
          <option value="Pria" <?= isset($data['jenis_kelamin']) && $data['jenis_kelamin'] == 'Pria' ? 'selected' : '' ?>>Pria</option>
          <option value="Wanita" <?= isset($data['jenis_kelamin']) && $data['jenis_kelamin'] == 'Wanita' ? 'selected' : '' ?>>Wanita</option>
        </select>
      </div>
      <div class="form-group">
        <label>Tempat & Tanggal Lahir</label>
        <input type="text" name="ttl" value="<?= isset($data['ttl']) ? $data['ttl'] : '' ?>" class="form-control" required>
      </div>
      <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamatnya" class="form-control" rows="3" required><?= isset($data['alamatnya']) ? $data['alamatnya'] : '' ?></textarea>
      </div>

      <h5>B. ORANG TUA / WALI</h5><br>
      <div class="form-group row">
        <div class="col-sm-6">
          <label>Nama Ayah</label>
          <input type="text" name="nama_ayah" value="<?= isset($data['nama_ayah']) ? $data['nama_ayah'] : '' ?>" class="form-control" required>
        </div>
        <div class="col-sm-6">
          <label>Nama Ibu</label>
          <input type="text" name="nama_ibu" value="<?= isset($data['nama_ibu']) ? $data['nama_ibu'] : '' ?>" class="form-control" required>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-6">
          <label>Status Baptis/Sidi</label>
          <input type="text" name="baptis_sidi" value="<?= isset($data['baptis_sidi']) ? $data['baptis_sidi'] : '' ?>" class="form-control" placeholder="Ayah (Sudah/Belum), Ibu (Sudah/Belum)" required>
        </div>
        <div class="col-sm-6">
          <label>No. HP/WA</label>
          <input type="text" name="hp" value="<?= isset($data['hp']) ? $data['hp'] : '' ?>" class="form-control" required>
        </div>
      </div>

      <h5>C. PARA SAKSI</h5><br>
      <div class="form-group row">
        <div class="col-sm-6">
          <label>Nama Saksi 1</label>
          <input type="text" name="saksi1" value="<?= isset($data['saksi1']) ? $data['saksi1'] : '' ?>" class="form-control" required>
        </div>
        <div class="col-sm-6">
          <label>Nama Saksi 2</label>
          <input type="text" name="saksi2" value="<?= isset($data['saksi2']) ? $data['saksi2'] : '' ?>" class="form-control" required>
        </div>
      </div>

      <h5>D. SUMBANGAN PENDAFTARAN</h5>
      <div class="form-group row">
        <label class="col-sm-2">Jumlah Sumbangan (Rp)</label>
        <div class="col-sm-10">
          <input type="number" name="sumbangan" value="<?= isset($data['sumbangan']) ? $data['sumbangan'] : '' ?>" class="form-control" placeholder="Contoh: 500000" required>
        </div>
      </div>

      <h5>E. LAMPIRAN (Biarkan kosong jika tidak ingin mengganti)</h5><br>
      <br>
      <div class="form-group">
        <label>Fotocopy Akte Kelahiran</label>
        <input type="file" name="lampiran_akte" class="form-control">
        <?php if (!empty($data['lampiran_akte'])): ?>
          <small>File saat ini: <a href="<?= $data['lampiran_akte'] ?>" target="_blank">Lihat</a></small>
        <?php endif; ?>
      </div>

      <br>
      <div class="form-group">
        <label>Fotocopy Surat Nikah</label>
        <input type="file" name="lampiran_nikah" class="form-control">
        <?php if (!empty($data['lampiran_nikah'])): ?>
          <small>File saat ini: <a href="<?= $data['lampiran_nikah'] ?>" target="_blank">Lihat</a></small>
        <?php endif; ?>
      </div>

      <br>
      <div class="form-group">
        <label>Fotocopy Surat Sidi</label>
        <input type="file" name="lampiran_sidi" class="form-control">
        <?php if (!empty($data['lampiran_sidi'])): ?>
          <small>File saat ini: <a href="<?= $data['lampiran_sidi'] ?>" target="_blank">Lihat</a></small>
        <?php endif; ?>
      </div>

      <h5>F. LAIN-LAIN</h5>
      <div class="form-group">
        <label>Keterangan Tambahan</label>
        <textarea name="lain_lain" class="form-control" rows="3"><?= isset($data['lain_lain']) ? $data['lain_lain'] : '' ?></textarea>
      </div>

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
  function upload_file($field_name, $prefix, $old_file)
  {
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

  $update = mysqli_query($konek, "UPDATE tbl_baptis SET
    hari_tanggal='$_POST[hari_tanggal]', waktu='$_POST[waktu]', tempat='$_POST[tempat]', dilayani='$_POST[dilayani]',
    nama='$_POST[nama]', jenis_kelamin='$_POST[jenis_kelamin]', ttl='$_POST[ttl]', alamatnya='$_POST[alamatnya]',
    nama_ayah='$_POST[nama_ayah]', nama_ibu='$_POST[nama_ibu]', baptis_sidi='$_POST[baptis_sidi]', hp='$_POST[hp]',
    saksi1='$_POST[saksi1]', saksi2='$_POST[saksi2]', sumbangan='$_POST[sumbangan]',
    lampiran_akte='$akte', lampiran_nikah='$nikah', lampiran_sidi='$sidi', lain_lain='$_POST[lain_lain]'
    WHERE id_baptis='$id'");

  if ($update) {
    echo "<script>alert('Data berhasil diupdate!'); window.location='baptis.php';</script>";
  } else {
    echo "<script>alert('Gagal update: " . mysqli_error($konek) . "');</script>";
  }
}

include 'footer.php';
?>
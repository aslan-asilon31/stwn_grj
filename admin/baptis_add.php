<?php 
include'header.php'; ?>
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              <form method="POST" enctype="multipart/form-data">
        </div>
      </section>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="master.php">Home</a></li>
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active"> Formulir Pemberkatan Nikah</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <form method="post" enctype="multipart/form-data">
            <!-- Jadwal Pelayanan Baptisan -->
            <h5>JADWAL BAPTISAN</h5>
            <br>
            <div class="form-group row">
              <label class="col-sm-2">Hari/Tanggal</label>
              <div class="col-sm-4"><input type="text" name="hari_tanggal" class="form-control"></div>
            </div>

            <!-- Data yang Akan Dibaptis -->
            <h5>A. YANG AKAN DIBAPTIS</h5>
            <br>
            <div class="form-group"><label>Nama</label><input type="text" name="nama" class="form-control"></div>
            <div class="form-group"><label>Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control">
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
              </select>
            </div>
            <div class="form-group"><label>Tempat & Tanggal Lahir</label><input type="text" name="ttl" class="form-control"></div>
            <div class="form-group"><label>Alamat</label><textarea name="alamatnya" class="form-control" rows="3"></textarea></div>
            <!-- Orang Tua / Wali -->
            <h5>B. ORANG TUA / WALI</h5>
            <br>
            <div class="form-group row">
              <div class="col-sm-6">
                <label>Nama Ayah</label><input type="text" name="nama_ayah" class="form-control">
              </div>
              <div class="col-sm-6">
                <label>Nama Ibu</label><input type="text" name="nama_ibu" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6">
                <label>Status Baptis/Sidi</label>
                <input type="text" name="baptis_sidi" class="form-control" placeholder="Ayah (Sudah/Belum), Ibu (Sudah/Belum)">
              </div>
              <div class="col-sm-6">
                <label>No. HP/WA</label><input type="text" name="hp" class="form-control">
              </div>
            </div>

            <!-- Saksi -->
            <h5>C. PARA SAKSI</h5>
            <br>
            <div class="form-group row">
              <div class="col-sm-6"><label>Nama Saksi 1</label><input type="text" name="saksi1" class="form-control"></div>
              <div class="col-sm-6"><label>Nama Saksi 2</label><input type="text" name="saksi2" class="form-control"></div>
            </div>

            <!-- Sumbangan -->
            <h5>D. SUMBANGAN PENDAFTARAN</h5>
            <div class="form-group row">
              <label class="col-sm-2">Jumlah Sumbangan (Rp)</label>
              <div class="col-sm-10">
                <input type="number" name="sumbangan" class="form-control" placeholder="Contoh: 500000">
              </div>
            </div>

            <!-- Lampiran -->
            <h5>E. LAMPIRAN</h5>
            <br>
            <div class="form-group"><label>Fotocopy Akte Kelahiran</label><input type="file" name="lampiran_akte" class="form-control"></div>
            <div class="form-group"><label>Fotocopy Surat Nikah</label><input type="file" name="lampiran_nikah" class="form-control"></div>
            <div class="form-group"><label>Fotocopy Surat Sidi</label><input type="file" name="lampiran_sidi" class="form-control"></div>

            <!-- Lain-lain -->
            <h5>F. LAIN-LAIN</h5>
            <div class="form-group"><label>Keterangan Tambahan</label><textarea name="lain_lain" class="form-control" rows="3"></textarea></div>

            <!-- Tombol Submit dan Kembali -->
            <div class="form-group row">
              <div class="col-sm-12 text-right">
                <a href="javascript:history.back()" class="btn btn-secondary">KEMBALI</a>
                <input type="submit" name="btnsimpan" class="btn btn-primary" value="SUBMIT">
              </div>
            </div>
          </form>
        </div>
      </section>

      </form>

        <?php
          if (isset($_POST['btnsimpan'])) {
            include 'koneksi.php';

            // Upload file
            function upload_file($field_name, $prefix) {
              $target_dir = "upload/";
              $file = $_FILES[$field_name];
              if ($file['error'] === 0) {
                $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
                $file_name = $prefix . '_' . time() . '.' . $ext;
                $file_path = $target_dir . $file_name;
                move_uploaded_file($file['tmp_name'], $file_path);
                return $file_path;
              }
              return null;
            }

            $akte = upload_file('lampiran_akte', 'akte');
            $nikah = upload_file('lampiran_nikah', 'nikah');
            $sidi = upload_file('lampiran_sidi', 'sidi');

            $sql = mysqli_query($konek, "INSERT INTO tbl_baptis (
              hari_tanggal, nama, jenis_kelamin, ttl, alamatnya,
              nama_ayah, nama_ibu, baptis_sidi, hp,
              saksi1, saksi2, sumbangan,
              lampiran_akte, lampiran_nikah, lampiran_sidi, lain_lain, id_jemaat
            ) VALUES (
              '$_POST[hari_tanggal]', '$_POST[waktu]', '$_POST[tempat]', '$_POST[dilayani]',
              '$_POST[nama]', '$_POST[jenis_kelamin]', '$_POST[ttl]', '$_POST[alamatnya]',
              '$_POST[nama_ayah]', '$_POST[nama_ibu]', '$_POST[baptis_sidi]', '$_POST[hp]',
              '$_POST[saksi1]', '$_POST[saksi2]', '$_POST[sumbangan]',
              '$akte', '$nikah', '$sidi', '$_POST[lain_lain]', '$_SESSION[id_user]'
            )");

            if ($sql) {
              echo "<script>alert('Data berhasil disimpan!'); window.location='baptis.php';</script>";
            } else {
              echo "<script>alert('Gagal menyimpan: " . mysqli_error($konek) . "');</script>";
            }
          }
          ?>

<?php include'footer.php'; ?>
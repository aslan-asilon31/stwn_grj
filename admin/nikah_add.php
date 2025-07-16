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
              <!-- Hari/Tanggal, Waktu, Tempat, Dilayani Oleh -->
              <h5>JADWAL PENYELENGGARAAN</h5>
              <br>
              <div class="form-group row">
                <label class="col-sm-2">Tanggal</label>
                <div class="col-sm-4">
                  <input type="date" name="tanggal_pengajuan" class="form-control">
                </div>
              </div>
              <br>
              <!-- Bagian Calon Mempelai -->
              <h5>I. CALON MEMPELAI</h5>
              <br>
              <div class="form-row">
                <!-- Pria -->
                <div class="col-md-6">
                  <h6>PRIA</h6>
                  <div class="form-group"><label>Nama Lengkap</label><input type="text" name="nama_pria" class="form-control"></div>
                  <div class="form-group"><label>Tempat, Tanggal Lahir</label><input type="text" name="ttl_pria" class="form-control"></div>
                  <div class="form-group"><label>Pekerjaan</label><input type="text" name="pekerjaan_pria" class="form-control"></div>
                  <div class="form-group"><label>Alamat</label><input type="text" name="alamat_pria" class="form-control"></div>
                  <div class="form-group"><label>No HP / WA</label><input type="text" name="hp_pria" class="form-control"></div>
                  <div class="form-group"><label>Status Baptis</label>
                    <select name="baptis_pria" class="form-control">
                      <option>Sudah</option><option>Belum</option>
                    </select>
                  </div>
                  <div class="form-group"><label>Tempat / Tgl. Baptis</label><input type="text" name="tempat_baptis_pria" class="form-control"></div>
                  <div class="form-group"><label>Tempat / Tgl. Sidi</label><input type="text" name="tempat_sidi_pria" class="form-control"></div>
                </div>

                <!-- Wanita -->
                <div class="col-md-6">
                  <h6>WANITA</h6>
                  <div class="form-group"><label>Nama Lengkap</label><input type="text" name="nama_wanita" class="form-control"></div>
                  <div class="form-group"><label>Tempat, Tanggal Lahir</label><input type="text" name="ttl_wanita" class="form-control"></div>
                  <div class="form-group"><label>Pekerjaan</label><input type="text" name="pekerjaan_wanita" class="form-control"></div>
                  <div class="form-group"><label>Alamat</label><input type="text" name="alamat_wanita" class="form-control"></div>
                  <div class="form-group"><label>No HP / WA</label><input type="text" name="hp_wanita" class="form-control"></div>
                  <div class="form-group"><label>Status Baptis</label>
                    <select name="baptis_wanita" class="form-control">
                      <option>Sudah</option><option>Belum</option>
                    </select>
                  </div>
                  <div class="form-group"><label>Tempat / Tgl. Baptis</label><input type="text" name="tempat_baptis_wanita" class="form-control"></div>
                  <div class="form-group"><label>Tempat / Tgl. Sidi</label><input type="text" name="tempat_sidi_wanita" class="form-control"></div>
                </div>
              </div>

              <br>
              <!-- Orang Tua -->
              <h5>II. ORANG TUA</h5>
              <br>
              <div class="form-row">
                <div class="col-md-6">
                  <h6>PRIA</h6>
                  <div class="form-group"><label>Ayah</label><input type="text" name="ayah_pria" class="form-control"></div>
                  <div class="form-group"><label>Ibu</label><input type="text" name="ibu_pria" class="form-control"></div>
                </div>
                <div class="col-md-6">
                  <h6>WANITA</h6>
                  <div class="form-group"><label>Ayah</label><input type="text" name="ayah_wanita" class="form-control"></div>
                  <div class="form-group"><label>Ibu</label><input type="text" name="ibu_wanita" class="form-control"></div>
                </div>
              </div>

              <br>
              <!-- Sumbangan -->
              <h5>III. SUMBANGAN</h5>
              <div class="form-group row">
                <label class="col-sm-2">Jumlah Sumbangan (Rp)</label>
                <div class="col-sm-10">
                  <input type="number" name="sumbangan" class="form-control" placeholder="Contoh: 500000">
                </div>
              </div>

              <!-- Tombol Submit -->
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
          if (isset($_POST["btnsimpan"])){
              $tanggal_pengajuan=$_POST['tanggal_pengajuan'];
              $nama_pria=$_POST['nama_pria'];
              $ttl_pria=$_POST['ttl_pria'];
              $pekerjaan_pria=$_POST['pekerjaan_pria'];
              $alamat_pria=$_POST['alamat_pria'];
              $hp_pria=$_POST['hp_pria'];
              $baptis_pria=$_POST['baptis_pria'];
              $tempat_baptis_pria=$_POST['tempat_baptis_pria'];
              $tempat_sidi_pria=$_POST['tempat_sidi_pria'];
              $nama_wanita=$_POST['nama_wanita'];
              $ttl_wanita=$_POST['ttl_wanita'];
              $pekerjaan_wanita=$_POST['pekerjaan_wanita'];
              $alamat_wanita=$_POST['alamat_wanita'];
              $hp_wanita=$_POST['hp_wanita'];
              $baptis_wanita=$_POST['baptis_wanita'];
              $tempat_baptis_wanita=$_POST['tempat_baptis_wanita'];
              $tempat_sidi_wanita=$_POST['tempat_sidi_wanita'];
              $ayah_pria=$_POST['ayah_pria'];
              $ibu_pria=$_POST['ibu_pria'];
              $ayah_wanita=$_POST['ayah_wanita'];
              $ibu_wanita=$_POST['ibu_wanita'];
              $sumbangan=$_POST['sumbangan'];

              $query = mysqli_query($konek, "INSERT INTO tbl_nikah (
                  tanggal_pengajuan,
                  nama_pria,
                  ttl_pria,
                  pekerjaan_pria,
                  alamat_pria,
                  hp_pria,
                  baptis_pria,
                  tempat_baptis_pria,
                  tempat_sidi_pria,
                  nama_wanita,
                  ttl_wanita,
                  pekerjaan_wanita,
                  alamat_wanita,
                  hp_wanita,
                  baptis_wanita,
                  tempat_baptis_wanita,
                  tempat_sidi_wanita,
                  ayah_pria,
                  ibu_pria,
                  ayah_wanita,
                  ibu_wanita,
                  sumbangan,
                  id_jemaat
                )VALUES (
                  '$tanggal_pengajuan',
                  '$nama_pria',
                  '$ttl_pria',
                  '$pekerjaan_pria',
                  '$alamat_pria',
                  '$hp_pria',
                  '$baptis_pria',
                  '$tempat_baptis_pria',
                  '$tempat_sidi_pria',
                  '$nama_wanita',
                  '$ttl_wanita',
                  '$pekerjaan_wanita',
                  '$alamat_wanita',
                  '$hp_wanita',
                  '$baptis_wanita',
                  '$tempat_baptis_wanita',
                  '$tempat_sidi_wanita',
                  '$ayah_pria',
                  '$ibu_pria',
                  '$ayah_wanita',
                  '$ibu_wanita',
                  '$sumbangan',
                  '$_SESSION[id_user]'
                )");

                if ($query) {
                    echo "<script>alert('Data Anda Berhasil di Simpan'); window.location='nikah.php';</script>";
                } else {
                    echo "<script>alert('Gagal simpan: " . mysqli_error($konek) . "');</script>";
                }
              }
            ?>

<?php include'footer.php'; ?>
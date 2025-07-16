<?php include'header.php'; ?>
<head>
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<title>Pendaftaran GGPK Bekasi</title>
</head>
	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="img/gambar/janji.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title"><span>PENDAFTARAN</span>JEMAAT</div>
							<div class="breadcrumbs">
								<ul>
									<li><a href="index.php">Beranda</a></li>
									<li>Pendaftaran Jemaat</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




  <section id="contact" class="wow fadeInUp">
    <div class="contact">
      <div class="container">
          <div class="section-header">
            <h3>FORM PENDAFTARAN JEMAAT</h3>
              <p></p>
              <br>
          </div>
          <div class="form">
            <div id="errormessage"></div>
              <form method="POST">
                <div class="form-row">

                  <label>Nama Lengkap</label>
                  <input type="text" name="nm_lengkap" placeholder="" class="form-control" required oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong')" oninput="setCustomValidity('')"> </input>
                  
                  <label>Jenis Kelamin</label>
                  <select class="form-control" name="jns_kelamin">
                      <option>-Pilih-</option>
                      <option>Laki-Laki</option>
                      <option>Perempuan</option>
                  </select>
    
                  <label>Email </label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email"required oninvalid="this.setCustomValidity('Email Perusahaan Masih Kosong')" oninput="setCustomValidity('')"> </input>
                  
                  <div class="validation"></div>

                  <label>HandPhone</label>
                  <input type="text" name="no_hp" placeholder="" class="form-control" required oninvalid="this.setCustomValidity('HandPhone Masih Kosong')" oninput="setCustomValidity('')"> </input>
                  
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" rows="2" data-rule="required" data-msg="Pesan Tidak Boleh Kosong" placeholder="Alamat"></textarea><div class="validation"></div>

                  <label>Username</label>
                  <input type="text" name="username" placeholder="" class="form-control" required oninvalid="this.setCustomValidity('Username Masih Kosong')" oninput="setCustomValidity('')"> </input>

                  <label>Password</label>
                  <input type="text" name="password" placeholder="" class="form-control" required oninvalid="this.setCustomValidity('Password Masih Kosong')" oninput="setCustomValidity('')"> </input>

                </div>
                <div class="modal-footer">
                  <input type="submit" name="btnsimpan" class="btn btn-primary" value="DAFTAR">
                </div>
              </form>
	            <?php
                if (isset($_POST["btnsimpan"])) {
                  $nm_lengkap = mysqli_real_escape_string($konek, $_POST['nm_lengkap']);
                  $jns_kelamin = mysqli_real_escape_string($konek, $_POST['jns_kelamin']);
                  $email = mysqli_real_escape_string($konek, $_POST['email']);
                  $no_hp = mysqli_real_escape_string($konek, $_POST['no_hp']);
                  $alamat = mysqli_real_escape_string($konek, $_POST['alamat']);
                  $username = mysqli_real_escape_string($konek, $_POST['username']);
                  $password = mysqli_real_escape_string($konek, $_POST['password']);

                  // Cek apakah username sudah digunakan
                  $cek = mysqli_query($konek, "SELECT * FROM tbl_jemaat WHERE username = '$username'");
                  if (mysqli_num_rows($cek) > 0) {
                    echo "<script>alert('Username sudah digunakan, silakan pilih username lain!');history.go(-1);</script>";
                  } else {
                    // Lanjut simpan
                    $simpan = mysqli_query($konek, "INSERT INTO tbl_jemaat 
                      (tgl_daftar, nm_lengkap, jns_kelamin, email, no_hp, alamat, username, password) 
                      VALUES 
                      (now(),'$nm_lengkap','$jns_kelamin','$email','$no_hp','$alamat','$username','$password')");

                    if ($simpan) {
                      echo "<script>alert('Pendaftaran berhasil, silakan login');document.location.href='index.php';</script>";
                    } else {
                      echo "Gagal untuk menyimpan data.";
                    }
                  }
                }
              ?>


          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include'footer.php'; ?>
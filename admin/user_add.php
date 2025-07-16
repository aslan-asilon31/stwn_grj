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
            <li class="breadcrumb-item"><a href="master.php"></a></li>
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Pengguna</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Nama Lengkap</label>
                      <div class="col-sm-10">
                        <input type="text" name="nama_lengkap" class="form-control is-valid" placeholder="Nama Lengkap">
                      </div>
                </div>

				<div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Telepon</label>
                      <div class="col-sm-10">
                        <input type="text" name="telepon" class="form-control is-valid" placeholder="081282165618">
                      </div>
                </div>

				<div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Username</label>
                      <div class="col-sm-10">
                        <input type="text" name="user_name" class="form-control is-valid">
                      </div>
                </div>

				<div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Password</label>
                      <div class="col-sm-10">
                        <input type="text" name="password" class="form-control is-valid">
                      </div>
                </div>

                <input type="submit" name="btnsimpan" class="btn btn-primary" value="SIMPAN">
                <button type="button" class="btn btn-secondary" onclick="history.back()">KEMBALI</button>
                </div>
              </div>
          </div>
      </section> 
      </form>            

        <?php

                              if (isset($_POST["btnsimpan"])){
                                  $nama_lengkap=$_POST['nama_lengkap'];
                                  $telepon=$_POST['telepon'];
                                  $user_name=$_POST['user_name'];
								  $password=$_POST['password'];
                                $simpan = mysqli_query($konek,"INSERT INTO tbl_user (nama_lengkap,telepon,user_name,password) VALUES ('$nama_lengkap','$telepon','$user_name','$password')");
                                echo "Data Berhasil di simpan";
                            ?>
                            <script type="text/javascript">
                            alert('Data Anda Berhasil di Simpan');
                            document.location.href="user.php";
                            </script>
                          <?php
                        }
                      ?>



 


<?php include'footer.php'; ?>
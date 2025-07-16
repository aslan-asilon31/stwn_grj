<?php 
include'header.php'; 
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_user WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
?>
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              <form method="POST" enctype="multipart/form-data">
        </div>
      </section>
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="master.php">Home</a></li>
            <li class="breadcrumb-item active">Master <li class="breadcrumb-item active">Edit  Pengguna</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Nama Lengkap</label>
                      <div class="col-sm-10">
                        <input type="text" name="nama_lengkap" value="<?php echo $data['nama_lengkap'] ?>" class="form-control is-valid" placeholder="Kategori Berita">
                      </div>
                </div>
                 <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Telepon</label>
                      <div class="col-sm-10">
                        <input type="text" name="telepon" value="<?php echo $data['telepon'] ?>" class="form-control is-valid" placeholder="Kategori Berita">
                      </div>
                </div>

                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Username</label>
                      <div class="col-sm-10">
                        <input type="text" name="user_name" value="<?php echo $data['user_name'] ?>" class="form-control is-valid" placeholder="Kategori Berita">
                      </div>
                </div>

                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Telepon</label>
                      <div class="col-sm-10">
                        <input type="text" name="password" value="<?php echo $data['password'] ?>" class="form-control is-valid" placeholder="Kategori Berita">
                      </div>
                </div>

                <input type="submit" name="btnedit" class="btn btn-primary" value="UPDATE">
                <button type="button" class="btn btn-secondary" onclick="history.back()">KEMBALI</button>
                </div>
              </div>
          </div>
      </section> 
      </form>
            <?php
                 if (isset($_POST["btnedit"])){
                                  $nama_lengkap=$_POST['nama_lengkap'];
                                  $telepon=$_POST['telepon'];
                                  $user_name=$_POST['user_name'];
                                  $password=$_POST['password'];
                  $edit = mysqli_query($konek,"UPDATE  tbl_user SET nama_lengkap='$nama_lengkap',telepon='$telepon', user_name='$user_name', password='$password' WHERE kode='$id'");
                  if ($edit){
                    ?>
                    <script type="text/javascript">
                      document.location.href="user.php";
                    </script>
                    <?php
                }
              }
              ?>

    <?php include'footer.php'; ?>
<?php 
include'header.php'; 
$id = $_GET["id"];
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_jemaat WHERE id_jemaat='$id'");
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
            <li class="breadcrumb-item active">Proses <li class="breadcrumb-item active">Edit Jemaat</li> </li>
          </ul>

       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">

            <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">TANGGAL DAFTAR</label>
                      <div class="col-sm-10">
                        <input type="date" name="tgl_daftar" value="<?php echo $data['tgl_daftar'] ?>" class="form-control is-valid">
                      </div>
                  </div>

                  <div class="form-group row has-success">
                        <label class="col-sm-2 form-control-label">NAMA LENGKAP</label>
                        <div class="col-sm-10">
                          <input type="text" name="nm_lengkap" value="<?php echo $data['nm_lengkap'] ?>" class="form-control is-valid">
                        </div>
                  </div>
                  <div class="form-group row has-success">
                    <label class="col-sm-2 form-control-label">JENIS KELAMIN</label>
                    <div class="col-sm-10">
                      <select name="jns_kelamin" class="form-control is-valid">
                        <option value="Laki-laki" <?php echo ($data['jns_kelamin'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                        <option value="Perempuan" <?php echo ($data['jns_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">TELEPON</label>
                      <div class="col-sm-10">
                        <input type="text" name="no_hp" value="<?php echo $data['no_hp'] ?>" class="form-control is-valid" placeholder="Nama Posting ">
                      </div>
                  </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">ALAMAT</label>
                      <div class="col-sm-10">
                       <textarea class="form-control" id="alamat" placeholder="alamat" name="alamat" required><?php echo $data['alamat'];?></textarea>
                      </div>
                  </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">USERNAME</label>
                      <div class="col-sm-10">
                        <input type="text" name="username" value="<?php echo $data['username'] ?>" class="form-control is-valid" placeholder="Nama Posting ">
                      </div>
                  </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">PASSWORD</label>
                      <div class="col-sm-10">
                        <input type="text" name="password" value="<?php echo $data['password'] ?>" class="form-control is-valid" placeholder="Nama Posting ">
                      </div>
                  </div>

                <input type="submit" name="btnedit" class="btn btn-primary" value="EDIT">
                <button type="button" class="btn btn-secondary" onclick="history.back()">KEMBALI</button>

                </div>
              </div>
          </div>
      </section> 
      </form>
            <?php
                 if (isset($_POST["btnedit"])){
                    $tgl_daftar =$_POST['tgl_daftar'];
                    $nm_lengkap=$_POST['nm_lengkap'];
                    $jns_kelamin=$_POST['jns_kelamin'];
                    $no_hp=$_POST['no_hp'];
                    $alamat=$_POST['alamat'];
                    $edit = mysqli_query($konek,"UPDATE tbl_jemaat SET 
                    tgl_daftar='$tgl_daftar',
                    nm_lengkap='$nm_lengkap',
                    jns_kelamin='$jns_kelamin',
                    no_hp='$no_hp',
                    alamat='$alamat'
                    WHERE id_jemaat='$id'");
                    if ($edit){

                    ?>

                    <script type="text/javascript">
                      document.location.href="jemaat.php";
                    </script>
                    <?php
                  }else{
                    echo "Terjadi kesalahan";
                  }
                // }
              }
              ?>

    <?php include'footer.php'; ?>
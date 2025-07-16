<?php 
// include'valid.php';
include'header.php'; 
?>
      <!-- Counts Section -->
     <br>
      <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-4">
              <!-- Income-->
              <div class="card income text-center">
                <div class="icon"><i class="icon-line-chart"></i></div>
                <div class="number"></div><strong class="text-primary">SELAMAT DATANG</strong>
              </div>
            </div>
            <div class="col-lg-4">
              <!-- Monthly Usage-->
              <?php
              $cek1 = mysqli_query($konek, "SELECT * FROM tbl_nikah");
              $count1 = mysqli_num_rows($cek1);

              $cek2 = mysqli_query($konek, "SELECT * FROM tbl_baptis");
              $count2 = mysqli_num_rows($cek2);

              $totalnya = $count1 + $count2;

              $cek3 = mysqli_query($konek, "SELECT SUM(sumbangan) as sumbangan_nikah FROM tbl_nikah");
              $count3 = mysqli_fetch_array($cek3);
              $cek4 = mysqli_query($konek, "SELECT SUM(sumbangan) as sumbangan_baptis FROM tbl_baptis");
              $count4 = mysqli_fetch_array($cek4);

              $total_sumbangan = $count3['sumbangan_nikah'] + $count4['sumbangan_baptis'];

              function format_rupiah($angka){
                $rupiah=number_format($angka,0,",",".");
                return $rupiah;
              }
              ?>

              <?php
                if($_SESSION['level'] == "admin"){
                ?>
                <div class="card data-usage">
                <h2 class="display h4">Total Pernikahan & Baptis</h2>
                <div class="row d-flex align-items-center">
                  <div class="col-sm-6"><strong class="text-primary"><?php echo $totalnya; ?></strong></div>
                </div>
              </div>
                <?php
                }else{
                }
              ?>
              
            </div>

            <?php
              if($_SESSION['level'] == "admin"){
              ?>
                <div class="col-lg-4">
                <!-- User Actibity-->
                <div class="card user-activity">
                  <h2 class="display h4">Total Penerimaan</h2>
                  <div class="number"><?php echo format_rupiah($total_sumbangan); ?></div>
                </div>
              </div>
              <?php
              }else{
              }
            ?>
            
          </div>
        </div>
      </section>
      <!-- Updates Section -->
<br>    
<?php include'footer.php'; ?>
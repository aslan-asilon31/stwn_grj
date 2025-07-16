<?php 
session_start();
include'../koneksi.php';
if(isset($_POST["btnlogin"])){

    $cek = mysqli_query($konek, "SELECT * FROM tbl_user where user_name='".$_POST['txtusername']."' AND password='".$_POST['txtpassword']."'");
    $hasil = mysqli_fetch_array($cek);
    $count = mysqli_num_rows($cek);

      if($count >0){
          
          $_SESSION['nama'] = $hasil['nama_lengkap'];
          $_SESSION['id_user'] = $hasil['kode'];
          $_SESSION['level'] = "admin";
          header("location:master.php");
      }else{
        $cek1 = mysqli_query($konek, "SELECT * FROM tbl_jemaat where username='".$_POST['txtusername']."' AND password='".$_POST['txtpassword']."'");
        $hasil1 = mysqli_fetch_array($cek1);
        $count1 = mysqli_num_rows($cek1);

        if($count1 >0){

          
          $_SESSION['nama'] = $hasil1['nama_lengkap'];
          $_SESSION['id_user'] = $hasil1['id_jemaat'];
          $_SESSION['level'] = "jemaat";
          header("location:master.php");

        }else{

        }

      }
}
?>
<div class="pages_agile_info_w3l page_error">
  <div class="over_lay_agile_pages_w3ls error">
    <div class="registration error">
    <br><br><br>
      <h1 align="center">Oops! Login Salah </h1>
      <br><br><br><br><br><br><br><br><br>
      <h1 align="center"><a href="index.php">Coba Lagi</a><h1>
    </div>
  </div>
</div>
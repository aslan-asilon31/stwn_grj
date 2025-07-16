<?php 
session_start();
include'../koneksi.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Panel Administrator GPPK BEKASI </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700"> -->
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/icon.png">
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="img/progremmer.png" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">Admin</h2><span>BEKASI</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="master.php" class="brand-small text-center"> <strong>G</strong><strong class="text-primary">K</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Panel</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="master.php"> <i class="icon-home"></i>HOME</a></li>

            <?php 
            if($_SESSION['level'] == "admin"){
            ?>

              <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Master</a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="user.php">Pengguna</a></li>
                  <li><a href="blog_tampil.php">News</a></li>
                  <li><a href="project_tampil.php">Kegiatan</a></li>
                  <li><a href="folio_tampil.php">Galeri</a></li>
                  <li><a href="video_tampil.php">Video</a></li>
                </ul>
              </li>

            <?php
            }else{

            }
            ?>

        </div>

        <?php 
            if($_SESSION['level'] == "admin"){
              ?>

              <div class="admin-menu">
                <h5 class="sidenav-heading">Pesan</h5>
                <ul id="side-admin-menu" class="side-menu list-unstyled"> 
                  <li> <a href="tampil_pesan.php"> <i class="icon-screen"> </i>Pesan Masuk</a></li>
                  <li> <a href="tampil_pesan_read.php"> <i class="icon-screen"> </i>Pesan Telah Dibaca</a></li>
                </ul>
              </div>

              <?php
            }else{

            }
          ?>
            
        

        <div class="admin-menu">
          <h5 class="sidenav-heading">Proses</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="jemaat.php"> <i class="icon-screen"> </i>Data Jemaat</a></li>
            <li> <a href="nikah.php"> <i class="icon-screen"> </i>Pernikahan</a></li>
            <li> <a href="baptis.php"> <i class="icon-screen"> </i>Baptis</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="master.php" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span></span><strong class="text-primary">GPPK BEKASI</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->
                <!-- Messages dropdown-->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">Setting</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/progremmer.png" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Update Profil Login</h3><span></span><small>Ganti Profil</small>
                        </div></a></li>


                        <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/progremmer.png" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Update Profil</h3><span></span><small>Ganti Profil</small>
                        </div></a></li>


                        <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/progremmer.png" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Update Profil</h3><span></span><small>Ganti Profil</small>
                        </div></a></li>
                  </ul>
                </li>
                <li class="nav-item"><a href="keluar.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Keluar</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
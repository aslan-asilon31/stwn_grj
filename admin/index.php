<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGIN ADMIN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/fontastic.css">
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="shortcut icon" href="img/logo.jpg">
  </head>
  <body>
    <div class="page login-page d-flex justify-content-center align-items-center" style="height: 100vh;">
      <div class="login-card p-4 shadow">
        <div class="form-inner text-center">
          <div class="logo text-uppercase mb-4">
            <strong class="text-primary">HALAMAN LOGIN</strong>
          </div>

          <form action="login.php" method="POST">
            <div class="form-group-material mb-3">
              <label for="login-username" class="label-material">Username</label>
              <input id="login-username" type="text" name="txtusername" required class="form-control">
              
            </div>
            <div class="form-group-material mb-3">
              <label for="login-password" class="label-material">Password</label>
              <input id="login-password" type="password" name="txtpassword" required class="form-control">
              
            </div> 
            <button type="submit" name="btnlogin" class="btn btn-primary w-100">LOGIN</button>
            <h5 class="mt-3"><a href="../index.php">Back</a></h5>
          </form>
        </div>
      </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>
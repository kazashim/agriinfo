<?php
session_start();
include_once ('cynconnet/config.php');


function check($data){
  $data= trim($data);
  $data= htmlspecialchars($data);
  $data= stripslashes($data);
  $data = mysqli_real_escape_string($con, $data);
  return $data;
}


if(isset($_POST["login"])){
  $uname = $_POST['username'];
  $pword = md5($_POST['password']);
  //$rem = $_COOKIE['rememberme'];
  $sql = "SELECT * FROM tenant WHERE u_name = '$uname' AND p_word = '$pword'";
  $sql1 = "SELECT * FROM user WHERE u_name = '$uname' AND pword = '$pword'";
  $query = mysqli_query($con, $sql);
  $query1 = mysqli_query($con, $sql1);
  $row = mysqli_fetch_assoc($query);
  $row1 = mysqli_fetch_assoc($query1);
  do {
    $role = $row1['role'];
    $row1 = mysqli_fetch_assoc($query1);
  } while ($row1);

  do{
    $fname = $row['fname'];

    $lname = $row['lname'];

    $stat = $row['status'];

    $id = $row['tenant_id'];
    $sql2 = "SELECT * FROM contract WHERE tenant_id = '$id'";
    $query2 = mysqli_query($con, $sql2);
    $row1 = mysqli_fetch_assoc($query2);

    do{
      $end_date = $row1['end_day'];
      $h_id = $row1['house_id'];
      $row1 = mysqli_fetch_assoc($query2);
    }while ($row1);
    $row = mysqli_fetch_assoc($query);

  }while ($row);



  if ((mysqli_num_rows($query) == 1) || (mysqli_num_rows($query1) == 1)) {



    if($role == "Administrator"){
      $_SESSION['username'] = $uname;
      echo "<script type='text/javascript'>alert('Welcome $uname!');</script>";
      echo '<style>body{display:none;}</style>';
      echo '<script>window.location.href = "sys/dashboard.php";</script>';

    }
    elseif ($role == "Manager") {
      $_SESSION['username'] = $uname;
      echo "<script type='text/javascript'>alert('Welcome $uname!');</script>";
      echo '<style>body{display:none;}</style>';
      echo '<script>window.location.href = "manager_home.php";</script>';
    }
    else {

      if ($stat == 0) {
        $_SESSION['username'] = $uname;
        echo "<script type='text/javascript'>alert('Welcome $fname $lname!');</script>";
        echo '<style>body{display:none;}</style>';
        echo '<script>window.location.href = "initial_payment.php";</script>';
      }elseif ($stat == 1) {
        $_SESSION['username'] = $uname;
        echo "<script type='text/javascript'>alert('Welcome $fname $lname!');</script>";
        echo '<style>body{display:none;}</style>';
        echo '<script>window.location.href = "home.php";</script>';
      }elseif ($stat == 2) {
        $_SESSION['username'] = $uname;
        echo "<script type='text/javascript'>alert('Welcome $fname $lname!');</script>";
        echo '<style>body{display:none;}</style>';
        echo '<script>window.location.href = "waiting.php";</script>';
      }elseif((date('Y-m-d') > $end_date) && $stat == 1){
        $sql3 = "UPDATE tenant SET status = '3' WHERE tenant_id = '$id'";
        mysqli_query($con, $sql3);
        $sql5 = "UPDATE contract SET status ='Inactive' WHERE status = 'Active' AND tenant_id = '$id'";
        mysqli_query($con, $sql5);
        $sql5 = "UPDATE house SET status ='Empty' WHERE house_id = '$h_id'";
        mysqli_query($con, $sql5);
        $_SESSION['username'] = $uname;
        echo "<script type='text/javascript'>alert('Welcome $fname $lname! Your contract has expired. To access the system please renew the contract.');</script>";
        echo '<style>body{display:none; color:red;}</style>';
        echo '<script>window.location.href = "renew_contract.php";</script>';

      }elseif ($stat == 3) {
        $_SESSION['username'] = $uname;
        echo "<script type='text/javascript'>alert('Welcome $fname $lname! Your contract has expired. To access the system please renew the contract.');</script>";
        echo '<style>body{display:none;}</style>';
        echo '<script>window.location.href = "renew_contract.php";</script>';
      }
    }
    mysqli_close($con);
    $uname = "";


  }else {
    echo "<script style = 'color:red;'> alert('Incorrect Username or Password!!!')</script>";
  }


}
 ?>


<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Page - AgriInfo</title>
    <link rel="apple-touch-icon" href="vendor/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="vendor/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="vendor/app-assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="vendor/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column" data-layout="dark-layout">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                    <img src="vendor/app-assets/images/pages/login.png" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Login</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Welcome back, please login to your account.</p>
                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                                <form method= "POST"action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                        <input type="text" class="form-control" name="username" id="user-name" placeholder="Username" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="user-name">Username</label>
                                                    </fieldset>

                                                    <fieldset class="form-label-group position-relative has-icon-left">
                                                        <input type="password" class="form-control"  name="password" id="user-password" placeholder="Password" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock"></i>
                                                        </div>
                                                        <label for="user-password">Password</label>
                                                    </fieldset>
                                                    <div class="form-group d-flex justify-content-between align-items-center">
                                                        <div class="text-left">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class="">Remember me</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="text-right"><a href="auth-forgot-password.html" class="card-link">Forgot Password?</a></div>
                                                    </div>
                                                    <a href="register.php" class="btn btn-outline-primary float-left btn-inline">Register</a>
                                                    <button type="submit" class="btn btn-primary float-right btn-inline">Login</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="login-footer">
                                            <div class="divider">
                                                <div class="divider-text">OR</div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="vendor/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="vendor/app-assets/js/core/app-menu.js"></script>
    <script src="vendor/app-assets/js/core/app.js"></script>
    <script src="vendor/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
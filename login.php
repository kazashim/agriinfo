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
      echo '<script>window.location.href = "createuser.php";</script>';

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
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme - Multipurpose Bootstrap4 Admin Template</title>
  <!--favicon-->
  <link rel="icon" href="vendor/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="vendor/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="vendor/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="vendor/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="vendor/css/app-style.css" rel="stylesheet"/>
  
</head>

<body>

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

	   <div class="card-authentication2 mx-auto my-5">
	    <div class="card-group">
	    	<div class="card mb-0">
	    	   <div class="bg-signin2"></div>
	    		<div class="card-img-overlay rounded-left my-5">
                 <h2 class="text-white">Lorem</h2>
                 <h1 class="text-white">Ipsum Dolor</h1>
                 <p class="card-text text-white pt-3">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
             </div>
	    	</div>

	    	<div class="card mb-0 ">
	    		<div class="card-body">
	    			<div class="card-content p-3">
	    				<div class="text-center">
					 		<img src="vendor/images/logo-icon.png" alt="logo icon">
					 	</div>
					 <div class="card-title text-uppercase text-center py-3">Sign In</div>
					   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							   <label for="exampleInputUsername" class="sr-only">Username</label>
								 <input type="text" id="exampleInputUsername" class="form-control" name="username" value="<?php echo @$uname; ?>" placeholder="Username">
								 <div class="form-control-position">
									<i class="icon-user"></i>
								</div>
						   </div>
						  </div>
						  <div class="form-group">
						   <div class="position-relative has-icon-left">
							  <label for="exampleInputPassword" class="sr-only">Password</label>
							  <input type="password" id="exampleInputPassword" name="password" class="form-control" placeholder="Password">
							  <div class="form-control-position">
								  <i class="icon-lock"></i>
							  </div>
						   </div>
						  </div>
						  <div class="form-row mr-0 ml-0">
						  <div class="form-group col-6">
							  <div class="icheck-material-primary">
				               <input type="checkbox" id="user-checkbox" checked="" />
				               <label for="user-checkbox">Remember me</label>
							 </div>
							</div>
							<div class="form-group col-6 text-right">
							 <a href="authentication-reset-password2.html">Reset Password</a>
							</div>
						</div>
						<button type="submit" type="button" class="btn btn-primary btn-block waves-effect waves-light">Sign In</button>
						 <div class="text-center pt-3">
						<p>or Sign in with</p>

						<div class="form-row mt-4">
						  <div class="form-group mb-0 col-6">
						   <button type="button" class="btn bg-facebook text-white btn-block"><i class="fa fa-facebook-square"></i> Facebook</button>
						 </div>
						 <div class="form-group mb-0 col-6 text-right">
						  <button type="button" class="btn bg-twitter text-white btn-block"><i class="fa fa-twitter-square"></i> Twitter</button>
						 </div>
						</div>

						<hr>
						<p class="">Do not have an account? <a href="authentication-signup2.html"> Sign Up here</a></p>
						</div>
					</form>
				 </div>
				</div>
	    	</div>
	     </div>
	    </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/js/jquery.min.js"></script>
  <script src="vendor/js/popper.min.js"></script>
  <script src="vendor/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="vendor/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="vendor/js/app-script.js"></script>

  <script src="vendor/js/sb-admin-2.min.js"></script>
  
</body>
</html>

<?php
session_start();
include "cynconnet/config.php";
if($_SESSION['username'] != "Admin"){
  echo '<script>window.location.href = "login.php";</script>';
  exit();
}
 ?>


<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <div class="row mt-3">
    <div class="col-12 col-lg-6 col-xl-4">
      <div class="card">
      <div class="card-body">
          <p class="mb-0 ">Total Number of Tenants <span class="float-right badge badge-primary">Monthly</span></p>
           <div class="">
           <h4 class="mb-0 py-3 text-primary"><?php
                      $sql = "SELECT * FROM tenant";
                      $query = mysqli_query($con,$sql);
                      $num = mysqli_num_rows($query);
                      echo $num;
                       ?> <span class="float-right"><i class="fa fa-home"></i></span></h4>
           </div>
           <div class="progress-wrapper">
            <div class="progress" style="height:5px;">
            <div class="progress-bar bg-primary" style="width:60%"></div>
             </div>
          </div>
          <p class="mb-0 mt-2 small-font">Total Number of Houses <span class="float-right">+15% <i class="fa fa-long-arrow-up"></i></span></p>
        </div>
      </div>
     </div>


     <div class="col-12 col-lg-6 col-xl-4">
      <div class="card">
      <div class="card-body">
          <p class="text-success mb-0">Total Number of Houses <span class="float-right badge badge-success">Today</span></p>
           <div class="">
           <h4 class="mb-0 py-3 text-success"><?php
                      $sql = "SELECT * FROM house";
                      $query = mysqli_query($con,$sql);
                      $num = mysqli_num_rows($query);
                      echo $num;
                       ?> <span class="float-right"><i class="fa fa-search"></i></span></h4>
           </div>
           <div class="progress-wrapper">
            <div class="progress" style="height:5px;">
            <div class="progress-bar bg-success" style="width:80%"></div>
             </div>
          </div>
          <p class="mb-0 mt-2 small-font">Compare to yesterday <span class="float-right">+43% <i class="fa fa-long-arrow-up"></i></span></p>
        </div>
      </div>
     </div>

     <div class="col-12 col-lg-6 col-xl-4">
      <div class="card">
      <div class="card-body">
          <p class="text-danger mb-0">Earnings <span class="float-right badge badge-danger">Weekly</span></p>
           <div class="">
           <h4 class="mb-0 py-3 text-danger"><?php
                          $sql = "SELECT SUM(amount) FROM payment";
                          $query = mysqli_query($con,$sql);
                          $res = mysqli_fetch_assoc($query);

                          do {
                            $total = $res['SUM(amount)'];
                            $res = mysqli_fetch_assoc($query);
                          } while ($res);

                          echo "ZMW. ".number_format($total);
                           ?> <span class="float-right"><i class="fa fa-usd"></i></span></h4>
           </div>
           <div class="progress-wrapper">
            <div class="progress" style="height:5px;">
            <div class="progress-bar bg-danger" style="width:45%"></div>
             </div>
          </div>
          <p class="mb-0 mt-2 small-font">Compare to last week <span class="float-right">+32% <i class="fa fa-long-arrow-up"></i></span></p>
        </div>
      </div>
     </div>

   </div><!--End Row-->
     
     <div class="card">
       <div class="card-header">Property Order Status
          <div class="btn-group group-round btn-group-sm float-right">
              <button type="button" class="btn btn-info waves-effect waves-light">Monthly</button>
              <button type="button" class="btn btn-info waves-effect waves-light">Weekly</button>
              <button type="button" class="btn btn-info waves-effect waves-light">Daily</button>
            </div>
       </div>
       <div class="card-body">
         <div class="row align-items-center">
           <div class="col-12 col-lg-3 text-center">
             <p class="mt-4">Total Houses</p>
             <h4 class="mb-0"><?php
                      $sql = "SELECT * FROM house";
                      $query = mysqli_query($con,$sql);
                      $num = mysqli_num_rows($query);
                      echo $num;
                       ?></h4>
             <hr>
             <p>Total Payments</p>
             <h4 class="mb-0 text-info"> <?php $sql = "SELECT SUM(amount) FROM payment";
                          $query = mysqli_query($con,$sql);
                          $res = mysqli_fetch_assoc($query);

                          do {
                            $total = $res['SUM(amount)'];
                            $res = mysqli_fetch_assoc($query);
                          } while ($res);

                          echo "ZMW. ".number_format($total);
                           ?></h4>
           </div>
           <div class="col-12 col-lg-9">
		     <div class="chart-container-11">
               <canvas id="dash2-chart1"></canvas>
			 </div>
           </div>
         </div><!--End Row-->
       </div>
     </div><!--End Card-->
	 
	 
	   
	  
         </div>
	   </div>
	 </div><!--End Row-->
<!--start overlay-->
	  <div class="overlay toggle-menu"></div>
	<!--end overlay-->

    </div>
    <!-- End container-fluid-->

   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2019 cynojine
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">
	
	
	 <p class="mb-0">Header Colors</p>
      <hr>
	  
	  <div class="mb-3">
	    <button type="button" id="default-header" class="btn btn-outline-primary">Default Header</button>
	  </div>
      
      <ul class="switcher">
        <li id="header1"></li>
        <li id="header2"></li>
        <li id="header3"></li>
        <li id="header4"></li>
        <li id="header5"></li>
        <li id="header6"></li>
      </ul>

      <p class="mb-0">Sidebar Colors</p>
      <hr>
	  
      <div class="mb-3">
	    <button type="button" id="default-sidebar" class="btn btn-outline-primary">Default Sidebar</button>
	  </div>
	  
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->
  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/js/jquery.min.js"></script>
  <script src="vendor/js/popper.min.js"></script>
  <script src="vendor/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="vendor/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="vendor/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="vendor/js/app-script.js"></script>

  <!-- Chart js -->
  <script src="vendor/plugins/Chart.js/Chart.min.js"></script>
  <!-- Index2 js -->
  <script src="vendor/js/dashboard-property-listing.js"></script>

</body>
</html>

<?php
session_start();
include "cynconnet/config.php";
if($_SESSION['username'] != "Admin"){
  echo '<script>window.location.href = "login.php";</script>';
  exit();
}
 ?>

<?php include "header.php";?>
<?php include "sidebar.php";?>

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

   <?php include "footer.php";?>
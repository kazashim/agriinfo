<?php
session_start();
include "cynconnet/config.php";
if($_SESSION['username'] != "Admin"){
  echo '<script>window.location.href = "login.php";</script>';
  exit();
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
  <!-- simplebar CSS-->
  <link href="vendor/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="vendor/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="vendor/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="vendor/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="vendor/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="vendor/css/app-style.css" rel="stylesheet"/>
  <!-- skins CSS-->
  <link href="vendor/css/skins.css" rel="stylesheet"/>
  <!-- skins CSS-->
  <link href="vendor/css/skins.css" rel="stylesheet"/>
 
</head>

<body>

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="vendor/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Rentals</h5>
     </a>
   </div>
   <div class="user-details">
    <div class="media align-items-center user-pointer collapsed" data-toggle="collapse" data-target="#user-dropdown">
      <div class="avatar"><img class="mr-3 side-user-img" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
       <div class="media-body">
       <h6 class="side-user-name">
       <?php $uname = $_SESSION['username'];
         echo "<b><b>".$uname."</b></b>"; ?>
      </div>
       </div>
     <div id="user-dropdown" class="collapse">
      <ul class="user-setting-menu">
            <li><a href="javaScript:void();"><i class="icon-user"></i>  My Profile</a></li>
            <li><a href="javaScript:void();"><i class="icon-settings"></i> Setting</a></li>
      <li><a href="javaScript:void();"><i class="icon-power"></i> Logout</a></li>
      </ul>
     </div>
      </div>
   <ul class="sidebar-menu">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span><i class="fa fa-angle-left pull-right"></i>
        </a>
		<ul class="sidebar-submenu">
		  <li><a href="dashboard.php"><i class="zmdi zmdi-dot-circle-alt"></i> Main</a></li>
		 
		</ul>
      </li>
      
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-card-travel"></i>
          <span>House</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="components-range-slider.html"><i class="zmdi zmdi-dot-circle-alt"></i>House Information</a></li>
          <li><a href="components-image-carousel.html"><i class="zmdi zmdi-dot-circle-alt"></i> Add House</a></li>
          <li><a href="components-image-carousel.html"><i class="zmdi zmdi-dot-circle-alt"></i> Change the Cost of the<br/>House</a></li>
          <li><a href="components-image-carousel.html"><i class="zmdi zmdi-dot-circle-alt"></i> Edit House Information</a></li>
        
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-chart"></i> <span>Contract</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="charts-chartjs.html"><i class="zmdi zmdi-dot-circle-alt"></i> Contract Information</a></li>
          <li><a href="charts-apex.html"><i class="zmdi zmdi-dot-circle-alt"></i> Edit Contract Information</a></li>
          <li><a href="charts-sparkline.html"><i class="zmdi zmdi-dot-circle-alt"></i> Edit Contract Information<br/>(Part)</a></li>
        </ul>
       </li>
	   <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-widgets"></i> <span>Tenants</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="widgets-static.html"><i class="zmdi zmdi-dot-circle-alt"></i> Tenant Information</a></li>
          <li><a href="widgets-data.html"><i class="zmdi zmdi-dot-circle-alt"></i> Tenants' Contact</a></li>
          <li><a href="widgets-data.html"><i class="zmdi zmdi-dot-circle-alt"></i> Tenant-In Details</a></li>
          <li><a href="widgets-data.html"><i class="zmdi zmdi-dot-circle-alt"></i> Tenant-Out Details</a></li>
          <li><a href="widgets-data.html"><i class="zmdi zmdi-dot-circle-alt"></i> Edit Tenant Information</a></li>
        
        </ul>
       </li>
    
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-email"></i>
          <span>Payment</span>
           <small class="badge float-right badge-warning">12</small>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="mail-inbox.html"><i class="zmdi zmdi-dot-circle-alt"></i> >Payment Information</a></li>
          <li><a href="mail-compose.html"><i class="zmdi zmdi-dot-circle-alt"></i>Edit Payment</a></li>
        </ul>
      </li>
      
      <li>
        <a href="form_out.php" class="waves-effect">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Tenant-Out form</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
      </li>

      <li>
        <a href="form_out.php" class="waves-effect">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Messaging</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
      </li>
      
       <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-invert-colors"></i> <span>User</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="icons-font-awesome.html"><i class="zmdi zmdi-dot-circle-alt"></i> Register</a></li>
          <li><a href="icons-material-designs.html"><i class="zmdi zmdi-dot-circle-alt"></i> Change Password</a></li>
        </ul>
      </li>
     
     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-grid"></i> <span>Tables</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="table-simple-tables.html"><i class="zmdi zmdi-dot-circle-alt"></i> Simple Tables</a></li>
          <li><a href="table-data-tables.html"><i class="zmdi zmdi-dot-circle-alt"></i> Data Tables</a></li>
        </ul>
       </li>
     
     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-map"></i> <span>Maps</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="maps-google.html"><i class="zmdi zmdi-dot-circle-alt"></i> Google Maps</a></li>
          <li><a href="maps-vector.html"><i class="zmdi zmdi-dot-circle-alt"></i> Vector Maps</a></li>
        </ul>
       </li>
     
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-collection-folder-image"></i> <span>Sample Pages</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
              <li><a href="pages-invoice.html"><i class="zmdi zmdi-dot-circle-alt"></i> Invoice</a></li>
          <li><a href="pages-user-profile.html"><i class="zmdi zmdi-dot-circle-alt"></i> User Profile</a></li>
          <li><a href="pages-blank-page.html"><i class="zmdi zmdi-dot-circle-alt"></i> Blank Page</a></li>
              <li><a href="pages-coming-soon.html"><i class="zmdi zmdi-dot-circle-alt"></i> Coming Soon</a></li>
          <li><a href="pages-403.html"><i class="zmdi zmdi-dot-circle-alt"></i> 403 Error</a></li>
          <li><a href="pages-404.html"><i class="zmdi zmdi-dot-circle-alt"></i> 404 Error</a></li>
          <li><a href="pages-500.html"><i class="zmdi zmdi-dot-circle-alt"></i> 500 Error</a></li>
        </ul>
       </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-share"></i> <span>Multilevel</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="javaScript:void();"><i class="zmdi zmdi-dot-circle-alt"></i> Level One</a></li>
          <li>
            <a href="javaScript:void();"><i class="zmdi zmdi-dot-circle-alt"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="javaScript:void();"><i class="zmdi zmdi-dot-circle-alt"></i> Level Two</a></li>
              <li>
                <a href="javaScript:void();"><i class="zmdi zmdi-dot-circle-alt"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="javaScript:void();"><i class="zmdi zmdi-dot-circle-alt"></i> Level Three</a></li>
                  <li><a href="javaScript:void();"><i class="zmdi zmdi-dot-circle-alt"></i> Level Three</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-dot-circle-alt"></i> Level One</a></li>
        </ul>
      </li>
      <li class="sidebar-header">LABELS</li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>
    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav id="header-setting" class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i><span class="badge badge-primary badge-up">12</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 12 new messages
          <span class="badge badge-primary">12</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Jhon Deo</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Today, 4:10 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Sara Jen</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Yesterday, 8:30 AM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Dannish Josh</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
             <small>5/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet.</p>
            <small>1/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Messages</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
    <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">14</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
          You have 14 Notifications
          <span class="badge badge-info">14</span>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Registered Users</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-coffee fa-2x mr-3 text-warning"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Received Orders</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-danger"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Updates</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Notifications</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"> <?php $uname = $_SESSION['username'];
         echo "<b><b>".$uname."</b></b>"; ?></h6>
            <p class="user-subtitle">mccoy@example.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <div class="row mt-3">
    <div class="col-12 col-lg-6 col-xl-4">
      <div class="card">
      <div class="card-body">
          <p class="mb-0 ">Listings <span class="float-right badge badge-primary">Monthly</span></p>
           <div class="">
           <h4 class="mb-0 py-3 text-primary">92,403 <span class="float-right"><i class="fa fa-home"></i></span></h4>
           </div>
           <div class="progress-wrapper">
            <div class="progress" style="height:5px;">
            <div class="progress-bar bg-primary" style="width:60%"></div>
             </div>
          </div>
          <p class="mb-0 mt-2 small-font">Compare to last month <span class="float-right">+15% <i class="fa fa-long-arrow-up"></i></span></p>
        </div>
      </div>
     </div>


     <div class="col-12 col-lg-6 col-xl-4">
      <div class="card">
      <div class="card-body">
          <p class="text-success mb-0">Search <span class="float-right badge badge-success">Today</span></p>
           <div class="">
           <h4 class="mb-0 py-3 text-success">5,70,803 <span class="float-right"><i class="fa fa-search"></i></span></h4>
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
           <h4 class="mb-0 py-3 text-danger">$8,456 <span class="float-right"><i class="fa fa-usd"></i></span></h4>
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
             <p class="mt-4">Total Orders</p>
             <h4 class="mb-0">4,350</h4>
             <hr>
             <p>Total Payments</p>
             <h4 class="mb-0 text-info">$80,520</h4>
           </div>
           <div class="col-12 col-lg-9">
		     <div class="chart-container-11">
               <canvas id="dash2-chart1"></canvas>
			 </div>
           </div>
         </div><!--End Row-->
       </div>
     </div><!--End Card-->
	 
	 <div class="row">
	   <div class="col-lg-6">
	     <div class="card">
		     <div class="card-header">Popular Listings
				 <div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options"></i>
				 </a>
				  <div class="dropdown-menu dropdown-menu-right">
				  <a class="dropdown-item" href="javascript:void();">Action</a>
				  <a class="dropdown-item" href="javascript:void();">Another action</a>
				  <a class="dropdown-item" href="javascript:void();">Something else here</a>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="javascript:void();">Separated link</a>
				   </div>
				  </div>
				 </div>
			   </div>
			   
			    <ul class="list-group list-group-flush shadow-none">
				  <li class="list-group-item">
				    <div class="media align-items-center">
                    <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded">
					<div class="media-body ml-3">
					  <h6 class="mb-0">Lorem ipsum dolor sitamet consectetur adipiscing</h6>
					  <small class="small-font">$810,000 . 04 Beds . 03 Baths</small>
					</div>
				   </div>
				  </li>
				  <li class="list-group-item">
				    <div class="media align-items-center">
                    <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded">
					<div class="media-body ml-3">
					  <h6 class="mb-0">Lorem ipsum dolor sitamet consectetur adipiscing</h6>
					  <small class="small-font">$2,560,000 . 08 Beds . 07 Baths</small>
					</div>
				   </div>
				  </li>
				  <li class="list-group-item">
				    <div class="media align-items-center">
                    <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded">
					<div class="media-body ml-3">
					  <h6 class="mb-0">Lorem ipsum dolor sitamet consectetur adipiscing</h6>
					  <small class="small-font">$910,300 . 03 Beds . 02 Baths</small>
					</div>
				   </div>
				  </li>
				  <li class="list-group-item">
				    <div class="media align-items-center">
                     <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded">
					<div class="media-body ml-3">
					  <h6 class="mb-0">Lorem ipsum dolor sitamet consectetur adipiscing</h6>
					  <small class="small-font">$1,140,650 . 06 Beds . 03 Baths</small>
					</div>
				   </div>
				  </li>
				  <li class="list-group-item">
				    <div class="media align-items-center">
                    <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded">
					<div class="media-body ml-3">
					  <h6 class="mb-0">Lorem ipsum dolor sitamet consectetur adipiscing</h6>
					  <small class="small-font">$1,140,650 . 06 Beds . 03 Baths</small>
					</div>
				   </div>
				  </li>
				  <li class="list-group-item">
				    <div class="media align-items-center">
                    <img src="https://via.placeholder.com/110x110" alt="user avatar" class="customer-img rounded">
					<div class="media-body ml-3">
					  <h6 class="mb-0">Lorem ipsum dolor sitamet consectetur adipiscing</h6>
					  <small class="small-font">$910,300 . 03 Beds . 02 Baths</small>
					</div>
				   </div>
				  </li>
				</ul>
			<div class="card-footer text-center bg-transparent border-0">
			  <a href="javascript:void();">View all listings</a>
			</div>
           
         </div>
	   </div>
	   
	   <div class="col-lg-6">
	     <div class="card">
		     <div class="card-header">Popular Categories
				 <div class="card-action">
				 <div class="dropdown">
				 <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
				  <i class="icon-options"></i>
				 </a>
				  <div class="dropdown-menu dropdown-menu-right">
				  <a class="dropdown-item" href="javascript:void();">Action</a>
				  <a class="dropdown-item" href="javascript:void();">Another action</a>
				  <a class="dropdown-item" href="javascript:void();">Something else here</a>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="javascript:void();">Separated link</a>
				   </div>
				  </div>
				 </div>
			   </div>
               
			 <ul class="list-group list-group-flush shadow-none">
              <li class="list-group-item">
                <div class="media align-items-center">
                  <div class="icon-box border border-light">
					<i class="fa fa-cutlery"></i>
				  </div>
                <div class="media-body ml-3">
                  <h6 class="mb-0">Restaurants</h6>
                </div>
                 <div class="date">
                 Submited List: 250
                 </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media align-items-center">
                  <div class="icon-box border border-light">
					<i class="fa fa-bed"></i>
				  </div>
                <div class="media-body ml-3">
                  <h6 class="mb-0">Hotels</h6>
                </div>
                 <div class="date">
                 Submited List: 90
                 </div>
                </div>
              </li>
			  <li class="list-group-item">
                <div class="media align-items-center">
                  <div class="icon-box border border-light">
					<i class="fa fa-glass"></i>
				  </div>
                <div class="media-body ml-3">
                  <h6 class="mb-0">Nightclubs</h6>
                </div>
                 <div class="date">
                 Submited List: 260
                 </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media align-items-center">
                  <div class="icon-box border border-light">
					<i class="fa fa-video-camera"></i>
				  </div>
                <div class="media-body ml-3">
                  <h6 class="mb-0">Movie Theaters</h6>
                </div>
                 <div class="date">
                 Submited List: 150
                 </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="media align-items-center">
                  <div class="icon-box border border-light">
					<i class="fa fa-shopping-bag"></i>
				  </div>
                <div class="media-body ml-3">
                  <h6 class="mb-0">Shopping</h6>
                </div>
                 <div class="date">
                 Submited List: 300
                 </div>
                </div>
              </li>
			  <li class="list-group-item">
                <div class="media align-items-center">
                  <div class="icon-box border border-light">
					<i class="fa fa-lightbulb-o"></i>
				  </div>
                <div class="media-body ml-3">
                  <h6 class="mb-0">Museums</h6>
                </div>
                 <div class="date">
                 Submited List: 150
                 </div>
                </div>
              </li>
            </ul>
			
			<div class="card-footer text-center border-0">
			  <a href="javascript:void();">View all Categories</a>
			</div>
           
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

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
          <li><a href="tenant.php"><i class="zmdi zmdi-dot-circle-alt"></i> Tenant-In Details</a></li>
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
   
   </div>
   <!--End sidebar-wrapper-->

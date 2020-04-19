<?php
session_start();
include_once ('cynconnet/config.php');;
if($_SESSION['username'] != "Admin"){
  echo '<script>window.location.href = "login.php";</script>';
  exit();
}
 ?>
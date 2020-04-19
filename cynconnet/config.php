<?php
$con = @mysqli_connect("localhost", "root", "", "agri");
if(!$con){
  echo "Connection failed!".@mysqli_error($con);
}
?>

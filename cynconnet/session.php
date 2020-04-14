<?php
session_start();
if($_SESSION['username']){
    
}else{
    header('Location:../dashboard.php');
}
?>
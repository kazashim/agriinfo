<?php
	
	ob_start();
	session_start();
	include_once 'config.php';

	// Connect to server and select databse.
	mysql_connect("$host", "$username", "$password")or die("cannot connect");
	mysql_select_db("$db_name")or die("cannot select DB");


	$value = isset($_POST['username']) ? $_POST['password'] : '';
	// Define $myusername and $mypassword 
	$email = $value;
	$password = $_POST['password']; 
	// To protect MySQL injection
	$username = stripslashes($email);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	$password = sha1($password.$salt);

	$sql="SELECT * FROM $tbl_name WHERE email='$username' and password='$password'";
	$result=mysql_query($sql);

	// rowCount() is counting table row
	$count=mysql_num_rows($result);
	$row = mysql_fetch_array($result,MYSQL_ASSOC);
	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count == 1){

		// Register $myusername, $mypassword and print "true"
		echo "true";
		$_SESSION['username'] = $row['username'];
		$_SESSION['password'] = 'mypassword';
		
	}
	else {
		//return the error message
		echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Wrong Username or Password</div>";
	}

	ob_end_flush();
?>
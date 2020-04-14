<?php
	
	ob_start();
	session_start();
	include_once 'cynconnet/config.php';

	// Connect to server and select databse.
	mysql_connect("$host", "$username", "$password")or die("cannot connect"); 		
	mysql_select_db("$db_name")or die("cannot select DB");

	// Define $myusername and $mypassword 
	$username = $_POST['username']; 
	$password = $_POST['mpassword']; 
	$email = $_POST['email']; 
	
	// To protect MySQL injection
	$username = stripslashes($username);
	$password = stripslashes($password);
	$email = stripslashes($email);	
	$username = mysql_real_escape_string($username);	
	$password = mysql_real_escape_string($password);
	$email = mysql_real_escape_string($email);
//	Hashing the password using SHA1 and salt="batman is here"
	$password = sha1($password.$salt);
	$sql="SELECT * FROM $tbl_name WHERE email='$email'";		
	$result=mysql_query($sql);

	$count=mysql_num_rows($result);
	if($count != 0){
		echo "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Email ID already exists</div>";
	}
	else {
	
		
		$sql = "INSERT INTO $tbl_name (`id`, `username`, `password`,`email`) VALUES (NULL,'$username', '$password', '$email')";
		mysql_query($sql) or die(mysql_error());
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
        echo "true";
   
}

	ob_end_flush();
?>
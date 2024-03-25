<?php
	/* Database credentials. Assuming you are running MySQL
	server with default setting (user 'root' with no password) */
	
	$db_name="registrationform";
	$mysql_user="root";
	$mysql_pass="";
	$server_name="localhost";
	
	$conn=mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
	
	if(!$conn) {
		echo "Connection Error ..." .mysql_connect_error();
	}
	else {
		echo "<h2></h2>";
	}
	
?>

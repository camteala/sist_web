<?php
	session_start();
	if(!isset($_SESSION["username"])){
		header("Location: homepage.php");
		exit(); 
	}
?>
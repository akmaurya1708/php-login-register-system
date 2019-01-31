<?php 
	session_start() ;
	$server = "localhost";
	$username = "root";
	$password = "";
	$db_name = "phplogin";

	$con = mysqli_connect($server, $username, $password, $db_name);

	if (!$con) {
		die("Connection failed:". $con->mysqli_connect_error());
	}
?>
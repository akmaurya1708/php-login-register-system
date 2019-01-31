<?php 
	include 'config.php'; 
 	session_destroy();
	exit(header('Location: ../index.php'));
?>
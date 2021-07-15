<?php 
	session_start();
	session_unset();
	// got this from above unset
	//$_SESSION['user']
	session_destroy();
	header('location: index.php');
?>
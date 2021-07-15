<?php 
	session_start();

	
	// connect to database
	$conn = mysqli_connect("localhost", "root", "", "statesman-blog-with-php");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
       // 

	define ("ROOT_PATH", "/xampp/htdocs/statesman-blog-with-php/");
	
	define('BASE_URL', 'http://localhost/statesman-blog-with-php/');
	
	
?>
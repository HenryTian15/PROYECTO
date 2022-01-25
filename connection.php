<?php
	//for MySQLi OOP
	$conn = new mysqli('localhost', 'root', '', 'acdopcion');
	if($conn->connect_error){
	   die("la conexion fallo: " . $conn->connect_error);
	}
	////////////////

	//for MySQLi Procedural
	// $conn = mysqli_connect('localhost', 'root', '', 'mydatabase');
	// if(!$conn){
	//     die("Connection failed: " . mysqli_connect_error());
	// }
	////////////////
?>
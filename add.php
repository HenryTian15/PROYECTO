<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$id = $_POST['id'];
		$usuario = $_POST['usuario'];
		$fecha = $_POST['fecha'];
		$edad = $_POST['edad'];
		$mascotaadopcion = $_POST['mascotaadopcion'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$ocupacion = $_POST['ocupacion'];
		$sql = "INSERT INTO mascota (usuario, fecha, edad, mascotaadopcion,direccion,telefono,ocupacion) VALUES ('$usuario', '$fecha', '$edad','$mascotaadoptar','$direccion','$telefono','$ocupacion')";
		

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'usuario agregado exitosamente';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Algo salió mal al agregar';
		}
	}
	else{
		$_SESSION['error'] = 'Primero llene el formulario de adición';
	}

	header('location: index.php');
?>
<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$usuario = $_POST['usuario'];
		$fecha = $_POST['fecha'];
		$edad = $_POST['edad'];
		$mascotaadoptar = $_POST['mascotaadoptar'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$ocupacion = $_POST['ocupacion'];
		$sql = "UPDATE mascotas SET usuario = '$usuario', fecha = '$fecha', edad = '$edad',mascotaadoptar = '$mascotaadoptar', direccion = '$direccion', telefono = '$telefono', ocupacion = '$ocupacion' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'usuario actualizada con exito';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'algo salio mal al actualizar el usuario';
		}
	}
	else{
		$_SESSION['error'] = 'selectionar usuario para editar primero';
	}

	header('location: index.php');

?>
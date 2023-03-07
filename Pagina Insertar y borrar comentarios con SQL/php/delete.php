<?php 
    $id = $_GET['id'];
	$nombre = $_GET['nombre'];
	$comentario = $_GET['comentario'];

	$conn = mysqli_connect('localhost','root','','paginacompramas');

	$nombre = mysqli_real_escape_string($conn,$nombre);
	$comentario = mysqli_real_escape_string($conn,$comentario);

    $sql= "DELETE FROM `comentarios` WHERE `comentarios`.`id` = '$id'";
	
    $borrar = mysqli_query($conn, $sql);

	if ($borrar)
		header("Location: ../index.php");
	else
		echo('Error intentando enviar el comentario');
		

	mysqli_close($conn);
?>
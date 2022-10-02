<?php
	$nombre = $_POST['nombre'];
	$comentario = $_POST['comentario'];

	$conn = mysqli_connect('localhost','root','','paginacompramas');

	$nombre = mysqli_real_escape_string($conn,$nombre);
	$comentario = mysqli_real_escape_string($conn,$comentario);

	$resultado = mysqli_query($conn, 'INSERT INTO comentarios(nombre,comentario) VALUES("' . $nombre . '", "' . $comentario .'")');

	if ($resultado)
		echo('comentario enviado con exito');
	else
		echo('Error intentando enviar el comentario');

	mysqli_close($conn);
?>
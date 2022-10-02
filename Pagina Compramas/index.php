<?php
	include("php/basededatos.php");
	$usuarios = "SELECT * FROM productos"
	?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Compramas</title>
</head>
<body >
	<h1 class="titulo">TIENDA DE ABARROTES COMPRAMAS</h1>
	<div class="container-table">
		<div class="titulo-tabla">PRODUCTOS DE LA TIENDA</div>
		<div class="titulos">ID</div>
		<div class="titulos">MARCA</div>
		<div class="titulos">TIPO</div>
		<div class="titulos">PRECIO</div>
		<?php $resultado = mysqli_query($conexion, $usuarios);

		while($row=mysqli_fetch_assoc($resultado)) { ?>
			<div class="table_item"><?php echo $row["id"] ?></div>
			<div class="table_item"><?php echo $row["marca"] ?></div>
			<div class="table_item"><?php echo $row["tipo"] ?></div>
			<div class="table_item"><button class="precios"><?php echo $row["precio"] ?></button></div>
			<?php } ?>
	</div>

	<div class="comentarios">
		<h1>Comentarios:</h1>
		<?php

			$conn = mysqli_connect('localhost','root','','paginacompramas');
			
			$resultado = mysqli_query($conn, 'SELECT * FROM comentarios');

			while($comentario = mysqli_fetch_object($resultado))
			{
				?>
				<b> <?php echo($comentario->nombre); ?> </b>
				<?php echo($comentario->fecha) ?> dijo:
				<br>
				<?php  echo($comentario->comentario) ?>
				<br>
				<hr>
				<?php
			}
		?>

	</div>
	<?php
	include("php/basededatos.php");
	?>
	<!-- php/enviarcomentario.php -->
	<form id="formulario" action="php/enviarcomentarios.php" method="POST">
			<h3>Danos tus opiniones</h3>
			<input name="nombre" id="com-nombre" type="text" placeholder="Ingrese su nombre">
			<textarea name="comentario" id="coment-input" placeholder="Escriba su comentario"></textarea>
			<input id="enviar" type="submit" value="Publicar">
	</form>

	<!-- JavaScript Bundle with Popper -->
	<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
</body>
<!-- ////////////////////////////// -->

<script language="javascript">
	$("#enviar").click(function(){
	var nombre = $('#com-nombre').val();
	var comentario = $('#coment-input').val();

	if (nombre==""){
		alert("Debe escribir un nombre")
		return;
	}
	if (comentario==""){
		alert("Debe escribir un comentario")
		return;
	}

	$("#formulario").submit();

});
</script>
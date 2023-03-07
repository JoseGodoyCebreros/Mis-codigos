<?php
	include("php/basededatos.php");
	$usuarios = "SELECT * FROM productos"
	?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estilos/estilo.css">
	<title>Compramas</title>
</head>
<body >
	<h1 class="titulo">TIENDA DE ABARROTES COMPRAMAS</h1>
	<div class="container-table">
		<div class="tabla">
			<div class="titulo-tabla">PRODUCTOS DE LA TIENDA</div>
			<div class="tabla_titulos">ID</div>
			<div class="tabla_titulos">MARCA</div>
			<div class="tabla_titulos">TIPO</div>
			<div class="tabla_titulos">PRECIO</div>
			
			<?php $resultado = mysqli_query($conexion, $usuarios);

			while($row=mysqli_fetch_assoc($resultado)) { ?>
				<div class="table_item"><?php echo $row["id"] ?></div>
				<div class="table_item"><?php echo $row["marca"] ?></div>
				<div class="table_item"><?php echo $row["tipo"] ?></div>
				<div class="table_item">S/<?php echo $row["precio"] ?></div>
			<?php } ?>
		</div>
		
	</div>

	<?php
	include("php/basededatos.php");
	?>
	<!-- php/enviarcomentario.php -->
	<div class="FORMULARIO-Y-COMENTARIOS">

	
		<div class="div-formulario">
			<form id="formulario" action="php/enviarcomentarios.php" method="POST">
				<h3 class="tituloFormulario">Danos tus opiniones</h3>
				<input name="nombre" id="com-nombre" type="text" placeholder="Ingrese su nombre">
				<textarea name="comentario" id="coment-input" placeholder="Escriba su comentario"></textarea>
				<input id="enviar" type="button" value="Publicar">
		</form>
		</div>

		<div class="div-comentarios">
			<div class="comentarios">
					<h1 class="tituloComentarios">Comentarios:</h1>
					<?php

						$conn = mysqli_connect('localhost','root','','paginacompramas');
						
						$resultado = mysqli_query($conn, 'SELECT * FROM comentarios');

						while($comentario = mysqli_fetch_object($resultado))
						{
							?>
							<div class="contenedor-Comentario">
								<div class="contenedor-Texto">
									<b> <?php echo($comentario->nombre); ?> </b>
									<b class="fecha"> 
									<?php echo($comentario->fecha) ?> 
									</b>
									dijo:
									<br>
									<div class="comentarioPublicado">
										<?php  echo($comentario->comentario) ?>
									</div>
								</div>
								<div class="contenedor-boton">
									<a id="botonBorrar" href="php/delete.php? id=<?php  echo($comentario->id) ?>">Eliminar</a>
								</div>
							</div>
							
							<?php
						}
					?>
			</div>
		</div>
		
	</div>
	
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
	else{
		$("#formulario").submit();
	}

	

});
</script>
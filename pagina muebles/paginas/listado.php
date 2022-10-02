<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link href="../css/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" href="">
</head>
<body>
    <div class="container">
	    <header style="text-align: center;">
	        <img src="../img/logo.jpg" width="100px" height="100px" style="border: 1px solid #00bb2d; border-radius: 5px;">
	        <h1>Venta de MueblesSA</h1>
	      <hr>
	    </header>
	    <nav></nav>
	    <section>
	    	<h1>Listado de productos</h1><hr>
	    	    <?php
	    	        include("conexion.php");
	    	        $cn=new Conexion();
	    	        $cn->ProductmList();
	    	    ?>
	    </section>
		<footer>
			    <div class="container" style="background-color: #81c41c; height: 50px; padding-top: 10px;">
			        <div class="row">
			             <div class="col-sm-4" style= "text-align: center; font-weight: bold;">MueblesSA</div>
			             <div class="col-sm-8" style= "text-align: center; font-weight: italic;">Copyright -@Derechos reservados 2022</div>
			        </div>
			    </div>
			</footer> 
	    </div>

</body>
</html>	    
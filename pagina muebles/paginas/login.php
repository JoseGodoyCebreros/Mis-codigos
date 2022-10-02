    <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ingreso al sistema</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="../css/bootstrap/js/bootstrap.js"></script>
</head>
<body>
    <div class="container" style="background-color:#fafafa; padding-top: 10px;">
    	<header style="text-align: center;">
      		 <img src="../img/logo.jpg" width="100px" height="100px" style="border: 1px solid #00bb2d; border-radius: 5px;">
       		 <h1>Venta de MueblesSA</h1>
      	     <hr>
        </header>
        <br>
        <section>
            <div class="container" style="width: 50%; border: 1px solid #d3d3d3; border-radius: 10px; padding: 10px;">
                <center><h3>Inicio de Sesion</h3></center>
        	<form name="frmacceso" id="frmacceso" method="post" action="proceso.php">
        		<div class="mb-3">
        			<label for="txtuser" class="form-label">Usuario</label>
        			<input type="text" class="form-control" name="txtuser" id="txtuser">
        		</div>
        		<div class="mb-3">
        			<label for="txtpsw" class="form-label">Contraseña</label>
        			<input type="password" class="form-control" name="txtpsw" id="txtpsw">
        		</div>

        		<button type="submit" name="btnlogin" id="btnlogin" class="btn btn-primary">Enviar</button>
        	</form>
            </div>
        </section> 
        <br>
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

<!--http://localhost:8080/web02/paginas/login.php -->
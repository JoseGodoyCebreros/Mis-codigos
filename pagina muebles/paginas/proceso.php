<?php
	if (isset($_POST["btnlogin"])) {

	// print_r($_POST);

	$user = $_POST["txtuser"];
	$psw = $_POST["txtpsw"];

	include("conexion.php");

	$cn = new Conexion();

	$nr = $cn->LoginAccess($user, $psw);

	// echo $nr;

	if ($nr == 1)
		header("location: listado.php");
	else
		header("location: error.php");
	
	}

?>
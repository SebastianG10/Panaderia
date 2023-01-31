<?php
$cant=$_POST['cantidad'];
$id=$_POST['id'];
$precio=$_POST['precio'];
$nompro=$_POST['nombre'];


$conexion = mysqli_connect("localhost","root","","panaderia");
session_start();
	if (isset($_SESSION["listaP"])){
		$_SESSION["listaP"]=$_SESSION["listaP"] . "," . $id;
		$_SESSION["cantidad"]=$_SESSION["cantidad"] . "," . $cant;
		$_SESSION["precio"]=$_SESSION["precio"] . "," . $precio;
		$_SESSION["nombre"]=$_SESSION["nombre"] . "," . $nompro;
		
	}else{
		$_SESSION["listaP"]=$id;
		$_SESSION["cantidad"]=$cant;
		$_SESSION["precio"]=$precio;
		$_SESSION["nombre"]=$nompro;
		
	}
	
	include("Productos2.php");
	
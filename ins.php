<?php
    $nombre = $_POST['nom'];
	$cedula = $_POST['ced'];
	$direccion = $_POST['dir'];
	$telefono = $_POST['tel'];
	$id = $_POST['id'];
	$cantidad = $_POST['cantidad'];
	$nom = $_POST['nombre'];
	$numero = count($id);
	$conectar = mysqli_connect("localhost","root","","Panaderia");
	for($x = 0; $x< $numero; $x++){
		if($cantidad[$x] > 0){
		mysqli_query($conectar,"update productos set
								unidades_existentes = unidades_existentes - $cantidad[$x]
								where(id = $id[$x]);");
		mysqli_query($conectar,"insert into pedidos 
								values('$nombre','$cedula','$direccion','$telefono','$nom[$x]','$cantidad[$x]');");
		}
	}
?>

<link rel="stylesheet" href="css2.css"/>

<center>
<div class="regresar">
<a href="ProductosPrueba.php">Regresar</a>
</div>
</center>
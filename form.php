<?php
include ("conexion.php");
$cant=$_POST['Cantidad'];
$id = "1"


mysqli_query($conectar,"update productos set 
						unidades_existentes = unidades_existentes - $cant;
						where(id = $id);");

?>
´
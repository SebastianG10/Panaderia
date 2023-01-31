<?php
include("conexion.php");
$cedula=$_POST['cajita1'];
mysqli_query($conectar,"delete from pedidos where cedula='$cedula'");
?>

<link rel="stylesheet" href="css2.css"/>
<center>
<div class="regresar">
<a href="home.html">Regresar</a>
</div>
</center>
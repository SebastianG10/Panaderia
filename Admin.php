<?php
	if (isset($_SESSION['username'])){
?>
<?php 
	$conexion=mysqli_connect('localhost','root','','Panaderia');
 ?>
<html>
<head>
<title>Administrador</title>
<link rel="stylesheet" href="css2.css"/>
</head>
<body  id="xf"background="Imagenes/img8.jpg">
<center>
<div class="cee">
<a href="cerrar.php">Cerrar Sesion</a>
</div>        
<div class="nav">
<h1>Pedidos</h1>
</div>
</center>



		<?php 
		$sql="SELECT * from pedidos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
<center>
<div class="ped">
<div class="pro">
<div class="pro1">
<h1>Nombre:</h1>
</div>
<div class="pro2">
<h2><?php echo $mostrar['nombre'] ?></h2>
</div>
</div>

<div class="pro">
<div class="pro1">
<h1>Cedula:</h1>
</div>
<div class="pro2">
<h2><?php echo $mostrar['cedula'] ?></h2>
</div>
</div>

<div class="pro">
<div class="pro1">
<h1>Direccion:</h1>
</div>
<div class="pro2">
<h2><?php echo $mostrar['direccion'] ?></h2>
</div>
</div>

<div class="pro">
<div class="pro1">
<h1>Telefono:</h1>
</div>
<div class="pro2">
<h2><?php echo $mostrar['telefono'] ?></h2>
</div>
</div>

<div class="pro">
<div class="pro1">
<h1>Producto:</h1>
</div>
<div class="pro2">
<h2><?php echo $mostrar['nom_producto']?></h2>
</div>
</div>

<div class="pro">
<div class="pro1">
<h1>Cantidad:</h1>
</div>
<div class="pro2">
<h2> <?php echo $mostrar['cantidad'] ?></h2>
</div>
</div>

<center>
<div class="dsl">
<a href="elimina_pedido.php">Eliminar</a>
</div>
</center>

</div>
</center>
	<?php 
	}
	 ?>

	
	
	
	
	
	
	
	
	
</body>	
</html>
<?php
	}
else{
?>
<html>
<head>
 <title>Administrador</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<link rel="stylesheet" href="css2.css"/>
</head>
<body>
<center>
<img class="jr" src="Imagenes/Img1.png"/>
<div class="er">
<div class="errp">
<h2>No tienes permisos suficientes para ver esta pagina</h2>
</div>
<div class="errx">
<a href="Home.html"><div class="ex">
<h4 class="nl1">CONTINUAR<h4>
</div>
</a>
</div>
</div>
</center>
</body>
</html>
<?php
}
?>
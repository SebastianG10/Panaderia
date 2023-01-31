<html>
<head>
<title>Productos</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Bevan" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
<link rel="stylesheet" href="css1.css"/>
<link rel="stylesheet" href="font.css"/>
<link rel="stylesheet" href="estilo_productos2.css"/>
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Indie+Flower" rel="stylesheet">
</head>
<body>
<center>




<div class="nav">
<div class="nav1">
<div class="nab1">
<a href="Contacto.html">Contacto</a>
</div>
</div>
<div class="nav1">
<div id="nab3">
<a id="s3">Productos</a>
</div>
</div>
<div class="nav1">
<div class="nab1">
<a href="Home.html">Home</a>
</div>
</div>
</div>


<div  class="dy">
<a  href="registro.php" class="icon-cogs"></a>
</center>
</div>
		<div class="fondo"/>
			<div class="titulo"/>
				<br><br><br><br>
		</div>
		<center>
		<form action="ins.php" method="POST">
		    <h1> Datos Cliente </h1>
			<input type="text" name="nom" placeholder="Nombre"/>
			<input type="text" name="ced" placeholder="Cedula"/>
			<input type="text" name="dir" placeholder="Direccion"/>
			<input type="text" name="tel" placeholder="Telefono"/>
		</center>
		<?php 
			$conexion = mysqli_connect("localhost","root","","panaderia");
			$consulta = mysqli_query($conexion,"select * from productos;");
			while($organizar = mysqli_fetch_array($consulta)){					
		?>
	
			<div class="logo">
					 
						<input type="hidden" name="id[]" value="<?php echo($organizar['id']); ?>">
						<input type="text" readonly="readonly" name="nombre[]" value="<?php echo($organizar['nombre']); ?>">
						<img style="width: 80%;"; src="productoos/<?php echo($organizar['imagen']);?>"/>
						<input type="number" name="cantidad[]" value="0" min='0' max='<?php echo($organizar['unidades_existentes']);?>'/><br><br>
						<input type="number" readonly="readonly" name="precio" value="<?php echo($organizar['precio']);?>"><br><br>							
			</div>
		
		<?php  
				}
		?>
		<center>
						<input type="submit" name="pagar" value="Pagar" style="width: 150px; height: 100px; font-size: 30px; border-radius: 10px 10px 10px 10px; border: solid 5px black;">
					</form>
		
	 








</body>
</html>
<?php
$correo=$_POST['correo'];
$password=$_POST['pass'];
$conexion=mysql_connect("localhost","root","");
mysql_select_db("Panaderia",$conexion);
$consulta= mysql_query("select*from usuario 
                       where (correo='$correo');",$conexion);
$OrganizarConsulta= mysql_fetch_array($consulta);


if($correo== $OrganizarConsulta['correo'] && $password == $OrganizarConsulta['password']){
	session_start();
	$_SESSION['username'] = $OrganizarConsulta['correo'];
	include("Admin.php");
}
else{
?>
<html>
<head>
<title>Error</title>
<link rel="stylesheet" href="css2.css"/>
</head>
<body>
<center>
<img class="jr" src="Imagenes/Img1.png"/>
<div class="er">
<div class="err">
<h2>Usuario o Contraseña Incorrectos</h2>
</div>
<div class="err2">
<a href="registro.php"><div class="iz">
<h4 class="nl">REINTENTAR<h4>
</div>
</a>
<a href="Home.html"><div class="de">
<h4 class="nl">CANCELAR<h4>
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




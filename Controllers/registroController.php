<!DOCTYPE html>
<html>
<head>
	<title>Registro usuario</title>
	<meta name="viewport" content="width= device-width, user-scalable=yes initial-scale=1.0, maximun-scale=3.0, minimun-scale=1.0">
</head>
<body>
	<form>
		Usuario: <input type="text" name="usuario" placeholder="Nombre de usuario"> <br><br>
		Contraseña: <input type="password" name="contrasena" placeholder="Contraseña"> <br><br>
		E-mail: <input type="email" name="email" placeholder="Correo electrónico"><br><br>
		<input type="submit" name="registrar" value="Registrar">
	</form>
	<?php
		/*$user= $_REQUEST['usuario'];
		$pass= $_REQUEST['contrasena'];
		$email= $_REQUEST['email'];
		$link= mysqli_connect("localhost","root","");
		mysqli_select_db($link,"TeacherMatch");
		$ins= mysqli_query($link,"Insert (usuario)");*/
	?>
</body>
</html>
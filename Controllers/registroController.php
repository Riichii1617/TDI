<?php
	echo "kk<br>";
	if(isset($_REQUEST['enviarR'])){
	$nombre= $_REQUEST['nombre'];
	$apellidoP= $_REQUEST['apellidoP'];
	$apellidoM= $_REQUEST['apellidoM'];
	$carrera= $_REQUEST['carrera'];	
	$porcentaje= $_REQUEST['porcentaje'];
	$user= $_REQUEST['usuario'];
	$email= $_REQUEST['email'];
	$pass= $_REQUEST['contrasena'];
	echo "$user, $pass, $nombre, $apellidoP, $apellidoM, $carrera, $porentaje, $email";
	$link= mysqli_connect("localhost","root","");
	mysqli_select_db($link,"TeacherMatch");
	$ins= mysqli_query($link,"Insert into alumnos (usuario, contrasena, nombre, apellidoP, apellidoM, carrera, porcentaje, email) values ($user, $pass, $nombre, $apellidoP, $apellidoM, $carrera, $porentaje, $email)");
	mysqli_close($link);
	}
?>
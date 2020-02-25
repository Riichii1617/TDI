<?PHP	
	if(isset($_REQUEST['enviarR'])){
		$nombre= $_REQUEST['nombre'];
		$apellidoP= $_REQUEST['apellidoP'];
		$apellidoM= $_REQUEST['apellidoM'];
		$carrera= $_REQUEST['carrera'];	
		$porcentaje= $_REQUEST['porcentaje'];
		$user= $_REQUEST['usuario'];
		$email= $_REQUEST['email'];
		$pass= $_REQUEST['contrasena'];	
		$link= mysqli_connect("localhost","root","");//Conexion a la base de datos
		mysqli_select_db($link,"TeacherMatch");//Selecciona la base de datos a usar
		$unicidad= mysqli_query($link, "Select usuario, email from alumnos where usuario = '$user' or email = '$email';");//Consulta para verificar la unicidad de las cuentas
		$row= mysqli_fetch_array($unicidad);
		if($row['email'] ==  $email){		
			echo "<script >
			 window.history.back(-1);
			 alert('Email ya existe'); 			 
			 </script>";

		}else if($row['usuario'] == $user){
			echo "<script>
					window.history.back(-1);
			 		alert('Usuario ya existe'); 

			 	</script>";
		}
		else {
			if (mysqli_query($link,"Insert into alumnos (usuario, contrasena, nombre, apellidoP, apellidoM, carrera, porcentaje, email) values ('$user', '$pass', '$nombre', '$apellidoP', '$apellidoM', '$carrera',$porcentaje, '$email');") == true){
				
			}else{
				echo "<script> alert('Consulta incorrecta'); </script>";
			}
			
		}
		mysqli_close($link);
	}
?>
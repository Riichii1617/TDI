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
		if(mysqli_select_db($link,"TeacherMatch") == true){//Selecciona la base de datos a usar 
			echo "<script> alert('Conectado'); </script>";
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
					echo "Exito<br>";
				}else{
					echo "<script> alert('Consulta incorrecta'); </script>";
				}
				
			}
		}else{
			echo "<script> alert('No conectado'); </script>";
			echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
 		    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
		}
		
		mysqli_close($link);
	}
?>
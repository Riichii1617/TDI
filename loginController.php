<?php
    $usuario= $_REQUEST['usuario'];
    $contrasena= $_REQUEST['contrasena'];
    $bd = new mysqli("localhost","root","","TeacherMatch");
    $query= "SELECT usuario, contrasena FROM alumnos WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
    $result= $bd->query($query);
    if(mysqli_num_rows($result) > 0){
        
    }else{
        echo "<script>
            alert('Usuario no existente');
        </script>";
    }
?>
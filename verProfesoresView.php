<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesores</title>
</head>
<body>
    <table style="width:30%" border>
        <tr>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
        </tr>

        <?php                
        $bd = new mysqli("localhost","root","","TeacherMatch");
        $query= "SELECT * FROM profesor";
        $result = $bd->query($query);        
        while($row= mysqli_fetch_array($result)){
                $id= $row['idProfesor'];
                $nombre= $row['nombre'];
                $apellidoP= $row['apellidoP'];
                $apellidoM= $row['apellidoM'];                
                echo "<tr>";
                echo "<td> $nombre </td>";
                echo "<td>$apellidoP</td>";
                echo "<td>$apellidoM</td>";
                echo "</tr>";
        }
        
    ?>
        
    </table>
    
</body>
</html>
<?php
    ///require("Controllers/verProfesoresController.php");
?>

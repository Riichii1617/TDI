<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reseñas</title>
</head>
<body>
    <table style="width:30%" border>
        <tr>
            <th>Materia</th>
            <th>Claridad</th>
            <th>Ayuda</th>
            <th>Facilidad</th>
            <th>Alumno</th>
        </tr>

        <?php
            $bd = new mysqli("localhost","root","", "TeacherMatch");
            $result= $bd->query("SELECT * FROM resena");

            while($row= mysqli_fetch_array($result)){
                $claridad= $row['claridad'];
                $ayuda= $row['ayuda'];
                $facilidad= $row['facilidad'];
                $idAlumno= $row['id_Alumno'];
                $searchAlumno= $bd->query("SELECT nombre FROM alumnos WHERE idAlumno = $idAlumno");
                $res= mysqli_fetch_array($searchAlumno);
                $alumno= $res['nombre'];
                echo "<tr>";
                echo "<td></td>";
                echo "<td>$claridad</td>";
                echo "<td>$ayuda</td>";
                echo "<td>$facilidad</td>";
                echo "<td>$alumno</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
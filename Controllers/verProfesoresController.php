<?php
    require("Model/Conexion.php");

    $con = new Conexion();
    $users = $con->consulta("Select * from alumnos");

    require("Views/verProfesoresView.php");
?>
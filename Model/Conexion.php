<?php
    class Conexion{

        private $con;

        public function __construct(){
            $this->con = new mysqli("localhost","root","","TeacherMatch");
        }

        public function consulta($query){
            $result = $this->con->query($query);
            while($row= mysqli_fetch_array($result)){
                $usuario= $row['usuario'];
                echo "$usuario";
            }
            return $result;

        }
    }
?>
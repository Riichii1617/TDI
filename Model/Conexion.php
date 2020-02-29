<?php
    class Conexion{

        private $con;

        public function __construct(){
            $this->con = new mysqli("localhost","root","","teachermatch");
        }

        public function consulta($query){
            $result = $this->con->query($query);
            while($row= mysqli_fetch_array($result)){
                $usuario= $row['usuario'];
                echo "$usuario";
            }

        }
    }
?>
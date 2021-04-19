<?php
    include("../modelo/constantes.php");

    class Conectar{

        public static function conexion() {
            try {
                $conexion_db=new PDO("mysql:host=".DB_HOST."; dbname=".DB_NOMBRE.";", DB_USUARIO, DB_PW);
                $conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conexion_db->exec("set character set ".DB_CHARSET);               
            } catch(Exception $e) {
                die("Error: " . $e->getMessage());
                echo "Error de conexión en la línea: " . $e->getLine();
            }

            return $conexion_db;
        }
    }
?>
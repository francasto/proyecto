<?php   
    require_once("../modelo/conectar.php");

    class Registro_modelo {
        private $db;
        private $reg;

        public function __construct() {
            $this->db=Conectar::conexion();
            $this->reg=0;

        }

        public function get_registrado() {
            $correo=htmlentities(addslashes($_POST["email"]));
            $pw=htmlentities(addslashes($_POST["pw"]));
            $sql="select * from jugadores where email = '" . $correo . "'";
            $consulta=$this->db->query($sql);
            $this->reg=$consulta->rowCount();

            return $this->reg;
        }

        public function set_registro() {
            $nombre=htmlentities(addslashes($_POST["nombre"]));
            $apellido1=htmlentities(addslashes($_POST["apellido1"]));
            $apellido2=htmlentities(addslashes($_POST["apellido2"]));
            $tel=htmlentities(addslashes($_POST["tel"]));
            $correo=htmlentities(addslashes($_POST["email"]));
            $pw=htmlentities(addslashes($_POST["pw"]));
            $foto="../img/perfil.jpg";
            $apodo="El pelusa";
            $pw=password_hash($pw, PASSWORD_DEFAULT);
            $sql="insert into jugadores (nombre, apellido1, apellido2, email, movil, password, foto, apodo) values ('" . $nombre . "','" . $apellido1 . "','" . $apellido2 . "','" . 
            $correo . "','" . $tel . "','" . $pw . "','" . $foto . "','" . $apodo . "');";
            $consulta=$this->db->query($sql);

            return $consulta;
        }
    }
?>
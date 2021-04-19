<?php   
    require_once("../modelo/conectar.php");

    class Login_modelo {
        private $db;
        private $reg;

        public function __construct() {
            $this->db=Conectar::conexion();
            $this->reg=0;

        }

        public function get_reg() {
            $correo=htmlentities(addslashes($_POST["email"]));
            $pw=htmlentities(addslashes($_POST["password"]));
            $sql="select * from jugadores where email = '" . $correo . "'";
            $consulta=$this->db->query($sql);
            
            return $consulta;
        }
    }
?>
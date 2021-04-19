<?php   
    require_once("../modelo/conectar.php");

    class Jugadores_modelo {
        private $db;
        private $jugadores;

        public function __construct() {
            $this->db=Conectar::conexion();
            $this->jugadores=array();
        }

        public function get_jugadores() {
            $consulta=$this->db->query("select * from jugadores");
            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
                $this->jugadores[]=$filas;
            }

            return $this->jugadores;
        }
    }
?>
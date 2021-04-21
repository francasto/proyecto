<?php   
    require_once("../modelo/conectar.php");

    class Pachangas_modelo {
        private $db;

        public function __construct() {
            $this->db=Conectar::conexion();
        }

        public function get_pachangas() {
            $consulta=$this->db->query("select * from partidos where id_usuario = " . $_SESSION["id"] . " and activo = 1");
            if($consulta->rowCount() > 0) {
                while($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $filas["id_pabellon"] . "'>" . $filas["nombre"] . ". " . $filas["localidad"] . "</option>";
                }
            }
            
        }

    }
?>
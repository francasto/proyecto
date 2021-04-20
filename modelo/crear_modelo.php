<?php   
    require_once("../modelo/conectar.php");

    class Crear_modelo {
        private $db;
        private $pabellones;

        public function __construct() {
            $this->db=Conectar::conexion();
            $this->pabellones=array();
        }

        public function get_pabellones() {
            $consulta=$this->db->query("select * from pabellones where id_creador = '" . $_SESSION["id"] . "'");
            if($consulta->rowCount() > 0) {
                while($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
                    $this->pabellones[]=$filas;
                    echo "<option value='" . $filas["id_pabellon"] . "'>" . $filas["nombre"] . ". " . $filas["localidad"] . "</option>";
                }
            }
            
        }

    }
?>
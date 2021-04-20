<?php   
    require_once("../modelo/conectar.php");

    class Crear_modelo {
        private $db;

        public function __construct() {
            $this->db=Conectar::conexion();

        }

        public function set_pachanga() {
            $fecha=htmlentities(addslashes($_POST["fecha"]));
            $hora=htmlentities(addslashes($_POST["hora"]));
            $pabellon=htmlentities(addslashes($_POST["pabellon"]));
            $precio=htmlentities(addslashes($_POST["precio"]));
            $codigo=htmlentities(addslashes($_POST["visibilidad"]));
            $id=htmlentities(addslashes($_POST["id_creador"]));
            
            $sql="insert into pachangas (fecha, hora, id_pabellon, precio, codigo_pachanga, id_creador) values ('" . $fecha . "','" . $hora . "','" . $pabellon . "','" . 
            $precio . "','" . $codigo . "','" . $id . "');";
            $consulta=$this->db->query($sql);
            header("location:../vista/zonaprivada.php");
            //return $consulta;
        }
    }
?>
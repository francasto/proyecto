<?php   
    require_once("../modelo/carga_pabellones_modelo.php");

    $pab=new Carga_pabellones_modelo();
    $pab->get_pabellones();

?>
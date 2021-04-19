<?php
    require_once("../modelo/pabellones_modelo.php");   

    $pabellon=new Pabellones_modelo();


    $pabellon->set_pabellon();
    header("location:../vista/crear.php");    
?>
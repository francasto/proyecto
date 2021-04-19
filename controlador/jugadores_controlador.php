<?php   
    require_once("../modelo/jugadores_modelo.php");

    $jugadores=new Jugadores_modelo();
    $array_jugadores=$jugadores->get_jugadores();

    require_once("../vista/jugadores_vista.php");
?>
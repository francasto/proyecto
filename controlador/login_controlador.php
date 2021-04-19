<?php   
    require_once("../modelo/login_modelo.php");

    $login=new Login_modelo();
    $reg=$login->get_reg();

    require_once("../vista/login_vista.php");
?>
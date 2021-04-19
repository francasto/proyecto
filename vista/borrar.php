<?php
    require_once("../modelo/mail_modelo.php");

    $texto=include("correo_bienvenida.php");
    $email=new Mail_modelo("francasto@gmail.com","Bienvenido a Pachangas PRO",$texto);
    $email->enviar_mail();
    echo $texto;
?>

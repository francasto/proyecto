<?php
    include("header.php");
    session_start();
    if(!isset($_SESSION["usuario"])) {
        header("Location:../index_.php");
    }


    include("navbarprivada.php"); 
?>
    <div class='fondoprivado'>
        <div class='fondoblanco'>"



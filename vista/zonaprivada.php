<?php include("header_privado.php"); ?>

        <div class="section container">
            <div class="row center-align">
                <h1>Zona privada</h1>
                <?php
                    echo "Hola: " . $_SESSION["usuario"] . "<br><br>";
                ?>
                <a href="<?php echo $_SERVER['PHP_SELF'];?> " class="btn">Recargar página</a>
                <a href="../controlador/cerrarsesion.php" class="btn">Cerrar sesión</a>                
            </div>
        </div>

<?php include("footer_privado.php"); ?>
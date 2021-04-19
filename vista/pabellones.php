<?php include("header_privado.php"); ?>

    <div class="section container">
        <div class="row center-align">
            <h2>Pabellones</h2>
            <h6>Rellena el formulario para dar de alta un pabellón.</h6>
            <br><br>
            <div class="col s12 m12 l6 offset-l3">
                <form action="../controlador/pabellones_controlador.php" class="col s12" method="post" accept-charset="UTF-8">
                    <div class="row card-panel">
                        <div class="input-field col s12">
                            <input type="text" id="nombre" name="nombre" class="validate" required>
                            <label for="nombre">Nombre del pabellón:</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="text" id="direccion" name="direccion" class="validate" required>
                            <label for="direccion">Dirección:</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="text" id="localidad" name="localidad" class="localidad" required>
                            <label for="localidad">Localidad:</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="tel" id="tel" name="tel" pattern="[0-9]{9}" class="validate" required>
                            <label for="tel">Teléfono:</label>
                        </div> 
                        <div class="input-field col s12">
                            <input type="hidden" id="id_creador" name="id_creador" value="<?php echo $_SESSION['id']; ?>">
                        </div>

                                                                    
                        <button class="btn" type="submit">Crear pabellón</button>
                    </div>
                </form>
            </div>              
        </div>
    </div>

    <script>
        $(document).ready(function(){
            //var id = <?php echo $_SESSION['id']; ?>;
            //$("#id_creador").val(id);
    })
    </script>

<?php include("footer_privado.php"); ?>
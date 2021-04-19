<?php include("header_privado.php"); ?>

    <div class="section container">
        <div class="row center-align">
            <h2>Crear pachangas</h2>
            <h6>Rellena el formulario y crea tu propia pachanga.</h6>
            <br><br>
            <div class="col s12 m12 l6 offset-l3">
                <form action="../controlador/registrar_controlador.php" class="col s12" method="post" accept-charset="UTF-8">
                    <div class="row card-panel">
                        <div class="input-field col s10">
                        <select id="pabellon" name="pabellon" class="validate" required>
                            <option value="" disabled selected>Pabellón</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                        </div>
                        <div class="input-field col s2">
                            <a class="waves-effect waves-light btn">Nuevo</a>
                        </div>
                        <div class="input-field col s12">
                            <input type="date" id="fecha" name="fecha" class="validate" required>
                            <label for="fecha">Fecha:</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="time" id="hora" name="hora" class="validate" required>
                            <label for="hora">Hora:</label>
                        </div>
                        <div class="input-field col s12">
                            <input type="text" id="precio" name="precio" class="validate" required>
                            <label for="precio">Precio:</label>
                        </div>
                        <div class="input-field col s12"> 
                            <p class="col s12">
                                <label>
                                    <input class="with-gap" id="publico" name="visibilidad" type="radio" value="000000" checked>
                                    <span>Pachanga pública</span>
                                </label>
                            </p>                       
                            <p class="col s6">
                                <label>
                                    <input class="with-gap" id="privado" name="visibilidad" type="radio" value="javascript valor de clave">
                                    <span>Pachanga privada</span>
                                </label>
                            </p>
                            <div class="input-field col s6" id="campoClave">
                                <input type="text" id="clave" name="clave" class="validate" placeholder="De 6 a 12 caracteres" pattern="[A-Za-z0-9]{6,12}" required>
                                <label for="clave">Clave de la pachanga:</label>
                            </div>                            
                        </div>                      
            
                        <button class="btn" type="submit">Crear pachanga</button>
                    </div>
                </form>
            </div>              
        </div>
        <div class="row center-align" id="resultado">
        
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $("#campoClave").hide();
            $('#privado').on("click", function(){
                var c = document.getElementById("privado").checked;
                if (c) {
                    $("#campoClave").show();
                }
            });
            $('#publico').on("click", function(){
                var d = document.getElementById("publico").checked;
                if (d) {
                    $("#campoClave").hide();
                }
            });
            $('#clave').on("blur", function(){
                $("#privado").val($("#clave").val());
                console.log($("#privado").val());
            });
    })
    </script>

<?php include("footer_privado.php"); ?>
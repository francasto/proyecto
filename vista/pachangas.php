<?php include("header_privado.php"); ?>

        <div class="section container">
            <div class="row center-align">
                <h1>Pachangas en curso</h1>
                <?php
                    echo "Hola: " . $_SESSION["usuario"] . "<br><br>";
                ?>
                <a href="<?php echo $_SERVER['PHP_SELF'];?> " class="btn">actualizar pachangas</a>
                <a href="../controlador/cerrarsesion.php" class="btn">Cerrar sesión</a>                
            </div>
        </div>
        <div class="section container">
            <div class="row">                
                <div class="col s12 m6 l3">            
                    <div class="card-panel orange darken-4 tarjeta">
                        <div class="card-content white-text">                                        
                            <h5>24/01/2007</h5>
                            <p>Lugar: Pabellón de Montequinto</p>
                            <p>Hora: 21:00</p>
                            <p>Precio por persona: 2€</p>
                            <div>Organizador: Fran 654927642</div>
                            <br>
                            <a href="#" class="btn yellow black-text waves-effect waves-block waves-light">Abandonar pachanga</a>
                        </div>                            
                        
                    </div>
                </div>
                <div class="col s12 m6 l3">            
                    <div class="card-panel orange darken-4 tarjeta">
                        <div class="card-content white-text">                                        
                            <h5>24/01/2007</h5>
                            <p>Lugar: Pabellón de Montequinto</p>
                            <p>Hora: 21:00</p>
                            <p>Precio por persona: 2€</p>
                            <div>Organizador: Fran 654927642</div><br>
                            <div>Participantes:</div>
                            <p class="col s6">1 Guille <br>2 Mariana <br>3 Fran <br>4 Messi <br>5 Gordillo</p>
                            <p class="col s6">6 Pepito <br>7 Julito <br>8 Jaimito <br>9 Pepe <br>10 Pepa</p>
                            <a href="#" class="btn green black-text waves-effect waves-block waves-light">Cerrar convocatoria</a><br>
                            <a href="#" class="btn yellow black-text waves-effect waves-block waves-light">Cancelar pachanga</a>
                        </div>                            
                        
                    </div>
                </div>
                <div class="col s12 m6 l3">            
                    <div class="card-panel orange darken-4 tarjeta">
                        <div class="card-content white-text">                                        
                            <h5>24/01/2007</h5>
                            <p>Lugar: Pabellón de Montequinto</p>
                            <p>Hora: 21:00</p>
                            <p>Precio por persona: 2€</p>
                            <div>Organizador: Fran 654927642</div>
                            <br>
                            <a href="#" class="btn yellow black-text waves-effect waves-block waves-light">Abandonar pachanga</a>
                        </div>                            
                        
                    </div>
                </div>
                <div class="col s12 m6 l3">            
                    <div class="card-panel orange darken-4 tarjeta">
                        <div class="card-content white-text">                                        
                            <h5>24/01/2007</h5>
                            <p>Lugar: Pabellón de Montequinto</p>
                            <p>Hora: 21:00</p>
                            <p>Precio por persona: 2€</p>
                            <div>Organizador: Fran 654927642</div><br>
                            <div>Participantes:</div>
                            <p class="col s6">1 Guille <br>2 Mariana <br>3 Fran <br>4 Messi <br>5 Gordillo</p>
                            <p class="col s6">6 Pepito <br>7 Julito <br>8 Jaimito <br>9 Pepe <br>10 Pepa</p>
                            <a href="#" class="btn green black-text waves-effect waves-block waves-light">Cerrar convocatoria</a><br>
                            <a href="#" class="btn yellow black-text waves-effect waves-block waves-light">Cancelar pachanga</a>
                        </div>                            
                        
                    </div>
                </div>
            </div>
            <div class="row center-align">
                <ul class="pagination">
                    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                    <li class="active waves-effect"><a href="#!">1</a></li>
                    <li class="waves-effect"><a href="#!">2</a></li>
                    <li class="waves-effect"><a href="#!">3</a></li>
                    <li class="waves-effect"><a href="#!">4</a></li>
                    <li class="waves-effect"><a href="#!">5</a></li>
                    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                </ul>
            </div>
        </div>

<?php include("footer_privado.php"); ?>
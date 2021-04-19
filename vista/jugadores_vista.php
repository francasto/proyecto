<!DOCTYPE html>
<html lang="eS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas</title>
</head>
<body>
    <?php
        foreach($array_jugadores as $elemento) {
            echo "<br>Nombre: " . $elemento["nombre"] . " " . $elemento["apellido1"] . " " . $elemento["apellido2"] . " email: " . $elemento["email"] . " móvil: " . $elemento["movil"] . " password: " . $elemento["password"];
        }
    ?>
</body>
</html>
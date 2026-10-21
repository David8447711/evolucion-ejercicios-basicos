<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>
<body>

    <?php require 'menu.php'; ?>

    <h2>Ejercicio 2: Mayoría de edad</h2>

    <?php
    $edad = 20;

    if ($edad >= 18) {
        echo "Con $edad años, eres mayor de edad.";
    } else {
        echo "Con $edad años, eres menor de edad.";
    }
    ?>

    <br><br>
    <a href="index.php">Volver al inicio</a>

</body>
</html>
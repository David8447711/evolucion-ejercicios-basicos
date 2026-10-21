<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>

    <?php require 'menu.php'; ?>

    <h2>Ejercicio 3: Secuencia</h2>

    <?php
    $num = 7;

    for ($i = 1; $i <= $num; $i++) {
        echo $i . " ";
    }

    echo "<br>";

    for ($i = $num; $i >= 1; $i--) {
        echo $i . " ";
    }
    ?>

    <br><br>
    <a href="index.php">Volver al inicio</a>

</body>
</html>
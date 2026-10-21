<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>

    <?php require 'menu.php'; ?>

    <h2>Ejercicio 1: Calculadora</h2>
    
    <?php
    $num1 = 12;
    $num2 = 4;

    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    $division = $num1 / $num2;

    echo "Suma ($num1 + $num2): " . $suma . "<br>";
    echo "Resta ($num1 - $num2): " . $resta . "<br>";
    echo "Multiplicación ($num1 * $num2): " . $multiplicacion . "<br>";
    echo "División ($num1 / $num2): " . $division . "<br>";
    ?>

    <br>
    <a href="index.php">Volver al inicio</a>

</body>
</html>
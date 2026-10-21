<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1</title>
</head>
<body style="background-color: #222; color: white; font-family: Arial;">

    <?php require 'menu.php'; ?>

    <h2 style="padding: 20px;">Ejercicio 1: Calculadora</h2>
    
    <div style="padding: 0 20px;">
        <?php
        $num1 = 12;
        $num2 = 4;

        echo "Suma: " . ($num1 + $num2) . "<br>";
        echo "Resta: " . ($num1 - $num2) . "<br>";
        echo "Multiplicación: " . ($num1 * $num2) . "<br>";
        echo "División: " . ($num1 / $num2) . "<br>";
        ?>
    </div>

    <br>
    <a href="index.php" style="color: yellow; padding: 20px;">Volver al inicio</a>

</body>
</html>
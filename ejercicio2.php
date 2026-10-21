<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 2</title>
</head>
<body style="background-color: #222; color: white; font-family: Arial;">

    <?php require 'menu.php'; ?>

    <h2 style="padding: 20px;">Ejercicio 2: Edad</h2>

    <div style="padding: 0 20px;">
        <?php
        $edad = 20;

        if ($edad >= 18) {
            echo "Con $edad años, eres mayor de edad.";
        } else {
            echo "Con $edad años, eres menor de edad.";
        }
        ?>
    </div>

    <br>
    <a href="index.php" style="color: yellow; padding: 20px;">Volver al inicio</a>

</body>
</html>
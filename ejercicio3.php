<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 3</title>
</head>
<body style="background-color: #222; color: white; font-family: Arial;">

    <?php require 'menu.php'; ?>

    <h2 style="padding: 20px;">Ejercicio 3: Secuencia</h2>

    <div style="padding: 0 20px;">
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
    </div>

    <br>
    <a href="index.php" style="color: yellow; padding: 20px;">Volver al inicio</a>

</body>
</html>
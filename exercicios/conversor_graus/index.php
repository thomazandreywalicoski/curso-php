<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter Graus em Fahrenheit</title>
</head>
<body>
    <div>
        <p>
            A temperatura em Fahrenheit é:
            <?php

            $graus_celsius = 25;
            $graus_fahrenheit = ($graus_celsius * 1.8) + 32;

            echo $graus_fahrenheit,  " °F";
            ?>
        </p>
    </div>
</body>
</html>


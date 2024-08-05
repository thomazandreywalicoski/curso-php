<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <div>
        <p>O seu IMC está na faixa:

            <?php

            $peso = 85;
            $altura = 1.88;
            $imc = $peso / ($altura * $altura);
            $situacao = "";

            if($imc < 18.5) {
                $situacao = "Magreza";
            } else if($imc >= 18.5 && $imc <= 24.9) {
                $situacao = "Normal";
            } else if($imc >= 24.9 && $imc <= 30) {
                $situacao = "Sobrepeso";
            } else {
                $situacao = "Obesidade";
            }

            echo $situacao;

            ?>
        </p>
    </div>
</body>
</html>


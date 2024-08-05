<?php

// Loop for(): para

$num1 = 5;
$num2 = 6;

$resultado = 0;

for($i = 0; $i < $num2; $i++) {
    $resultado += $num1;
}

echo "O resultado da multiplicação é: " . $resultado;

    
// Loop do {} while(): Faça enquanto

$k = 0;

do {
    $k++;
} while ($k < 10);

echo "<p>O resultado é: " . $k; "</p>";

// Loop while(): enquanto

$k = 0;

while($k < 10) {
    $k++;
}

echo "<p>O resultado é: " . $k; "</p>";

/* Loop foreach(): para cada / arrays e índices automáicos
                             / arrays e índices definidos
*/

$nomes = array(
    "a" => "Aldimara", 
    "b" => "Osmar",
    "c" => "Thomaz",
    "d" => "Cassiano");

/* for($j = 0; $j < 4; $j++) {
    echo "<p>" . $nomes[$j] . "</p>";
}  */

echo "<p>Marque a alternativa correta:</p>";
foreach ($nomes as $indice => $nome){
    echo $indice . ") " . $nome . "<br>";
}

?>